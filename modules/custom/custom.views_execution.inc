<?php




use Drupal\views\ViewExecutable;
use Drupal\views\Plugin\views\query\QueryPluginBase;

/**
 * Implements hook_views_query_alter().
 */
function custom_views_query_alter(ViewExecutable $view, QueryPluginBase $query) {
  // print_r($query);
}
   
?>