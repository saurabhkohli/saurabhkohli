<?php

/**
 * @file
 * Template processing for the "base" theme. This file should only contain:
 *
 * hook_theme() Implementations:
 *
 *  Should the need for a new theme function, or template implementation of a
 *  form arise, the base_theme() hook located in this file should be used.
 *
 * Includes:
 *
 *  For the purpose of organization, the types of hook implementations have been
 *  split into separate include files:
 *
 *  alter.inc: Implementations of base_HOOK_alter().
 *  preprocess.inc: Implementations of base_preprocess_HOOK().
 *  process.inc: Implementations of base_process_HOOK().
 *  theme.inc: Theme function overrides.
 */

/**
 * Include hook files.
 * All of the processing runs through this file, so we include these files once
 * here.
 */
$inc = DRUPAL_ROOT . '/' . drupal_get_path('theme', 'saby') . '/inc/';

require_once $inc . 'alter.inc';
require_once $inc . 'preprocess.inc';
require_once $inc . 'process.inc';
require_once $inc . 'theme.inc';

/**
 * Implements hook_theme().
 *
 * Implementations of custom theme functions for forms and such go here. Note:
 * Any templates that are created need to reference the full path to where the
 * template is located.  Auto-discovery does not work at this level.
 */
function saby_theme() {
  $path = drupal_get_path('theme', 'saby');
  return array();
}
