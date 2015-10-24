<?php
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





