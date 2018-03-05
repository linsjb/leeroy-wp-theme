<?php

/**
* Create a list of recent post's.
*/
class RecentPosts {
  /**
  * initialize the class.
  */
  function init() {
    $orderBy = 'date';

    switch($this->orderAfter) {
      case 'date':
        $orderBy = 'date';
        break;

      case 'author':
      $orderBy = 'author';
        break;

      case 'title':
      $orderBy = 'title';
        break;

      case 'modified':
        $orderBy = 'modfied';
        break;

      case 'random':
      $orderBy = 'rand';
        break;

      case 'none':
      $orderBy = 'none';
        break;
    }

    $args = array(
      'numberposts'       => $this->numberOfItems,
      'offset'            => 0,
      'category'          => 0,
      'orderby'           => $orderBy,
      'order'             => $this->sortingDirection,
      'include'           => '',
      'exclude'           => '',
      'meta_key'          => '',
      'meta_value'        =>'',
      'post_type'         => $this->postType,
      'post_status'       => 'publish',
      'suppress_filters'  => true
    );

    $this->recentPosts = wp_get_recent_posts($args);

    echo '<' . $this->containerType . ' class="' . $this->containerClasses . '">';
      foreach ($this->recentPosts as $recentPost) {
        echo '<' . $this->elementType . ' class="' . $this->elementClasses . '">';
          echo '<a href="' . get_permalink($recentPost['ID']) . '">';
            echo $recentPost['post_title'];
          echo '</a>';
        echo '</' . $this->elementType . '>';
      }
    echo '</' . $this->containerType . '>';
  }

  /**
  * Define what kind of element that is going to be used as list item
  *
  * Default element is **li**.
  */
  function setElementType($setElemType) {
    $this->elementType = $setElemType;
  }

  /**
  * Set classes for list elements.
  */
  function setElementClasses($setElemClasses) {
    $this->elementClasses = $setElemClasses;
  }

  /**
  * Define what kind of element that is going to be used as container element.
  * That mean's the top element that surrounds the list items.
  *
  * Default container element is **ul**.
  */
  function setContainerType($setContType) {
    $this->containerType = $setContType;
  }

  /**
  * Set classes for container element.
  */
  function setContainerClasses($setContClasses) {
    $this->containerClasses = $setContClasses;
  }

  /**
  * Define how many item's that is going to be displayed.
  *
  * Default number is **10**.
  */
  function setItemsNumber($setItemsNum) {
    $this->numberOfItems = $setItemsNum;
  }

  /**
  * Define the direction of the list.
  *
  * ## Avaliable options
  * DESC
  * ASC
  */
  function setSortingDirection($setSortingDirection) {
    $this->sortingDirection = $setSortingDirection;
  }

  /**
  * What kind of post the list is going to be sorted after.
  *
  * Default order is **post**.
  *
  * ## Avaliable post types
  *
  * - date
  * - author
  * - title
  * - modified
  * - random
  * - none
  */
  function setOrderAfter($setOrder) {
    $this->orderAfter = $setOrder;
  }

  /**
  * Define what post type that is going to be listed.
  *
  * ## Avaliable sortings
  *
  * - date
  * - author
  * - title
  * - modified
  * - random
  * - none
  *
  * Default post type is **date**.
  */
  function setPostType($setPType) {
    $this->postType = $setPType;
  }

  private $elementType = 'li';
  private $elementClasses = ' ';
  private $containerType = 'ul';
  private $containerClasses = ' ';
  private $recentPosts;
  private $numberOfItems = 10;
  private $sortingDirection = 'DESC';
  private $orderAfter;
  private $postType = 'post';
}
