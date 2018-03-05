<?php
/**
* Create custom post types easily.
* Class methods will set the functionality and properties for the custom post type.
*
* There is a lot of different ways to customize the post type to behave just as you want it to do.
*/
class customPostType {

  /**
  * # Description
  * Create the custom post type.
  *
  * This method need's to be called last, after all the properties is set.
  * Otherwise the properties will not be set.
  */
  function initPostType() {
    add_action('init',array($this,'create_post_type'));
  }

  /**
  * Class structure method. Can not be called by the user.
  */
  function create_post_type() {
    $labels = array(
      'name'               => $this->postTypeName,
      'singular_name'      => $this->postTypeNameSingular,
      'menu_name'          => $this->postTypeName,
      'name_admin_bar'     => $this->postTypeNameSingular,
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New ' . $this->postTypeNameSingular,
      'new_item'           => 'New ' . $this->postTypeNameSingular,
      'edit_item'          => 'Edit ' . $this->postTypeNameSingular,
      'view_item'          => 'View ' . $this->postTypeNameSingular,
      'all_items'          => 'All ' . $this->postTypeName,
      'search_items'       => 'Search ' . $this->postTypeName,
      'parent_item_colon'  => 'Parent ' . $this->postTypeNameSingular,
      'not_found'          => 'No ' . $this->postTypeName . ' Found',
      'not_found_in_trash' => 'No ' . $this->postTypeName .  ' Found in Trash'
    );

    $args = array(
      'labels'              => $labels,
      'public'              => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'show_in_nav_menus'   => $this->showInMenu,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => $this->menuPosition,
      'menu_icon'           => $this->adminMenuIcon,
      'capability_type'     => $this->capabilityType,
      'hierarchical'        => $this->postType,
      'supports'            => $this->supportsArray,
      'has_archive'         => $this->archive,
      'rewrite'             => array('slug' => $this->postTypeName),
      'query_var'           => true
    );

    register_post_type( $this->postTypeSystemName , $args );
  }

  /**
  * Set the custom post type name.
  */
  function setName($setPostTypeName) {
    $this->postTypeName = $setPostTypeName;
    $this->postTypeSystemName = strtolower('sm_' . $setPostTypeName);
  }

  /**
  * Set the custom post type singular name
  */
  function setSingularName($setPostTypeSingularName) {
    $this->postTypeNameSingular = $setPostTypeSingularName;
  }


  /**
  * Specify what kind of icon that is going to be used in the admin area.
  * A default icons will be set if a icon is not specified.
  *
  * For all icons see [Wordpress dashicons](https://developer.wordpress.org/resource/dashicons/)
  */
  function setAdminMenuIcon($setMenuIcon) {
    $this->adminMenuIcon = $setMenuIcon;
  }

  /**
  * Specify where the post type is going to be placed in the admin menu.
  *
  * Default position is 5.
  *
  * ## Positions
  * - 5 - below Posts
  * - 10 - below Media
  * - 15 - below Links
  * - 20 - below Pages
  * - 25 - below comments
  * - 60 - below first separator
  * - 65 - below Plugins
  * - 70 - below Users
  * - 75 - below Tools
  * - 80 - below Settings
  * - 100 - below second separator
  */
  function setAdminMenuPosition($setMenuPos) {
    $this->menuPosition = $setMenuPos;
  }

  /**
  * Specity if the post type is going to appear in the site's main menu.
  *
  * Default value is **true**.
  */
  function showInMenu($setShowInMenu) {
    $this->showInMenu = $setShowInMenu;
  }

  /**
  * Define how the custom post type is going to behave.
  * Avaliable type's are **post** and **page**.
  *
  * Default type is **post**.
  */
  function setPostType($setPType) {
    $this->postType = $setPType;
  }

  /**
  * # Description
  * What kind of support the custom post type is going to have.
  *
  * One object is required for every support.
  *
  * ## Avaliable supports
  * - title
  * - editor (content)
  * - author
  * - tumbnail
  * - excerpt
  * - trackbacks
  * - custom-fields (meta-data)
  * - comments
  * - revisions
  * - page-attributes
  *   - hirearchial must be true
  * - post-formats
  */
  function setSupport($setSupport) {
    $this->supportsArray[] = $setSupport;
  }

  /**
  * Define if the custom post type is going to have an archive or not.
  * Default state is **true**.
  *
  * The archive is accessible via the custom post slug.
  * For example. If the st type has the name project. We can reach the archive through example.com/project.
  *
  * Wp's atandard archive.php will be used.
  * To use another archive page a .php file with the custom post type name need's to be created.
  * Such as archive-project.php
  */
  function setArchive($setArch) {
    $this->archive = $setArch;
  }

  /**
  * Set's the capability of a custom post page.
  * This means what type of user's that can access the custom post type in the admin area.
  *
  * Default mode is **post**.
  *
  * ## Avaliable options
  *
  * - post
  * - page
  *
  * ## Description of options
  *
  * ### Post
  *
  * Exactly the same access as a ordinary post type.
  * User roles that can access the custom post type in the admin area is
  *
  * - Authors
  * - Editors
  * - Administrators
  *
  * ### Page
  *
  * Just like the post. This option has the same access as ordinary page type.
  * User roles that can access the custom post type in the admin area is
  *
  * - Editors
  * - Administrators
  */
  function setCapability($setCapabilityType) {
    $this->capabilityType = $setCapabilityType;
  }

  /**
  * To be able to create taxonomies we need to get the system name for the custom post type.
  */
  function getSystemName() {
    return $this->postTypeSystemName;
  }

  private $postTypeName;
  private $postTypeNameSingular;
  private $postTypeSystemName;
  private $adminMenuIcon = 'dashicons-admin-customizer';
  private $menuPosition = 5;
  private $showInMenu = true;
  private $archive = true;
  private $capabilityType = 'post';
  private $postType = 'post';
  private $supportsArray  = array();
}
