<?php
/*
*/

function indexSectionItems() {
  // Item row
  if(have_rows('acfIndexSectionItemsRow')) {
    while(have_rows('acfIndexSectionItemsRow')) {
      the_row();

      // Item row element
      echo '<div class="m-indexSectionItemRow hidden-xs col-xs-100">';

        // Item cell
        if(have_rows('acfIndexSectionItemCell')) {
          while(have_rows('acfIndexSectionItemCell')) {
            the_row();
            if(get_sub_field('acfItemIcon')) {
              $icon = new AcfImage;
              $icon->useSubfield();
              $icon->useElement();
              $icon->setObject('acfItemIcon');
              $icon->setClasses('a-indexSectionItemCell__icon col-xs-10 col-sm-30 col-sm-offset-35');
            }

            $title = new AcfText;
            $title->useSubfield();
            $title->setObject('acfItemTitle');
            $title->setElementType('h5');
            $title->setClasses('a-indexSectionItemCell__title col-xs-100');

            $content = new AcfText;
            $content->useSubfield();
            $content->setObject('acfItemContent');
            $content->setElementType('div');
            $content->setClasses('a-indexSectionItemCell__content col-xs-100');

            // Item cell element
            echo '<div class="m-indexSectionItemCell col-sm-31 col-sm-offset-2">';
              if(get_sub_field('acfItemIcon')) {
                $icon->init();
              }

              $title->init();
              $content->init();
            echo '</div>';
          }
        }
      echo '</div>';
    }
  }

  // Item row
  if(have_rows('acfIndexSectionItemsRow')) {
    echo '<div class="owl-carousel owl-theme m-mobileIndexSectionItemRow col-xs-100 hidden-sm hidden-md hidden-lg">';
      while(have_rows('acfIndexSectionItemsRow')) {
        the_row();
        if(have_rows('acfIndexSectionItemCell')) {
          // Item cell
          while(have_rows('acfIndexSectionItemCell')) {
            the_row();
            if(get_sub_field('acfItemIcon')) {
              $mobileIcon = new AcfImage;
              $mobileIcon->useSubfield();
              $mobileIcon->useElement();
              $mobileIcon->setObject('acfItemIcon');
              $mobileIcon->setClasses('a-mobileIndexSectionItemCell__icon');
            }
            echo '<div class="m-mobileIndexSectionItemCell col-xs-100">';
              if(get_sub_field('acfItemIcon')) {
                $mobileIcon->init();
              }

              $title->init();
              $content->init();
            echo '</div>';
          }
        }
      }

    echo '</div>'; // .m-indexSectionItemRow
  }

}
