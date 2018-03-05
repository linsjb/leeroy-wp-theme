<?php
// Wordpress functions
require_once 'dist/php/functions/scripts.php';
require_once 'dist/php/functions/navigationRegister.php';

//Bootstrap grid
require_once 'dist/php/bootstrapGrid/bootstrapGrid.php';

// Classes´
require_once 'dist/php/classes/index.php';

// Page elements
require_once 'dist/php/pageElements/pageBackgroundType.php';
require_once 'dist/php/pageElements/indexSectionItems.php';
require_once 'dist/php/pageElements/informationPageTop.php';
require_once 'dist/php/pageElements/informationPageElements.php';
require_once 'dist/php/pageElements/resourcesSideBox.php';
require_once 'dist/php/pageElements/postAuthor.php';

// Dev
require_once 'dist/php/devTools/devTools.php';

// Init bootstrap grid
$grid = new BootstrapGrid(100);

add_action('admin_init', 'removeFunctionalities');

function removeFunctionalities() {
  // remove_post_type_support('page', 'editor');
  remove_post_type_support('post', 'editor');
  remove_menu_page('edit-comments.php');
}

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

// Custom post page for cases
$cases = new CustomPostType;
$cases->setName('Cases');
$cases->setSingularName('Case');
$cases->setAdminMenuIcon('dashicons-clipboard');
$cases->setAdminMenuPosition(20);
$cases->showInMenu(false);
$cases->setSupport('title');
$cases->initPostType();

$casesTaxonomy = new CustomPostTaxonomy($cases->getSystemName());
$casesTaxonomy->setName('Positions');
$casesTaxonomy->setSingularName('Position');
$casesTaxonomy->setTaxonomyType('categories');
$casesTaxonomy->initTaxonomy();

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
