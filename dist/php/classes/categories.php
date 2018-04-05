<?php

class Categories {

  function __construct() {
    $this->categories = get_categories();
  }

  function init() {
    echo '<' . $this->containerType . ' class="' . $this->containerClasses . '">';
    if($this->listTitle != null) {
      echo '<' . $this->titleElementType . ' class="' . $this->titleClasses . '">';
        echo $this->listTitle;
      echo '</' . $this->titleElementType . '>';
    }
      foreach ($this->categories as $category) {
        echo '<' . $this->elementType . ' class="' . $this->elementClasses . '">';
          echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
        echo '</' . $this->elementType . '>';
      }
    echo '</' . $this->containerType . '>';
  }

  function setElementType($setElemType) {
    $this->elementType = $setElemType;
  }

  function setElementClasses($setElemClasses) {
    $this->elementClasses = $setElemClasses;
  }

  function setContainerType($setContType) {
    $this->containerType = $setContType;
  }

  function setContainerClasses($setContClasses) {
    $this->containerClasses = $setContClasses;
  }

  function setTitleElementType($setTitleType) {
    $this->titleElementType = $setTitleType;
  }

  function setTitle($setListTitle) {
    $this->listTitle = $setListTitle;
  }

  function setTitleClasses($setTitClasses) {
    $this->titleClasses = $setTitClasses;
  }

  private $elementType = 'li';
  private $elementClasses = '';
  private $containerType = 'ul';
  private $containerClasses = '';
  private $listTitle = null;
  private $titleElementType = 'span';
  private $titleClasses = '';
  private $categories;
}
