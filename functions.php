<?php
// Wordpress functions
require_once 'dist/php/functions/scripts.php';

// Classes
require_once 'dist/php/classes/index.php';

// Page elements
require_once 'dist/php/pageElements/index.php';

// Dev
require_once 'dist/php/devTools/devTools.php';

$test = new NavigationRegistration;
$test->regMenu('masterMenu', 'Header menu');
$test->regMenu('business', 'Footer left section');
$test->regMenu('aboutLeeroy', 'Footer middle section');
$test->regMenu('resources', 'Footer right section');
$test->buildMenu();

function removeFunctionalities() {
  remove_post_type_support('page', 'editor');
  remove_post_type_support('post', 'editor');
  remove_menu_page('edit-comments.php');
}

add_action('admin_init', 'removeFunctionalities');

add_theme_support('title-tag');

// Custom post page for index sections
$indexSections = new CustomPostType;
$indexSections->setName('Index sections');
$indexSections->setSingularName('Index section');
$indexSections->setAdminMenuIcon('dashicons-admin-home');
$indexSections->setAdminMenuPosition(20);
$indexSections->setPostType('page');
$indexSections->showInMenu(false);
$indexSections->setSupport('title');
$indexSections->initPostType();

// Custom post type for resources
$resources = new CustomPostType;
$resources->setName('Resources');
$resources->setSingularName('Resource');
$resources->setAdminMenuIcon('dashicons-hammer');
$resources->setAdminMenuPosition(20);
$resources->showInMenu(false);
$resources->setSupport('title');
$resources->setSupport('editor');
$resources->setPostType('page');
$resources->initPostType();
