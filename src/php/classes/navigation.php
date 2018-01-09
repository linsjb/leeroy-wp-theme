<?php
/*
* Filename: navigations.php
* Author: Linus Sjöbro
* Created: 2018-01-08
* Class description: Define navigation objects for WP-backend
*/

class Navigation {
// public
  function setContainerClasses ($setContClass) {
    $this->containerClass = $setContClass;
  }

  function setContainerId ($setContId) {
    $this->containerId = $setContId;
  }

  function setLocation ($setThemeLoc) {
    $this->themeLocation = $setThemeLoc;
  }

  function setContainer ($setContType) {
    $this->containerType = $setContType;
  }

  function init () {
    wp_nav_menu(array (
      'theme_location'  => $this->themeLocation,
      'container_class' => $this->containerClass,
      'container_id'    => $this->containerId,
      'container'       => $this->containerType
    ));
  }

// Private
  private $containerClass = '';
  private $containerId    = '';
  private $themeLocation  = '';
  private $containerType  = 'div';
}
