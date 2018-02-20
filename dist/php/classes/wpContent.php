<?php
/*
* Author: Linus Sjöbro
* Class description: Class to use a customized version of the Wordpress get_title and get_content.
*/

class WpContent {
  function contentType() {

    switch($this->type) {
      case 'title':
        if($this->postpage) {
          $this->rawString = get_the_title(get_option('page_for_posts'));
        } else {
          $this->rawString = get_the_title();
        }
        break;

      case 'content':
        if($this->postpage) {
          $this->rawString = get_the_content(get_option('page_for_posts'));
        } else {
          $this->rawString = get_the_content();
        }
        break;

      case 'category':
        $this->rawString = get_the_category()[0]->name;
        break;

      case 'date':
        $this->rawString = get_the_date();
        break;

      case 'author':
        $this->rawString = get_the_author_meta('user_firstname') . ' ' . get_the_author_meta('user_lastname');
        break;

      case '':
        echo "Specify a content type with setContent()!";
        break;

      default:
        echo "Wrong content type in WpContent! \n Choose between title, content, category, date and author";
        break;
    }
  }

  function contentMode() {
    if($this->useBreakpoint) {
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
      return $this->processedString;
    }
  }

  function setContent($setContentType) { $this->type = $setContentType; }

  function useBreakpoint() { $this->useBreakpoint = true; }

  function usePostsPage() { $this->postpage = true; }

  function setElementType($stringPhrase) { $this->elementType = $stringPhrase; }

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }

  function setBreakType($stringPhrase) { $this->breakType = $stringPhrase; }

  private $type = '';
  private $elementType = NULL;
  private $classes = NULL;
  private $useBreakpoint = false;
  private $postpage = false;
  private $breakType = '|';
  private $rawString;
  private $processedString;
}
