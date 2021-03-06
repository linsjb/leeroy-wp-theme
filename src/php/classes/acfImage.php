<?php
/**
* @Description Class for easy usage of ACF image field.
*
* The presentation of the content can be modified.
*/
class AcfImage {

  /**
  * @Description Method to initialize the class. In other words, the method to use the object.
  *
  * This method is placed where the image-element is going to be represented.
  */
  function init() {
    if($this->useElement) {
      if($this->classes != NULL) {
        echo '<img class="' . $this->classes . '" src="' . $this->imageUrl . '" alt="' . $this->altText . '" />';
      } else {
        echo '<img src="' . $this->imageUrl . '" alt="' . $this->altText . '" />';
      }
    } else {
      return $this->imageUrl;
    }
  }


  /**
  * Set's the object name for the image.
  *
  * The object name is specified in the ACF field settings in WordPress backend.
  */
  function setObject($setObjName, $setObjCell = null) {
    $this->objectName = $setObjName;
    $this->objectIndex = $setObjCell;

    if($this->objectIndex == null) {
      if($this->subfield) {
        if($this->postpage) {
          $this->imageObject = get_sub_field($this->objectName, get_option('page_for_posts'));
        } else {
          $this->imageObject = get_sub_field($this->objectName);
        }
      } else {
        if($this->postpage) {
          $this->imageObject = get_field($this->objectName, get_option('page_for_posts'));
        } else {
          $this->imageObject = get_field($this->objectName, $this->postId);
        }
      }
    } else {
      if($this->subfield) {
        if($this->postpage) {
          $this->imageObject = get_sub_field($this->objectName, get_option('page_for_posts'))[$this->objectIndex];
        } else {
          $this->imageObject = get_sub_field($this->objectName)[$this->objectIndex];
        }
      } else {
        if($this->postpage) {
          $this->imageObject = get_field($this->objectName, get_option('page_for_posts'))[$this->objectIndex];
        } else {
          $this->imageObject = get_field($this->objectName, $this->postId)[$this->objectIndex];
        }
      }
    }

    if($this->imageSize == null) {
      $this->imageUrl = $this->imageObject['url'];
    } else {
      $this->imageUrl = $this->imageObject['sizes'][$this->imageSize];
    }
    $this->altText = $this->imageObject['alt'];
  }

  /**
  * Use an element for the class
  *
  * This means that the init does not need to be declared inside a img tag.
  */
  function useElement() { $this->useElement = true; }

  /**
  * Use the class as a sub-field.
  * **IMPORTANT**
  * This medthod need's to be declared before setObject()!
  */
  function useSubfield() { $this->subfield = true; }

  /**
  * For usage where the page is the blog index (posts page).
  *
  * The method get's the ID of the posts page.
  *
  * **IMPORTANT**
  * This method need's to be declared before setObject()!
  */
  function usePostsPage() { $this->postpage = true; }

  /**
  * Specify what classes the img-element should have.
  *
  * Multiple classes can be used.
  */
  function setClasses($setElmClasses) { $this->classes = $setElmClasses; }

  /**
  * Specify the imageSize of the image.
  *
  * If a size is not defined, the image will be it's original size.
  */
  function setSize($setImgSize) { $this->imageSize = $setImgSize; }

  /**
  * Get the images object name
  */
  function getObject() { return $this->imageObject; }

  /**
  * Get the height of the image
  */
  function getHeight() { return $this->imageObject['sizes'][$this->imageSize . '-height']; }

  /**
  * Get the width of the image
  */
  function getWidth() { return $this->imageObject['sizes'][$this->imageSize . '-width']; }

  /**
  * Get the caption of the image.
  */
  function getCaption() { return $this->imageObject['caption']; }

  /**
  * Get image from specific POST ID
  *
  * If left empty the image from the current post will show
  */
  function setId($id) { $this->postId = $id; }

  private $objectName;
  private $imageObject;
  private $imageUrl;
  private $imageSize = 'large';
  private $useElement = false;
  private $subfield = false;
  private $postpage = false;
  private $classes = null;
  private $altText;
  private $objectIndex;
  private $postId = null;
}
