<?php

/**
 * include library
 */
include('library/simple_html_dom.php');

/**
 * @file
 * pydream_scraping_admin.inc
 */


/**
 * Scraping delete
 */
function _scraping_delete($sid) {

    $check = db_select('pydream_scrap', 'ps')
        ->fields('ps')
        ->condition('id', $sid)
        ->execute()
        ->fetchAssoc();

    if($check) {

        $deleted = db_delete('pydream_scrap')
            ->condition('id', $sid)
            ->execute();

        drupal_set_message("The scrap has been delete.", "status");
        drupal_goto("scraping-list");

    } else {
        drupal_set_message("This scrap id was not found.", "warning");
        drupal_goto("scraping-list");
    }
}


/**
 * Scrap manually
 */
function _scraping_manual($sid) {

    $response   = [];
    $data       = [];

    $scrap = db_select('pydream_scrap', 'ps')
        ->fields('ps')
        ->condition('id', $sid)
        ->execute()
        ->fetchAssoc();

    if($scrap) {

        // Scarping statement
        $html = file_get_html($scrap['url']);

        $limit = 0;

        foreach( $html->find('h2.title a') as $e ){

            $data[] = array(
                'title' => $e->innertext
            );

            if( $limit == 2 )
                break;

            $limit++;
        }

        //Node create
        _node_create_by_scraping_data($data);

        $response = array(
            'success'   => "yes",
            'data'      => $data,
        );

    } else {
        $response = array(
            'success'   => "no"
        );
    }

    drupal_json_output($response);
    exit();

}


/**
 * Node create by scraping data
 */
function _node_create_by_scraping_data($data) {

    if ( !empty($data) ) {

        foreach ( $data as $d ) {

            //Check this title is in our content type
            $query = db_select('node', 'n');
            $node_title_exists =  $query->fields('n', array('nid'))
                ->condition('n.type', 'article', '=')
                ->condition('n.title', $d['title'], '=')
                ->execute()
                ->fetchField();

            if (!$node_title_exists) {

                $node = new stdClass();
                $node->type = 'article';
                $node->language = LANGUAGE_NONE;
                node_object_prepare($node);

                $node->title = $d['title'];
                $node->body[$node->language][0]['value'] = "Test body";
                $node->body[$node->language][0]['summary'] = "Test body";
                $node->body[$node->language][0]['format'] = 'full_html';

                $node->status = 1;
                $node->promote = 0;
                $node->sticky = 0;
                $node->comment = 1;
                $node->uid = 1;
                $node->date = REQUEST_TIME;
                $node->created = REQUEST_TIME;

                node_save($node);
            }


        }

    }

}





