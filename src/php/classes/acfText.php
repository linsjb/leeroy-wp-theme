<?php
/*
* Filename: acfImage.php
* Class description: Define navigation objects for ACF image objects
* Author: Linus Sjöbro
*/

class AcfText {

// Public

  function init() {
    $text = get_field($this->objectName);

    if($this->elementType != NULL) {
      if($this->classes != NULL) {
        echo '<' . $this->elementType . ' class="' . $this->classes . '">' . $text . '</' . $this->elementType . '>';
      } else {
        echo '<' . $this->elementType . '>' . $text . '</' . $this->elementType . '>';
      }
    } else {
      return $text;
    }
  }

  function setObject($stringPhrase) { $this->objectName = $stringPhrase; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

// Private
  private $objectName;
  private $elementType = NULL;
  private $classes = NULL;

}
