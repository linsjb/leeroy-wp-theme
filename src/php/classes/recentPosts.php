<?php

/**
* Create a list of recent post's.
* By default the standard Wordpress post's is the post type.
*
* this can be changed with the setPostType() method.
*/
class RecentPosts {
  /**
  * initialize the class.
  */
  function init() {
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

      default:
        $orderBy = 'date';
        break;
    }

    $args = array(
      'numberposts' => $this->numberOfItems,
      'orderby'     => $orderBy,
      'order'       => $this->sortingDirection,
      'post_type'   => $this->postType
    );

    $this->recentPosts = wp_get_recent_posts($args);

    echo '<' . $this->containerType . ' class="' . $this->containerClasses . '">';
      if($this->listTitle != null) {
        echo '<' . $this->titleElementType . ' class="' . $this->titleClasses . '">';
          echo $this->listTitle;
        echo '</' . $this->titleElementType . '>';
      }

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
  * - DESC
  * - ASC
  */
  function setSortingDirection($setSortingDirection) {
    $this->sortingDirection = $setSortingDirection;
  }

  /**
  * What kind of post the list is going to be sorted after.
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
  * Default order is **date**.
  */
  function setOrderAfter($setOrder) {
    $this->orderAfter = $setOrder;
  }

  /**
  * Define which post type that is going to be listed.
  *
  * The default post type is **WP post**.
  *
  * If a custom post type is created, this can be listed with this class.
  */
  function setPostType($setPType) {
    $this->postType = $setPType;
  }

  /**
  * Define a title for the list if this is needed.
  *
  * Default the list does not house a title.
  */
  function setTitle($setListTitle) {
    $this->listTitle = $setListTitle;
  }

  /**
  * Set the type of element that the title is going to have.
  *
  * Default this element is *span*.
  */
  function setTitleElementType($setTitleElemType) {
    $this->titleElementType = $setTitleElemType;
  }

  /**
  * Set the class/classes for the title.
  */
  function setTitleClasses($setListTitleClasses) {
    $this->titleClasses = $setListTitleClasses;
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
  private $listTitle = null;
  private $titleElementType = 'span';
  private $titleClasses = '';
}
