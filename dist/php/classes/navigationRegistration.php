<?php

class NavigationRegistration {
  function regMenu($setKey, $setData) {
    $this->items[$setKey] = $setData;
  }

  function buildMenu() {
    add_action('init', array($this, 'regNav'));
  }

  function regNav() {
    register_nav_menus ($this->items);
  }

  private $items = array();
}
