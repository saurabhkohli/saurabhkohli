<?php

/**
 * @file
 * Theme setting callbacks for the Tweme theme.
 */

/**
 * Implements hook_form_FORM_ID_alter() for system_theme_settings.
 */
function tweme_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['custom_navigation'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bootstrap Navigation Customizations'),
    'navbar_inverse' => array(
      '#type' => 'checkbox',
      '#title' => t('Navigation Inverse'),
	  '#description' => t('Please check if Bootstrap Navigation Inverse Navigation required.'),
      '#default_value' => theme_get_setting('navbar_inverse'),
    ),
	'navbar_effect_check' => array(
	  '#type' => 'checkbox',
      '#title' => t('Bootstrap Navbar Effect'),
	  '#description' => t('Please check if Bootstrap Navbar Effect is required.'),
      '#default_value' => theme_get_setting('navbar_effect_check'),	  
	),
	'navbar_effect' => array(
	  '#type' => 'select',
	  '#title' => t('Select the Bootstrap Navbar Effect'),
	  '#states' => array(
	    'visible' => array(
		  ':input[name="navbar_effect_check"]' => array('checked' => TRUE),
		),
	  ),
	  '#options' => array(
	    'navbar-static-top' => t('Static Top'),
	    'navbar-fixed-top' => t('Fixed Top'),
	  ),
	  '#default_value' => theme_get_setting('navbar_effect'),
	),
    'custom_navbar_class' => array(
      '#type' => 'textfield',
      '#title' => t('Custom Navbar Class:'),
      '#default_value' => theme_get_setting('custom_navbar_class'),
    ),
    'custom_mainmenu_class' => array(
      '#type' => 'textfield',
      '#title' => t('Custom Mainmenu Class:'),
      '#default_value' => theme_get_setting('custom_mainmenu_class'),
    ),
  );
  $form['libraries'] = array(
    '#type' => 'fieldset',
    '#title' => t('Libraries'),
    'jquery_source' => array(
      '#type' => 'radios',
      '#title' => t('Load jQuery library from:'),
      '#options' => array(
        'googlecdn' => t('Google CDN'),
        'libraries' => t('sites/all/libraries/jquery'),
        'drupal' => t('Provided by Drupal'),
      ),
      '#default_value' => theme_get_setting('jquery_source'),
    ),
    'jquery_version' => array(
      '#type' => 'textfield',
      '#title' => t('jQuery version:'),
      '#default_value' => theme_get_setting('jquery_version'),
    ),
    'bootstrap_source' => array(
      '#type' => 'radios',
      '#title' => t('Load Twitter Bootstrap library from:'),
      '#options' => array(
        'bootstrapcdn' => t('Bootstrap CDN'),
        'libraries' => t('sites/all/libraries/bootstrap'),
        'theme' => t('[current_theme]/libraries/bootstrap'),
      ),
      '#default_value' => theme_get_setting('bootstrap_source'),
    ),
    'bootstrap_version' => array(
      '#type' => 'textfield',
      '#title' => t('Twitter Bootstrap version:'),
      '#default_value' => theme_get_setting('bootstrap_version'),
    ),
  );
}
