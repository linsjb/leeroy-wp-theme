<?php
// Wordpress functions
require_once 'dist/php/wpFunctions/scripts.php';

require_once 'dist/php/functions/index.php';

// Classes
require_once 'dist/php/classes/index.php';

// Page elements
require_once 'dist/php/pageElements/index.php';

// Dev
require_once 'dist/php/devTools/devTools.php';

$siteNavigations = new NavigationRegistration;
$siteNavigations->regMenu('masterMenu', 'Header menu');
$siteNavigations->regMenu('aboutLeeroy', 'Footer middle section');
$siteNavigations->regMenu('resources', 'Footer right section');
$siteNavigations->regMenu('mobileMasterMenu', 'Mobile header menu');
$siteNavigations->buildMenu();

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
