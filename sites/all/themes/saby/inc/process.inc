<?php

/**
 * @file
 * Process hook implementations.
 */

/**
 * Implements hook_process_html_tag().
 *
 * - Remove the type attribute from the <script>, <style> and <link> elements.
 * - Remove the CDATA comments from inline JavaScript and CSS.
 */
function saby_process_html_tag(&$vars) {
  $element = &$vars['element'];

  // Remove the "type" attribute.
  if (in_array($element['#tag'], array('script', 'link', 'style'))) {
    unset($element['#attributes']['type']);
    // Remove CDATA comments.
    unset($element['#value_prefix']);
    unset($element['#value_suffix']);
  }
}

/**
 * Implements template_process_pane_navigation().
 */
function saby_process_pane_navigation(&$vars) {
  $vars['main_menu'] = theme('links', array(
    'links' => menu_main_menu(),
    'attributes' => array('class' => array('nav-main')),
    'heading' => array(
      'text' => t('Main menu'),
      'level' => 'h2',
      'class' => array('element-invisible'),
    ),
  ));
  $vars['secondary_menu'] = theme('links', array(
    'links' => menu_secondary_menu(),
    'attributes' => array('class' => array('nav-secondary')),
    'heading' => array(
      'text' => t('Secondary menu'),
      'level' => 'h2',
      'class' => array('element-invisible'),
    ),
  ));
}
