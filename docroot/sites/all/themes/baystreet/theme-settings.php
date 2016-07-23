<?php

function baystreet_form_system_theme_settings_alter(&$form, $form_state) {

  $theme_path = drupal_get_path('theme', 'baystreet');
  $form['settings'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
      '#attached' => array(
          'css' => array(drupal_get_path('theme', 'baystreet') . '/css/drupalet_base/admin.css'),
          'js' => array(
              drupal_get_path('theme', 'baystreet') . '/js/drupalet_admin/admin.js',
          ),
      ),
  );

  $form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'baystreet'),
  );

  //PORTFOLIO SETTING

  $form['settings']['portfolio'] = array(
      '#type' => 'fieldset',
      '#title' => t('Portfolio settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );



  $form['settings']['portfolio']['default_portfolio'] = array(
      '#type' => 'select',
      '#title' => t('Default portfolio display'),
      '#options' => array(
          '2col' => 'Portfolio - 2cols',
          '3col' => 'Portfolio - 3cols',
          '4col' => 'Portfolio - 4cols',
      ),
      '#default_value' => theme_get_setting('default_portfolio', 'baystreet'),
  );

  $form['settings']['portfolio']['default_nodes_portfolio'] = array(
      '#type' => 'select',
      '#title' => t('Number nodes show on portfolio page'),
      '#options' => drupal_map_assoc(array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 25, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 100, 'ALL')),
      '#default_value' => theme_get_setting('default_nodes_portfolio', 'baystreet'),
  );

//  $form['settings']['footer'] = array(
//      '#type' => 'fieldset',
//      '#title' => t('Footer settings'),
//      '#collapsible' => TRUE,
//      '#collapsed' => FALSE,
//  );
//  $form['settings']['footer']['footer_copyright_message'] = array(
//      '#type' => 'textarea',
//      '#title' => t('Footer copyright message'),
//      '#default_value' => theme_get_setting('footer_copyright_message', 'baystreet'),
//  );

  $form['settings']['custom_css'] = array(
      '#type' => 'fieldset',
      '#title' => t('Custom CSS'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['custom_css']['custom_css'] = array(
      '#type' => 'textarea',
      '#title' => t('Custom CSS'),
      '#default_value' => theme_get_setting('custom_css', 'baystreet'),
      '#description' => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
  );



  $form['settings']['skin'] = array(
      '#type' => 'fieldset',
      '#title' => t('Switcher Style'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );



  //Disable Switcher style;

  $form['settings']['skin']['baystreet_disable_switch'] = array(
      '#title' => t('Switcher style'),
      '#type' => 'select',
      '#options' => array('on' => t('ON'), 'off' => t('OFF')),
      '#default_value' => theme_get_setting('baystreet_disable_switch', 'baystreet'),
  );
  //Skin

  $form['settings']['skin']['built_in_skins'] = array(
      '#type' => 'radios',
      '#title' => t('Built-in Skins'),
      '#options' => array(
          'default.css' => t('Default'),
          'blue.css' => t('Blue'),
          'bridge.css' => t('Bridge'),
          'cyan.css' => t('Cyan'),
          'darkred.css' => t('Darkred'),
          'green.css' => t('Green'),
          'lightblue.css' => t('Lightblue'),
          'orange.css' => t('Orange'),
          'pink.css' => t('Pink'),
          'purple.css' => t('Purple'),
          'slate.css' => t('Slate'),
          'yellow.css' => t('Yellow'),
      ),
      '#default_value' => theme_get_setting('built_in_skins', 'baystreet')
  );
}
