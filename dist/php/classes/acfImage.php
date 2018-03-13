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
  *
  */
  function useElement() {
    $this->useElement = true;
  }

  function useSubfield() {
    $this->subfield = true;
  }

  /**
  * For usage where the page is the blog index (posts page).
  *
  * The method get's the ID of the posts page.
  *
  * **IMPORTANT**
  * This method need's to be declared before setObject()!
  */
  function usePostsPage() {
    $this->postpage = true;
  }

  /**
  * Set's the object name for the image.
  *
  * The object name is specified in the ACF field settings in WordPress backend.
  */
  function setObject($setObjName) {
    $this->objectName = $setObjName;

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
        $this->imageObject = get_field($this->objectName);
      }
    }

    $this->imageUrl = $this->imageObject['url'];
    $this->altText = $this->imageObject['alt'];
  }

  /**
  * Specify what classes the img-element should have.
  *
  * Multiple classes can be used.
  */
  function setClasses($setElmClasses) {
    $this->classes = $setElmClasses;
  }

  /**
  * Specify the size of the image.
  */
  function setSize($setImgSize) {
    $this->imageSize = $setImgSize;
  }

  function getObject() {
    return $this->imageObject;
  }

  function getHeight() {
    return $this->imageObject['sizes'][$this->imageSize . '-height'];
  }

  function getWidth() {
    return $this->imageObject['sizes'][$this->imageSize . '-width'];
  }





  private $objectName;
  private $imageObject;
  private $imageUrl;
  private $imageSize = 'medium';
  private $useElement = false;
  private $subfield = false;
  private $postpage = false;
  private $classes = null;
  private $altText;
}
