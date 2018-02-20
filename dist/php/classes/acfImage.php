<?php
/**
*
*/
class AcfImage {
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

  // Viktigt att denna kommer föra setobject
  function usePostsPage() { $this->postpage = true; }

  function setObject($stringPhrase) {
    $this->objectName = $stringPhrase;

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

  function setClasses($stringPhrase) { $this->classes = $stringPhrase; }
  function setSize() { }
  function getObject() { return $this->imageObject; }
  function getUrl() { return $this->imageUrl;  }


  private $objectName;
  private $imageObject;
  private $imageUrl;
  private $imageSize;
  private $useElement = false;
  private $subfield = false;
  private $postpage = false;
  private $classes = null;
  private $altText;
}
