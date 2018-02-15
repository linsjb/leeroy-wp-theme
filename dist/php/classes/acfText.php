<?php
/*
* Filename: acfText.php
* Class description: Define navigation objects for ACF image objects
* Author: Linus Sjöbro
*/

class AcfText {

// Public
  function contentMode() {
    if($this->subfield) {
      $text = get_sub_field($this->objectName);
    } else {
      $text = get_field($this->objectName);
    }

    if($this->useBreakpoint) {
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

  function useSubfield() { $this->subfield = true; }

  function setObject($stringPhrase) { $this->objectName = $stringPhrase; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

  function useBreakpoint() {$this->useBreakpoint = true; }

  function setBreakType($stringPhrase) {$this->breakType = $stringPhrase; }

// Private
  private $objectName;
  private $elementType = NULL;
  private $classes = NULL;
  private $useBreakpoint = false;
  private $subfield = false;
  private $breakType = "|";
  private $processedString;

}
