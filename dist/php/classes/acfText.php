<?php
/*
* Filename: acfText.php
* Class description: Define navigation objects for ACF image objects
* Author: Linus Sjöbro
*/

class AcfText {
  function contentMode() {
    if($this->subfield) {
      if($this->postpage) {
        $text = get_sub_field($this->objectName, get_option('page_for_posts'));
      } else {
        $text = get_sub_field($this->objectName);
      }
    } else {
      if($this->postpage) {
        $text = get_field($this->objectName, get_option('page_for_posts'));
      } else {
        $text = get_field($this->objectName);
      }
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
      return $this->processedString;
    }
  }

  function useSubfield() { $this->subfield = true; }

  function setObject($stringPhrase) { $this->objectName = $stringPhrase; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

  function useBreakpoint() {$this->useBreakpoint = true; }

  function usePostsPage() {$this->postpage = true; }

  function setBreakType($stringPhrase) {$this->breakType = $stringPhrase; }

  private $objectName;
  private $elementType = NULL;
  private $classes = NULL;
  private $useBreakpoint = false;
  private $subfield = false;
  private $postpage = false;
  private $breakType = "|";
  private $processedString;

}
