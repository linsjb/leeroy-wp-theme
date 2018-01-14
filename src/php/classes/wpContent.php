<?php
/*
* Description: Class to use a customized version of the Wordpress get_title and get_content.
* Author: Linus Sjöbro
*/

class WpContent {
// Public
  function contentType() {
    if($this->type == "title") {
      $this->rawString =  get_the_title();
    } else if($this->type == "content") {
      $this->rawString = get_the_content();
    }
  }

  function contentMode() {
    if($this->breakPoint) {
      $this->processedString = str_replace($this->breakType, '<br />', $this->rawString);
    } else {
      $this->processedString = $this->rawString;
    }
  }

  function init() {
    $this->contentType();
    $this->contentMode();
    if($this->elementType != NULL) {
      if($this->classes != NULL) {
        echo '<' . $this->elementType . ' class="' . $this->classes . '">' .  $this->processedString . '</' . $this->elementType . '>';
      } else {
        echo '<' . $this->elementType . '>' . $this->processedString. '</' . $this->elementType . '>';
      }
    } else {
      $this->processedString;
    }
  }

  function content() { $this->type = 'content'; }

  function title() { $this->type = 'title'; }

  function breakPoint() { $this->breakPoint = true; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

  function setBreakType($stringPhrase) { $this->breakType = $stringPhrase; }

// private
  private $type = 'content';
  private $elementType = NULL;
  private $classes = NULL;
  private $breakPoint = false;
  private $breakType = '|';
  private $rawString;
  private $processedString;
}
