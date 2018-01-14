<?php
/*
* Description: Instead of writing all Bootstrap offsets in the Bootstrap Grid-system we use this function instead.
* Author: Linus Sjöbro
* Copyright: Linus Sjöbro 2018
*/
function bootstrapGridoffset($offsetGrade, $xsOffset = false) {
  $columnsOffset = array(
    " col-lg-offset-",
    " col-md-offset-",
    " col-sm-offset-",
    " col-xs-offset-"
  );

  if($xsOffset) {
    echo $classAll =
      $columnsOffset[0] . $offsetGrade .
      $columnsOffset[1] . $offsetGrade .
      $columnsOffset[2] . $offsetGrade .
      $columnsOffset[3] . $offsetGrade;
  } else {
    echo $classAll =
      $columnsOffset[0] . $offsetGrade .
      $columnsOffset[1] . $offsetGrade .
      $columnsOffset[2] . $offsetGrade;

  }

  return $classAll;
}
