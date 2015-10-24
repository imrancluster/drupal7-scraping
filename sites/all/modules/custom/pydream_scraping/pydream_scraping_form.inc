<?php
/**
 * @file
 * pydream_scraping_form.inc
 */

/**
 * Scraping page.
 */
function pydream_scraping_page() {

    $scrap_data = array();

    if ( isset($_GET['sid']) && !empty($_GET['sid']) ) {

        $scrap_data = _get_scrap_data_by_sid($_GET['sid']);
    }

    $items = array(
        'scrap_data'    => $scrap_data,
    );

    return theme( 'pydream_scraping_form_page', array('items' => $items) );
}


/**
 * $_GET['sid']
 * get scrap data by sid
 */
function _get_scrap_data_by_sid($sid) {

    $result = db_select('pydream_scrap', 'ps')
        ->fields('ps')
        ->condition('id', $sid)
        ->execute()
        ->fetchAssoc();

    if ( $result )
        return $result;
    else
        return false;
}


/**
 * Scraping save
 */
function _pydream_scraping_save() {

    global $user;

    //echo "<pre>"; print_r($_POST); echo "</pre>";
    //die;

    $post = $_POST;

    if ( isset($post['submit']) && $post['submit']=="Submit" ) {

        $flag = isset($post['scrap_flag']) && $post['scrap_flag']=='on' ? 1 : 0;

        $data = array(
            'subject'       => $post['scrap_subject'],
            'url'           => $post['scrap_url'],
            'field_map'     => $post['detail_link_field_map'],
            'language'      => $post['scrap_language'],
            'company'       => $post['scrap_company'],
            'category'      => $post['scrap_category'],
            'content_type'  => $post['scrap_content_type'],
            'filter'        => $post['scrap_filter'],
            'title'         => $post['scrap_title'],
            'image_src'     => $post['scrap_image_source'],
            'src'           => $post['scrap_source'],
            'field1'        => $post['scrap_field1'],
            'field2'        => $post['scrap_field2'],
            'field3'        => $post['scrap_field3'],
            'field4'        => $post['scrap_field4'],
            'field5'        => $post['scrap_field5'],
            'body'          => $post['scrap_body'],
            'schedule'      => $post['scrap_schedule'],
            'item_limit'    => $post['scrap_item_limit'],
            'flag'          => $flag,
            'created'       => REQUEST_TIME,
            'user'          => $user->uid,
        );

        $inserted = db_insert('pydream_scrap')
            ->fields($data)
            ->execute();

        drupal_set_message("The scrap has been inserted.", "status");
        drupal_goto("scraping-list");

    } else if ( isset($post['update']) && $post['update']=="Update" ) {


        $flag = isset($post['scrap_flag']) && $post['scrap_flag']=='on' ? 1 : 0;

        $data = array(
            'subject'       => $post['scrap_subject'],
            'url'           => $post['scrap_url'],
            'field_map'     => $post['detail_link_field_map'],
            'language'      => $post['scrap_language'],
            'company'       => $post['scrap_company'],
            'category'      => $post['scrap_category'],
            'content_type'  => $post['scrap_content_type'],
            'filter'        => $post['scrap_filter'],
            'title'         => $post['scrap_title'],
            'image_src'     => $post['scrap_image_source'],
            'src'           => $post['scrap_source'],
            'field1'        => $post['scrap_field1'],
            'field2'        => $post['scrap_field2'],
            'field3'        => $post['scrap_field3'],
            'field4'        => $post['scrap_field4'],
            'field5'        => $post['scrap_field5'],
            'body'          => $post['scrap_body'],
            'schedule'      => $post['scrap_schedule'],
            'item_limit'    => $post['scrap_item_limit'],
            'flag'          => $flag,
            'created'       => REQUEST_TIME,
            'user'          => $user->uid,
        );

        $updated = db_update('pydream_scrap')
            ->fields($data)
            ->condition('id',$post['sid'])
            ->execute();

        drupal_set_message("The scrap has been updated.", "status");
        drupal_goto("scraping-list");


    } else {

        drupal_set_message("Some fields are required.", "warning");
        drupal_goto("scraping");
    }

    return "";
}



/**
 * pydream_scraping_listing_page
 */
function _pydream_scraping_listing_page() {

    //Get scrap list
    $scrap_list = _get_scrap_list();

    $items = array(
        'list' => $scrap_list,
    );

    return theme( 'pydream_scraping_listing_page', array('items' => $items) );
}


/**
 * Get srap list
 */
function _get_scrap_list() {

    $results = db_select('pydream_scrap', 'ps')
        ->fields('ps')
        ->execute();

    $data = array();

    foreach ( $results as $result ) {
        $data[] = array(
            'sid'       => $result->id,
            'subject'   => $result->subject,
            'url'       => $result->url,
            'field_map' => $result->field_map,
            'language'  => $result->language,
            'company'   => $result->company,
            'category'  => $result->category,
            'title'     => $result->title,
            'schedule'  => $result->schedule,
            'created'   => date('d-m-Y i:h:s',$result->created),
        );
    }

    if ( !empty($data) ) {
        return $data;
    } else { return false;}

}







