<?php

/**
 * @file
 * Provides custom theme overrides and implementations.
 */

/**
 * Processes variables for preface.tpl.php.
 */
function tweme_process_preface(&$vars) {
  list($vars['title'], $vars['subtitle']) = _tweme_parse_title($vars['title']);
}

function tweme_navbar_header($vars) {
  $out = 	'<div class="navbar-header">';
  $out .= 		'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
  $out .= 			'<span class="sr-only">Toggle navigation</span>';
  $out .= 			'<span class="icon-bar"></span>';
  $out .= 			'<span class="icon-bar"></span>';
  $out .= 			'<span class="icon-bar"></span>';
  $out .= 		'</button>';
  $out .= 		'<a class="navbar-brand" alt="' . $vars['name'] . '" title="' . $vars['name'] . '" href="' . $vars['href'] . '">';
					if ($vars['logo']) {
						$out .= '<img src="' . $vars['logo'] . '" /> ';
					}else{
  $out .= 				$vars['name'];
					}
  $out .= 		'</a>';
  $out .= 	'</div>';
  return $out;  
}

/** Updated the below methods and create a navbar_header as per Bootstrap 3.0.2 navbar updated structure
/**
 * Returns HTML for the navbar brand.
 *
function tweme_navbar_brand($vars) {
  $out = '<a class="navbar-brand" href="' . $vars['href'] . '">';
  if ($vars['logo']) {
    $out .= '<img src="' . $vars['logo'] . '" /> ';
  }
  $out .= $vars['name'];
  $out .= '</a>';
  return $out;
}

/**
 * Returns HTML for the navbar toggler.
 *
function tweme_navbar_toggler($vars) {
  $out = '<div class="navbar-header">';
  $out .= '<button type="button" class="btn btn-default navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">';
  $out .= '<span class="icon-bar"></span>';
  $out .= '<span class="icon-bar"></span>';
  $out .= '<span class="icon-bar"></span>';
  $out .= '</button>';
  $out .= '</div>';
  return $out;
}
**/

/**
 * Returns HTML for the copyright text.
 */
function tweme_copyright($vars) {
  return date('Y') . ' &copy; ' . $vars['name'];
}

/**
 * Cleans up form markup leaving only <form> and <input> tags.
 */
function tweme_pure_form_wrapper($vars) {
  return strip_tags($vars['element']['#children'], '<form><input>');
}
