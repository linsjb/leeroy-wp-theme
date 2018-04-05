<?php
/**
* Create a list for a specifix taxonomy.
*
* The list is not per post defined.
* I.e all the txonomies used is going to be listed.
*/
class Taxonomy {
  /**
  * Initialize the class.
  * Call this method where the list is going to be displayed.
  */
  function init() {
    $this->taxonomies = get_terms($this->taxonomyType);

    echo '<' . $this->containerType . ' class="' . $this->containerClasses . '">';
      if($this->listTitle != null) {
        echo '<' . $this->titleElementType . ' class="' . $this->titleClasses . '">';
          echo $this->listTitle;
        echo '</' . $this->titleElementType . '>';
      }

      foreach($this->taxonomies as $taxItem) {
        echo '<' . $this->elementType . ' class="' . $this->elementClasses . '">';
          echo '<a href="' . get_term_link($taxItem->term_id) . '">' . $taxItem->name . '</a>';
        echo '</' . $this->elementType . '>';
      }
    echo '</' . $this->containerType . '>';
  }

  /**
  * What kind of taxonomy is going to be displayed?
  *
  * ## Avaliable taxonomies
  * - post_tag
  * - category
  */
  function setTaxonomy($setTax) {
    $this->taxonomyType = $setTax;
  }

  /**
  * Set the list's container type.
  * This means the parent element.
  *
  * Default element type is *ul*.
  */
  function setContainerType($setContType) {
    $this->containertype = $setContType;
  }

  /**
  * Set the list's element type, it's individual list item.
  * Default element type is *li*.
  */
  function setElementType($setElemType) {
    $this->ElementType = $setElemType;
  }

  /**
  * Define the class/classes for the container.
  */
  function setContainerClasses($setContClasses) {
    $this->containerClasses = $setContClasses;
  }

  /**
  * Define the class/classes for the list's elements.
  * I.e the individual list item's classes.
  */
  function setElementClasses($setElemClasses) {
    $this->elementClasses = $setElemClasses;
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

  private $taxonomies;
  private $taxonomyType;
  private $containerType = 'ul';
  private $containerClasses = '';
  private $elementType = 'li';
  private $elementClasses = '';
  private $listTitle = null;
  private $titleElementType = 'span';
  private $titleClasses = '';
}
?>
