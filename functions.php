<?php
require_once 'src/php/wpFunctions/scripts.php';
require_once 'src/php/functions/index.php';
require_once 'src/php/classes/index.php';
require_once 'src/php/pageElements/index.php';
require_once 'src/php/devTools/devTools.php';

menuLocations();

function removeFunctionalities() {
  remove_post_type_support('page', 'editor');
  remove_post_type_support('post', 'editor');
  remove_menu_page('edit-comments.php');
}
add_action('admin_init', 'removeFunctionalities');

add_theme_support('title-tag');
add_image_size('mediumLarge', 500, 500);

add_action('init', 'language'); // Function housed in dist/php/function/language.php

// Custom post page for index sections
$indexSections = new CustomPostType;
$indexSections->setName('Index sections');
$indexSections->setSingularName('Index section');
$indexSections->setAdminMenuIcon('dashicons-admin-home');
$indexSections->setAdminMenuPosition(20);
$indexSections->setPostType('post');
$indexSections->showInMenu(false);
$indexSections->setSupport('title');
$indexSections->initPostType();

// ACF option pages
acf_add_options_page(array(
	'page_title'  => 'Theme options',
  'menu_slug'   => 'themeOptions',
  'icon_url'    => 'dashicons-admin-settings'
));

acf_add_options_sub_page(array(
  'page_title'    => 'Theme field options',
  'menu_title'    => "Theme fields",
  'parent_slug'   => 'themeOptions'
));

acf_add_options_sub_page(array(
  'page_title'    => 'Products popup options',
  'menu_title'    => "Product's popup",
  'parent_slug'   => 'themeOptions'
));

acf_add_options_sub_page(array(
  'page_title'    => "Menu options",
  'menu_title'    => "Menu",
  'parent_slug'   => 'themeOptions'
));

acf_add_options_sub_page(array(
  'page_title'    => "Footer options",
  'menu_title'    => "Footer",
  'parent_slug'   => 'themeOptions'
));

acf_add_options_sub_page(array(
  'page_title'    => "Header options",
  'menu_title'    => "Header",
  'parent_slug'   => 'themeOptions'
));

acf_add_options_sub_page(array(
  'page_title'    => "Language options",
  'menu_title'    => "Language",
  'parent_slug'   => 'themeOptions'
));

function populateFooterLocations($field) {
  $field['choices'] = array();

  if(have_rows('acfSiteMenuLocations', 'option')) {
    while (have_rows('acfSiteMenuLocations', 'option')) {
      the_row();
      $field['choices'][get_sub_field('location')] = get_sub_field('description');
    }
  }
  return $field;
}

function populateBackgroundColors($field) {
  $field['choices'] = array();

  if(have_rows('acfThemeOptbackClrs', 'option')) {
    while (have_rows('acfThemeOptbackClrs', 'option')) {
      the_row();
      $field['choices'][get_sub_field('cssClass')] = get_sub_field('colorName');
    }
  }
  return $field;
}

function populateButtonColors($field) {
  $field['choices'] = array();

  if(have_rows('acfThemeOptBtnClrs', 'option')) {
    while (have_rows('acfThemeOptBtnClrs', 'option')) {
      the_row();
      $field['choices'][get_sub_field('cssClass')] = get_sub_field('colorName');
    }
  }
  return $field;
}

// Populate ACF fields
add_filter('acf/load_field/name=testoloco', 'populateButtonColors');

// Theme options footer menu location fields
add_filter('acf/load_field/name=footerPrimLangLoc', 'populateFooterLocations');
add_filter('acf/load_field/name=footerSecLangLoc', 'populateFooterLocations');

// Theme options header menu location fields
add_filter('acf/load_field/name=primLangDesktop', 'populateFooterLocations');
add_filter('acf/load_field/name=secLangDesktop', 'populateFooterLocations');
add_filter('acf/load_field/name=primLangMobile', 'populateFooterLocations');
add_filter('acf/load_field/name=secLangMobile', 'populateFooterLocations');
