<?php
/*
* Filename: acfImage.php
* Class description: Define navigation objects for ACF image objects
* Author: Linus Sjöbro
*/

class AcfImage {
// Public
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

  function setObject($stringPhrase) {
    $this->objectName = $stringPhrase;
    $this->imageObject = get_field($this->objectName);
    $this->imageUrl = $this->imageObject['url'];
  }

  function useElement() {
    $this->useElement = true;
  }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

  function setAltText($stringPhrase) { $this->altText = $stringPhrase; }

  function getObject() {
    return $this->imageObject;
  }

// Private
  private $objectName;
  private $imageObject;
  private $imageUrl;
  private $useElement = false;
  private $classes = NULL;
  private $altText = "";
}
