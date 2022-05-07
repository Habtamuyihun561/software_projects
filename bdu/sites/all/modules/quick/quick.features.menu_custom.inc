<?php
/**
 * @file
 * quick.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function quick_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-qiuck-links.
  $menus['menu-qiuck-links'] = array(
    'menu_name' => 'menu-qiuck-links',
    'title' => 'Qiuck Links',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Qiuck Links');


  return $menus;
}
