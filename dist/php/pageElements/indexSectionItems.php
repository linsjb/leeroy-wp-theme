<?php
/*
*/

function indexSectionItems() {
  // Item row
  if(have_rows('acfIndSecItemCells')) {
    echo '<div class="row">';
    // When the counter reach 4, insert a Bootstrap clear fix;
    $clearFixCounter = 0;
    while(have_rows('acfIndSecItemCells')) {
      the_row();
      if(get_sub_field('acfIndSecCellIcon')) {
        $icon = new AcfImage;
        $icon->useSubfield();
        $icon->useElement();
        $icon->setObject('acfIndSecCellIcon');
        $icon->setClasses('a-indexSectionItemCell__icon col-xs-10 col-sm-30 col-sm-offset-35');
      }

      $title = new AcfText;
      $title->useSubfield();
      $title->setObject('acfIndSecCellTitle');
      $title->setElementType('h5');
      $title->setClasses('a-indexSectionItemCell__title col-xs-100');

      $content = new AcfText;
      $content->useSubfield();
      $content->setObject('acfIndSecCellCont');
      $content->setElementType('div');
      $content->setClasses('a-indexSectionItemCell__content col-xs-100');
      // Item cell element
      echo '<div class="m-indexSectionItemCell col-sm-31 col-sm-offset-2 hidden-xs">';
        if(get_sub_field('acfIndSecCellIcon')) {
          $icon->init();
        }
        $title->init();
        $content->init();
      echo '</div>';

      $clearFixCounter++;

      if($clearFixCounter == 3) {
        echo '<div class="clearfix visible-md-block visible-lg-block"></div>';
        $clearFixCounter = 0;
      }

    }
    echo '</div>';
  }

  if(have_rows('acfIndSecItemCells')) {
    echo '<div class="owl-carousel owl-theme m-mobileIndexSectionItemCell col-xs-100 hidden-sm hidden-md hidden-lg">';
      while(have_rows('acfIndSecItemCells')) {
        the_row();
        if(get_sub_field('acfIndSecCellIcon')) {
          $mobileIcon = new AcfImage;
          $mobileIcon->useSubfield();
          $mobileIcon->useElement();
          $mobileIcon->setObject('acfIndSecCellIcon');
          $mobileIcon->setClasses('a-mobileIndexSectionItemCell__icon');
        }
        echo '<div class="m-mobileIndexSectionItemCell col-xs-100">';
          if(get_sub_field('acfIndSecCellIcon')) {
            $mobileIcon->init();
          }

          $title->init();
          $content->init();
        echo '</div>';
      }

    echo '</div>'; // .m-indexSectionItemCell
  }

}
