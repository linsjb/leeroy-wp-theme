<?php
class AcfMenuFields {
  function init() {
    add_filter('wp_nav_menu_items', array($this, 'menus'), 10, 2);
  }

  function menus($menuItems, $args) {
    $menu = wp_get_nav_menu_object($args->menu);

    if($args->theme_location == $this->menuObject) {
      $fieldData = get_field($this->acfObject, $menu);

      $processedField = '<' . $this->elementType . ' class="' . $this->elementClasses . '">' . $fieldData . '</' . $this->elementType . '>';

      switch($this->position) {
        case 'before':
          $menuItems =  $processedField . $menuItems;
          break;

        case 'after':
          $menuItems =  $menuItems . $processedField;
          break;

        default:
          echo "Wrong position in setPosition, or the method is not defined!";
          break;
      }
    }
    return $menuItems;
  }

  function setAcfObject($stringPhrase) { $this->acfObject = $stringPhrase; }

  function setMenuObject($stringPhrase) { $this->menuObject = $stringPhrase; }

  function setElementClasses($stringPhrase) { $this->elementClasses = $stringPhrase; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setPosition($stringPhrase) { $this->position = $stringPhrase; }

  private $elementClasses;
  private $elementType;
  private $acfObject;
  private $menuObject;
  private $position;
}
