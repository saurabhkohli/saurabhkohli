<?php

/**
 * @file
 * Alter hook implementations.
 */

/**
 * Implements hook_html_head_alter().
 * - Simplify the meta charset element.
 */
function saby_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8',
  );
}

/**
 * Implements hook_css_alter().
 */
function saby_css_alter(&$css) {
  // Remove some core default stylesheets.
  unset(
    $css[drupal_get_path('module', 'system') . '/system.menus.css'],
    $css[drupal_get_path('module', 'system') . '/system.messages.css'],
    $css[drupal_get_path('module', 'system') . '/system.theme.css'],
    $css['misc/ui/jquery.ui.theme.css'],
    $css['misc/ui/jquery.ui.tabs.css'],
    $css[drupal_get_path('module', 'node') . '/node.css']
  );
}
