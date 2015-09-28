<?php
//drupal_add_js(drupal_get_path('module', 'pydream_scraping') . '/pydream_scraping.js');
//drupal_add_css(drupal_get_path('module', 'pydream_scraping') . '/pydream_scraping.css');

/**
 * @file
 * pydream_scraping_form.inc
 */

/**
 * Scraping page.
 */
function pydream_scraping_page() {

    $items = array();

    return theme( 'pydream_scraping_form_page', array('items' => $items) );
}


/**
 * Scraping save
 */
function _pydream_scraping_save() {

    global $user;

    //echo "<pre>"; print_r($_POST); echo "</pre>";
    //die;

    $post = $_POST;

    if ( isset($post['scrap_subject']) && !empty($post['scrap_subject']) ) {

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

    $items = array();

    return theme( 'pydream_scraping_listing_page', array('items' => $items) );
}







