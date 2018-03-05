<?php

class Categories {

  function __construct() {
    $this->categories = get_categories();
  }

  function init() {
    echo '<' . $this->containerType . ' class="' . $this->containerClasses . '">';

      foreach ($this->categories as $category) {
        $categoryId = get_cat_ID($category->name);

        echo '<' . $this->elementType . ' class="' . $this->elementClasses . '">';
          echo '<a href="' . get_category_link($categoryId) . '">';
            echo $category->name;
          echo '</a>';
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

  private $elementType = 'li';
  private $elementClasses = '';
  private $containerType = 'ul';
  private $containerClasses = '';
  private $categories;
}
