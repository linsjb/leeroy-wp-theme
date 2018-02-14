<?php
/*
* Description: Class for Bootstraps grid system. The class make so we does not need to write all different columns and offsets.
* Neat and easy.
*
* Author:     Linus Sjöbro
* Copyright:  Linus Sjöbro 2018
* www:        sjobro.com
*/

class BootstrapGrid {

  function __construct($setBootstrapColumns) {
    $this->bootstrapColumns = $setBootstrapColumns;
  }

  public function width($setColumnsWidth, $setXsColumnWidth = NULL) {
    if($setXsColumnWidth == NULL) {
      $this->xsColumnWidth = $setColumnsWidth;
    } else {
      $this->xsColumnWidth = $setXsColumnWidth;
    }

    $this->smColumnWidth = $setColumnsWidth;
    $this->mdColumnWidth = $setColumnsWidth;
    $this->lgColumnWidth = $setColumnsWidth;
    return
      $this->columns[0] . $this->xsColumnWidth .
      $this->columns[1] . $this->smColumnWidth .
      $this->columns[2] . $this->mdColumnWidth .
      $this->columns[3] . $this->lgColumnWidth;
  }

  public function individualWidth($setXsColumn, $setSmColumn, $setMdColumn, $setLgColumn) {
    $this->xsColumnWidth = $setXsColumn;
    $this->smColumnWidth = $setSmColumn;
    $this->mdColumnWidth = $setMdColumn;
    $this->lgColumnWidth = $setLgColumn;
    return
      $this->columns[0] . $this->xsColumnWidth .
      $this->columns[1] . $this->smColumnWidth .
      $this->columns[2] . $this->mdColumnWidth .
      $this->columns[3] . $this->lgColumnWidth;
  }

  public function offset($setColumnsOffset, $setXsColumnOffset = NULL) {
    if($setColumnsOffset == NULL) {
      if($setXsColumnOffset != NULL) {
        return
        $this->offsets[0] . $setXsColumnOffset;
      }
    } else {
      if($setXsColumnOffset == NULL) {
        return
          $this->offsets[1] . $setColumnsOffset .
          $this->offsets[2] . $setColumnsOffset .
          $this->offsets[3] . $setColumnsOffset;
      } else {
        return
          $this->offsets[0] . $setXsColumnOffset .
          $this->offsets[1] . $setColumnsOffset .
          $this->offsets[2] . $setColumnsOffset .
          $this->offsets[3] . $setColumnsOffset;
      }
    }
  }

  public function individualOffset($setXsColumnOffset, $setSmColumnOffset, $setMdColumnOffset, $setLgColumnOffset) {
    return
      $this->offsets[0] . $setXsColumnOffset .
      $this->offsets[1] . $setSmColumnOffset .
      $this->offsets[2] . $setMdColumnOffset .
      $this->offsets[3] . $setLgColumnOffset;
  }

  public function center($setXsColumnCenter = false, $setColumnsCenter = true) {
    $this->xsColumnCenterGrade = ($this->bootstrapColumns - $this->xsColumnWidth)/2;
    $this->smColumnCenterGrade = ($this->bootstrapColumns - $this->smColumnWidth)/2;
    $this->mdColumnCenterGrade = ($this->bootstrapColumns - $this->mdColumnWidth)/2;
    $this->lgColumnCenterGrade = ($this->bootstrapColumns - $this->lgColumnWidth)/2;

    if($setColumnsCenter) {
      if($setXsColumnCenter) {
        return
          $this->offsets[0] . $this->xsColumnCenterGrade .
          $this->offsets[1] . $this->smColumnCenterGrade .
          $this->offsets[2] . $this->mdColumnCenterGrade .
          $this->offsets[3] . $this->lgColumnCenterGrade;
      } else {
        return
          $this->offsets[1] . $this->smColumnCenterGrade .
          $this->offsets[2] . $this->mdColumnCenterGrade .
          $this->offsets[3] . $this->lgColumnCenterGrade;
      }
    } else {
      if($setXsColumnCenter) {
        return $this->offsets[0] . $this->xsColumnCenterGrade;
      }
    }
  }

// Private
  private $columnsWidth;
  private $columnsCenterGrade;

  private $xsColumnWidth;
  private $xsColumnCenterGrade;

  private $smColumnWidth;
  private $smColumnCenterGrade;

  private $mdColumnWidth;
  private $mdColumnCenterGrade;

  private $lgColumnWidth;
  private $lgColumnCenterGrade;

  private $bootstrapColumns;

  private $columns = array(
    " col-xs-",
    " col-sm-",
    " col-md-",
    " col-lg-"
  );

  private $offsets = array(
    " col-xs-offset-",
    " col-sm-offset-",
    " col-md-offset-",
    " col-lg-offset-"
  );
}
