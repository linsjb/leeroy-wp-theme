<?php
function indexSectionItems() {
  // Desktop cells
  if(have_rows('acfIndSecItemCells')) {
    echo '<div class="row">';
    // When the counter reach 4, insert a Bootstrap clear fix.
    $clearFixCounter = 0;
    while(have_rows('acfIndSecItemCells')) {
      the_row();
      if(get_sub_field('icon')) {
        $icon = new AcfImage;
        $icon->useSubfield();
        $icon->useElement();
        $icon->setObject('icon');
        $icon->setClasses('a-indexSectionItemCell__icon');
      }

      $title = new AcfText;
      $title->useSubfield();
      $title->setObject('title');
      $title->setElementType('h5');
      $title->setClasses('a-indexSectionItemCell__title col-xs-24 col-sm-21');

      $content = new AcfText;
      $content->useSubfield();
      $content->setObject('content');
      $content->setElementType('div');
      $content->setClasses('a-indexSectionItemCell__content col-xs-24 col-sm-21');
      // Item cell element
      echo '<div class="m-indexSectionItemCell col-sm-8  hidden-xs">';
        if(get_sub_field('icon')) {
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

  // Mobile cell's
  if(have_rows('acfIndSecItemCells')) {
    echo '<div class="owl-carousel owl-theme m-mobileIndexSectionItemCells col-xs-24 hidden-sm hidden-md hidden-lg">';
      while(have_rows('acfIndSecItemCells')) {
        the_row();
        if(get_sub_field('icon')) {
          $mobileIcon = new AcfImage;
          $mobileIcon->useSubfield();
          $mobileIcon->useElement();
          $mobileIcon->setObject('icon');
          $mobileIcon->setClasses('a-mobileIndexSectionItemCell__icon');
        }
        echo '<div class="m-mobileIndexSectionItemCell col-xs-24">';
          if(get_sub_field('icon')) {
            $mobileIcon->init();
          }

          $title->init();
          $content->init();
        echo '</div>';
      }

    echo '</div>'; // .m-indexSectionItemCells
  }
}
?>
