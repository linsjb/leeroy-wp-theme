<?php
/*
* Filename: acfImage.php
* Class description: Define navigation objects for ACF image objects
* Author: Linus Sjöbro
*/

class AcfText {

// Public
  function contentMode() {
    $text = get_field($this->objectName);

    if($this->breakPoint) {
      $this->processedString = str_replace($this->breakType, '<br />', $text);
    } else {
      $this->processedString = $text;
    }
  }

  function init() {
    $this->contentMode();
    if($this->elementType != NULL) {
      if($this->classes != NULL) {
        echo '<' . $this->elementType . ' class="' . $this->classes . '">' . $this->processedString . '</' . $this->elementType . '>';
      } else {
        echo '<' . $this->elementType . '>' . $this->processedString . '</' . $this->elementType . '>';
      }
    } else {
      return $text;
    }
  }

  function setObject($stringPhrase) { $this->objectName = $stringPhrase; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

  function breakPoint() {$this->breakPoint = true; }

  function setBreakType($stringPhrase) {$this->breakType = $stringPhrase; }

// Private
  private $objectName;
  private $elementType = NULL;
  private $classes = NULL;
  private $breakPoint = false;
  private $breakType = "|";
  private $processedString;

}
