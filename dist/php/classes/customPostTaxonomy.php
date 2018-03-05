<?php
/**
* Create a taxonomy of either categories or tags for a custom post type.
*
* The constructor of the class require the custom post type name.
*/
class CustomPostTaxonomy {
  function __construct($postTypeName) {
    $this->customPostTypeName = $postTypeName;
  }

  function initTaxonomy() {
    $taxType = true;

    switch($this->taxonomyType) {
      case 'categories':
        $taxType = true;
        break;

      case 'tags':
        $taxType = false;
        break;

      default:
        echo 'Taxonomy type need to be defined. Choose between categoried and tags';
        break;
    }

    if($this->taxonomyType == null) {
      echo 'The type of the taxonomy needs to be specified! Use function setTaxonomyType()';
    }

    $labels = array(
      'name'              => $this->taxonomyName,
      'singular_name'     => $this->taxonomySingularName,
      'search_items'      => 'Search ' . $this->taxonomyName,
      'all_items'         => 'All ' . $this->taxonomyName,
      'parent_item'       => 'Parent ' . $this->taxonomySingularName,
      'parent_item_colon' => 'Parent ' . $this->taxonomySingularName . ':',
      'edit_item'         => 'Edit ' . $this->taxonomySingularName,
      'update_item'       => 'Update ' . $this->taxonomySingularName,
      'add_new_item'      => 'Add New ' . $this->taxonomySingularName,
      'new_item_name'     => 'New ' . $this->taxonomySingularName . ' Name',
      'menu_name'         => $this->taxonomyName,
    );

    $args = array(
      'hierarchical'      => $taxType,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'type' ),
    );

    register_taxonomy('sm_project_type',array($this->customPostTypeName),$args);
  }

  /**
  * Set the name for the custom taxonomy.
  */
  function setName($setTaxonomyName) {
    $this->taxonomyName = $setTaxonomyName;
  }

  /**
  * Set the singlar name for the custom taxonomy
  */
  function setSingularName($setTaxonomySingularName) {
    $this->taxonomySingularName = $setTaxonomySingularName;
  }

  /**
  * Specify what kind of taxonomy the custom taxonomy is going to be.
  *
  * ## Taxonomy types
  * - categories
  * - tags
  */
  function setTaxonomyType($setTaxType) {
    $this->taxonomyType = $setTaxType;
  }

  private $customPostTypeName;
  private $taxonomyName;
  private $taxonomySingularName;
  private $taxonomyType = '';
}
