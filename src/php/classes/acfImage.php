<?php
/*
* Filename: acfImage.php
* Author: Linus Sjöbro
* Created: 2018-01-12
* Class description: Define navigation objects for ACF image objects
*/

class AcfImage {
// Public
  function setObject ($setObj) {
    $this->objectName = $setObj;
  }

  function getImageUrl () {

    $imageObject = get_field($this->objectName);
    return $imageObject['url'];
  }

// Private
  private $objectName;
}
