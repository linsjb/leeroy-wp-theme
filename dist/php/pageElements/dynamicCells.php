<?php
function dynamicCells() {
  $numOfCols = get_sub_field('acfDynCellsPref')['cellsPerRow'];
  $cellWidth = cellWidth($numOfCols);
  $boostrapClass = 'col-xs-' . $cellWidth;

  if($numOfCols == 5) {
    // "pusher"-element to center the cell's when we have five celläs per row
    echo '<div class="col-xs-2"></div>';
  }

  if(have_rows('acfDynCellsContent')) {
    while(have_rows('acfDynCellsContent')) {
      the_row();
      $dynamicCellImage = new AcfImage;
      $dynamicCellImage->useSubfield();
      $dynamicCellImage->setObject('icon');
      $dynamicCellImage->setSize('medium');
      $dynamicCellImage->setClasses('m-dynamicCell__image');
      $dynamicCellImage->useElement();

      if(get_sub_field('link')) {
        echo '<a href="' . get_sub_field('linkTo')['url'] . '">';
          echo '<div class="m-dynamicCell ' . $boostrapClass . '">';
            $dynamicCellImage->init();
          echo '</div>'; // .m-dynamicCell
        echo '</a>';
      } else {
        echo '<div class="m-dynamicCell ' . $boostrapClass . '">';
        $dynamicCellImage->init();
        echo '</div>'; // .m-dynamicCell
      }
    }
  }
}

function cellWidth($numberOfCells) {
  switch($numberOfCells) {
    case 1:
      return 24;
      break;

    case 2:
      return 12;
      break;

    case 3:
      return 8;
      break;

    case 4:
      return 6;
      break;

    case 5:
      return 4;
      break;

    case 6:
      return 4;
      break;

    default:
      return 24;
      break;
  }
}
?>
