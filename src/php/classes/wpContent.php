<?php
/**
* Create objects for the wordpress content
*/
class WpContent {
  /**
  * Method to use the object.
  * Place the declaration of the created object anywhere in the code that we want to display the content.
  */
  function init() {
    switch($this->contentType) {
      case 'title':
        if($this->postpage) {
          $this->rawString = get_the_title(get_option('page_for_posts'));
        } else {
          $this->rawString = get_the_title($this->postId);
        }
        break;

      case 'content':
        if($this->postpage) {
          $this->rawString = get_the_content(get_option('page_for_posts'));
        } else {
          $this->rawString = get_the_content();
        }
        break;

      case 'rawContent':
        $this->rawString = the_content();
        break;

      case 'category':
        $this->rawString = get_the_category($this->postId)[0]->name;
        break;

      case 'date':
        if($this->postId != null) {
          $this->rawString = get_the_time(get_option('date_format'), $this->postId);
        }  else {
          $this->rawString = get_the_date();
        }
        break;

      case 'author':
        $this->rawString = get_the_author_meta('display_name', get_post_field('post_author', $this->postId));
        break;

      case 'tags':
        $this->rawString = get_the_tags($this->postId);
        break;

      case '':
        echo "Specify a content contentType with setContent()!";
        break;

      default:
        echo "Wrong content contentType in WpContent! \n Choose between title, content, rawContent, category, date and author";
        break;
    }

    if($this->useBreakpoint) {
      $this->processedString = str_replace($this->breakType, '<br />', $this->rawString);
    } else {
      $this->processedString = $this->rawString;
    }

    if($this->elementType != NULL) {
      if($this->contentType == 'tags') {
        if($this->rawString) {
          foreach ($this->rawString as $tag) {
            echo '<' . $this->elementType . ' class="' . $this->classes . '">' .  $tag->name . '</' . $this->elementType . '>';
          }
        }
      } else {
          echo '<' . $this->elementType . ' class="' . $this->classes . '">' .  $this->processedString . '</' . $this->elementType . '>';
      }
    } else {
      return $this->processedString;
    }
  }

  /**
  * What contentType of content the object is going to present.
  *
  * ## Content types:
  * - Title
  * - Content
  * - rawContent
  * - Category
  * - Date
  * - Author
  *
  * With raw content there is no point of using a wrapper element.
  * This because the content will not be wrapped inside it.
  */
  function setContent($setContentType) {
    $this->contentType = $setContentType;
  }

  /**
  * Specify if the content is going to have a breakpoint at a specific place.
  *
  * The default breakpoint is |. The breakpoint can easily be changed with method setBreakType().
  */
  function useBreakpoint() {
    $this->useBreakpoint = true;
  }

  /**
  * Specify if the content is going to be used at the posts page (blog index).
  *
  * Without this method the posts page is not going to show the right content.
  */
  function usePostsPage() {
    $this->postpage = true;
  }

  /**
  * The Wp content class can embed an element directly in the class.
  * Specify what kind of element with this method.
  */
  function setElementType($setElemType) {
    $this->elementType = $setElemType;
  }

  /**
  * Specify the classes that the created element is going to have.
  */
  function setClasses($setElemClasses) {
    $this->classes = $setElemClasses;
  }

  /**
  * If the method useBreakpoint() is used, we can specify what kind of breakpoint we want.
  *
  * The default breakpoint is |.
  */
  function setBreakType($setBreakpointType) {
    $this->breakType = $setBreakpointType;
  }

  /**
  * Specify an ID for the content.
  *
  * Used if content from a specific post is going to be displayed.
  */
  function setId($id) {
    $this->postId = $id;
  }

  private $contentType = '';
  private $elementType = NULL;
  private $classes = NULL;
  private $useBreakpoint = false;
  private $postpage = false;
  private $breakType = '|';
  private $rawString;
  private $processedString;
  private $postId = null;
}
