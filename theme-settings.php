<?php

/**
 * @file
 * Theme settings form for Indy theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function indy_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['indy'] = [
    '#type' => 'details',
    '#title' => t('Indy'),
    '#open' => TRUE,
  ];

  $form['indy']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
