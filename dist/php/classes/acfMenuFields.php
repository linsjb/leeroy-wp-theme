<?php
class AcfMenuFields {
  function init() {
    add_filter('wp_nav_menu_items', array($this, 'menus'), 10, 2);
  }

  function menus($menuItems, $args) {
    // $this->menu = wp_get_nav_menu_object($args->menu);
    if($args->theme_location == $this->menuObject) {
      if($this->url != null) {
        $processedField = '<a class="' . $this->urlClasses . '" href="' . $this->url . '">'
          . '<' . $this->elementType . ' class="' . $this->elementClasses . '">' . $this->fieldObject . '</' . $this->elementType . '>'
        . '</a>';
      } else {
        $processedField = '<' . $this->elementType . ' class="' . $this->elementClasses . '">' . $this->fieldObject . '</' . $this->elementType . '>';
      }

      switch($this->position) {
        case 'before':
          $menuItems =  $processedField . $menuItems;
          break;

        case 'after':
          $menuItems =  $menuItems . $processedField;
          break;

        default:
          echo "Wrong position in setPosition().";
          break;
      }
    }
    return $menuItems;
  }


  function setField($fieldObj) {
    if($this->optionsPage) {
      $this->fieldObject = get_field($fieldObj, 'option');
    } else {
      $this->fieldObject = get_field($fieldObj);
    }
  }

  function setSubfield($fieldSubObj) {
    if($this->optionsPage) {
      $this->fieldObject = get_sub_field($fieldSubObj, 'option');
    } else {
      $this->fieldObject = get_sub_field($fieldSubObj);
    }
  }

  function setMenuObject($stringPhrase) { $this->menuObject = $stringPhrase; }

  function setElementClasses($stringPhrase) { $this->elementClasses = $stringPhrase; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setPosition($stringPhrase) { $this->position = $stringPhrase; }

  function setUrl($stringPhrase) { $this->url = $stringPhrase; }

  function setUrlClasses($stringPhrase) { $this->urlClasses = $stringPhrase; }


  function setOptionsPage() { $this->optionsPage = true; }

  private $elementClasses;
  private $elementType;
  private $fieldObject;
  private $menuObject;
  private $position = 'before';
  private $url = null;
  private $urlClasses = '';
  private $subfield = false;
  private $menu;
  private $optionsPage = false;
}
