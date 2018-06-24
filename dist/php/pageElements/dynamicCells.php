<?php
function dynamicCells() {
  $numberOfCells = count(get_sub_field('acfDynCellsContent'));
  $cellCounter = 0;


  // TODO: Fixa uträkningen så att det alltid blir rätt förskjutning beroende på hur många celler det är
  $col = 'col-sm-' . (24 - (4 * $numberOfCells))/2;
  if($numberOfCells < 6) {
    echo '<div class="FINDME hidden-xs ' . $col . '"></div>';
  }

  if(have_rows('acfDynCellsContent')) {
    while(have_rows('acfDynCellsContent')) {
      the_row();

      $cellCounter++;

      $dynamicCellImage = new AcfImage;
      $dynamicCellImage->useSubfield();
      $dynamicCellImage->setObject('icon');
      $dynamicCellImage->setSize('medium');
      $dynamicCellImage->setClasses('m-dynamicCell__image');
      $dynamicCellImage->useElement();

      if($cellCounter == $numberOfCells && $cellCounter%2 == 1) {
        echo '<div class="hidden sm-hidden-md hidden-lg col-xs-6"></div>';
      }

      if(get_sub_field('link')) {
        echo '<a href="' . get_sub_field('linkTo')['url'] . '" class="m-dynamicLink">';
          echo '<div class="m-dynamicCell col-xs-12 col-sm-4">';
            $dynamicCellImage->init();
          echo '</div>'; // .m-dynamicCell
        echo '</a>';
      } else {
        echo '<div class="m-dynamicCell col-xs-12 col-sm-4">';
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
      return 5;
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
