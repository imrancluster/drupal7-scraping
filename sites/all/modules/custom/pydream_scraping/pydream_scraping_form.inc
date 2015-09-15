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

    echo "<pre>"; print_r($_POST); echo "</pre>";

    return "";
}







