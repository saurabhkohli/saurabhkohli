<?php

/**
 * @file
 * Preprocess hook implementations.
 */

/**
 * Implements template_preprocess_html().
 *
 * The changes made in this function affect the variables for the html.tpl.php
 * template file, which is located in templates/html.tpl.php of this theme.
 * Using drupal_css_css() is covered on pages 344-345.
 */
function saby_preprocess_html(&$vars) {
  // Unfortunately, the XHTML+RDFa 1.0 doctype is hardcoded. We don't want an
  // XHMTL doctype and the RDFa version is old. The following code changes it
  // to HTML+RDFa 1.1 when the RDF module is enabled, and a plain jane HTML5
  // doctype when it's not. To learn more about theming with RDFa in Drupal 7
  // see http://lin-clark.com/blog/theming-html5-and-rdfa-drupal-7
  /*if (module_exists('rdf')) {
    $vars['doctype'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML+RDFa 1.1//EN">' . "\n";
    $vars['rdf_profile'] = ' profile="' . $vars['grddl_profile'] . '"';
  }
  else {
    $vars['doctype'] = '<!DOCTYPE html>' . "\n";
    $vars['rdf_profile'] = '';
  }*/

  // Create a path to the theme for use in html.tpl.php.
  $vars['path'] = drupal_get_path('theme', 'saby');
  
  // Conditional stylesheet(s).
  // Add conditional CSS for IE8 and below.
  /*drupal_add_css($vars['path'] . '/css/ie.css', array(
    'group' => CSS_THEME,
    'media' => 'screen, projection',
    'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE),
    'weight' => 999,
    'preprocess' => FALSE,
  ));*/
}

/**
 * Implements template_preprocess_region().
 */
function saby_preprocess_region(&$vars) {
  // Add attributes to region wrappers.
  $vars['attributes_array']['id'] = drupal_html_id($vars['region']);
}

/**
 * Implements template_preprocess_block().
 */
function saby_preprocess_block(&$vars) {
  // Add decent classes for block titles.
  $vars['title_attributes_array']['class'][] = 'title';
  $vars['title_attributes_array']['class'][] = 'block-title';

  // Flag the first block in each region.
  if ($vars['block_id'] == 1) {
    $vars['classes_array'][] = 'first';
  }

  // Hide the block titles in the header by default.
  if ($vars['block']->region == 'top-navigation' || $vars['block']->region == 'main-navigation') {
    $vars['title_attributes_array']['class'][] = 'element-invisible';
  }

  // Lets add a unique identifier for the blocks that is configurable from admin via block title
  $block_title = !empty($vars['block']->title) ? $vars['block']->title : $vars['block']->subject;
  $block_title = str_replace( ' ', '-', preg_replace( '/\s+/', ' ', strtolower($block_title) ) );
  $vars['classes_array'][] = 'block-'.$block_title;
}
