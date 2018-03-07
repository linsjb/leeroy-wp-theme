<?php
/*
* Filename: navigations.php
* Class description: Define navigation objects for WP-backend
* Author: Linus Sjöbro
*/

/**
* Create a navigation object for easy handling of Wordpress navigations
*/
class Navigation {

  /**
  * Define the classes for the container
  */
  function setContainerClasses ($setContClass) {
    $this->containerClass = $setContClass;
  }

  /**
  * Define he ID for the classes.
  */
  function setContainerId ($setContId) {
    $this->containerId = $setContId;
  }

  /**
  * Set the location for the navigation.
  *
  * This name is specified in functions.php, in the function register_nav_menus().
  */
  function setLocation ($setThemeLoc) {
    $this->themeLocation = $setThemeLoc;
  }

  /**
  * Define what kind of container/element the navigation is going to embed in.
  *
  * Default element is **nav**.
  */
  function setContainer ($setContType) {
    $this->containerType = $setContType;
  }

  /**
  * Initialize the navigation.
  *
  * The init is called inside the element that will hold the navigation.
  */
  function init () {
    wp_nav_menu(array (
      'theme_location'  => $this->themeLocation,
      'container_class' => $this->containerClass,
      'container_id'    => $this->containerId,
      'container'       => $this->containerType
    ));
  }

  private $containerClass = '';
  private $containerId    = '';
  private $themeLocation  = '';
  private $containerType  = 'nav';
}
