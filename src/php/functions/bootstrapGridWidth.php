<?php
/*
* Description: Some html classes apper with the same setup on multiply element's if different files,
* this file gather the classes in variables, so we can use them globally to avoid repeat of code.
* Author: Linus Sjöbro
* Copyright: Linus Sjöbro 2018
*/

function bootstrapGridWidth($columnWidth, $centerContent, $xsFull) {
  $centerGrade = (100 - $columnWidth)/2;

  $columns = array(
    " col-lg-",
    " col-md-",
    " col-sm-",
    " col-xs-"
  );

  $columnsOffset = array(
    " col-lg-offset-",
    " col-md-offset-",
    " col-sm-offset-",
    " col-xs-offset-"
  );

  if($xsFull) {
    $centerGradeXs = 0;
    $columnWidthXs = 100;
  } else {
    $columnWidthXs = $columnWidth;
    $centerGradeXs = $centerGrade;
  }

  if($centerContent) {
    echo $classAll =
      $columns[0] . $columnWidth . $columnsOffset[0] . $centerGrade .
      $columns[1] . $columnWidth . $columnsOffset[1] . $centerGrade .
      $columns[2] . $columnWidth . $columnsOffset[2] . $centerGrade .
      $columns[3] . $columnWidthXs . $columnsOffset[3] . $centerGradeXs;
  } else {
    echo $classAll =
      $columns[0] . $columnWidth .
      $columns[1] . $columnWidth .
      $columns[2] . $columnWidth .
      $columns[3] . $columnWidthXs;
  }

  return $classAll;
}
