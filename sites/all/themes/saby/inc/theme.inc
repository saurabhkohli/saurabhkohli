<?php

/**
 * @file
 * Theme function overrides.
 */

/**
 * Overrides theme_breadcrumb().
 */
function saby_breadcrumb($vars) {

  if (!empty($vars['breadcrumb'])) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    // Output the breadcrumbs in a <ul>.
    $output .= '<ul class="breadcrumbs inline">';
    foreach ($vars['breadcrumb'] as $value) {
      $output .= '<li>' . $value . '</li>';
    }
    $output .= '</ul>';

    return '<nav id="breadcrumbs">' . $output . '</nav>';
  }
}

/**
 * Overrides theme_mark().
 */
function saby_mark($variables) {
  global $user;
  $type = $variables['type'];

  if ($user->uid) {
    if ($type == MARK_NEW) {
      return ' <mark class="new">' . t('new') . '</mark>';
    }
    elseif ($type == MARK_UPDATED) {
      return ' <mark class="updated">' . t('updated') . '</mark>';
    }
  }
}
?>