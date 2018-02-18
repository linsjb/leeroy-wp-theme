<?php
/**
* 
*/
class AcfImage {
// Public

  /**
  *
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

  function useElement() { $this->useElement = true; }

  function useSubfield() { $this->subfield = true; }

  function setObject($stringPhrase) {
    $this->objectName = $stringPhrase;

    if($this->subfield) {
      $this->imageObject = get_sub_field($this->objectName);
    } else {
      $this->imageObject = get_field($this->objectName);
    }

    $this->imageUrl = $this->imageObject['url'];
    $this->altText = $this->imageObject['alt'];
  }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }
  function getObject() { return $this->imageObject; }

// Private
  private $objectName;
  private $imageObject;
  private $imageUrl;
  private $useElement = false;
  private $subfield = false;
  private $classes = NULL;
  private $altText;
}
