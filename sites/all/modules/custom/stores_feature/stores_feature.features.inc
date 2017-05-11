<?php
/**
 * @file
 * stores_feature.features.inc
 */

/**
 * Implements hook_views_api().
 */
function stores_feature_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function stores_feature_node_info() {
  $items = array(
    'store' => array(
      'name' => t('Store'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Store Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
