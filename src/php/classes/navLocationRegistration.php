<?php
/**
* Creates and registrates new **locations** for wordpress theme menus.
*
*/
class NavLocationRegistration {

  /**
  * Registrate a new menu location
  */
  function regMenu($setLocation, $setDescription) {
    $this->items[$setLocation] = $setDescription;
  }

  /**
  * Build all the menus.
  *
  * **Caution!* Is used only once!
  *
  * Call guard is included and echo a warning if method used twice.
  */
  function buildMenu() {
    if(!$this->buildCheck) {
      add_action('init', array($this, 'regNav'));
      $this->buildCheck = true;
    } else {
      echo "buildMenu() function is already called!";
    }
  }

  /**
  * Registrate the locations
  */
  function regNav() {
    register_nav_menus ($this->items);
  }

  private $items = array();
  private $buildCheck = false;
}
