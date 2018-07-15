<?php
require_once 'dist/php/wpFunctions/scripts.php';
require_once 'dist/php/functions/index.php';
require_once 'dist/php/classes/index.php';
require_once 'dist/php/pageElements/index.php';
require_once 'dist/php/devTools/devTools.php';

menuLocations();

function removeFunctionalities() {
  remove_post_type_support('page', 'editor');
  remove_post_type_support('post', 'editor');
  remove_menu_page('edit-comments.php');
}
add_action('admin_init', 'removeFunctionalities');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('mediumLarge', 500, 500);

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
