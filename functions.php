<?php
require_once 'dist/php/functions/scripts.php';
require_once 'dist/php/functions/navigationRegister.php';

//Bootstrap grid
require_once 'dist/php/bootstrapGrid/bootstrapGrid.php';

// Classes
require_once 'dist/php/classes/navigation.php';
require_once 'dist/php/classes/acfImage.php';
require_once 'dist/php/classes/acfText.php';
require_once 'dist/php/classes/acfMenuFields.php';
require_once 'dist/php/classes/wpContent.php';

// Page elements
require_once 'dist/php/pageElements/pageBackgroundType.php';
require_once 'dist/php/pageElements/indexSectionItems.php';
require_once 'dist/php/pageElements/informationPageElements.php';

// Dev
require_once 'dist/php/devTools/devTools.php';

// Init bootstrap grid
$grid = new BootstrapGrid(100);

add_action('admin_init', 'remove_textarea');

    function remove_textarea() {
      remove_post_type_support( 'page', 'editor' );
    }
