<?php
/**
 * @file
 * pothkoli_service.features.inc
 */

/**
 * Implements hook_node_info().
 */
function pothkoli_service_node_info() {
  $items = array(
    'pothkoli_service' => array(
      'name' => t('Pothkoli Service'),
      'base' => 'node_content',
      'description' => t('add a new item'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
