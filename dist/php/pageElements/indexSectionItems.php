<?php
/*
*/

function indexSectionItems() {
  // Item row
  if(have_rows('acfIndexSectionItemsRow')) {
    while(have_rows('acfIndexSectionItemsRow')) {
      the_row();

      // Item row element
      echo '<div class="m-indexSectionItemRow  col-xs-100">';

        // Item cell
        if(have_rows('acfIndexSectionItemCell')) {
          while(have_rows('acfIndexSectionItemCell')) {
            the_row();
            if(get_sub_field('acfItemIcon')) {
              $icon = new AcfImage;
              $icon->useSubfield();
              $icon->useElement();
              $icon->setObject('acfItemIcon');
              $icon->setClasses('a-indexSectionItemCell__icon col-xs-40 col-sm-30 col-xs-offset-30 col-sm-offset-35');
            }

            $title = new AcfText;
            $title->useSubfield();
            $title->setObject('acfItemTitle');
            $title->setElementType('h5');
            $title->setClasses('a-indexSectionItemCell__title col-xs-100');

            $content = new AcfText;
            $content->useSubfield();
            $content->setObject('acfItemContent');
            $content->setElementType('p');
            $content->setClasses('a-indexSectionItemCell__content col-xs-100');

            // Item cell element
            echo '<div class="m-indexSectionItemCell col-xs-98 col-xs-offset-1 col-sm-47 col-sm-offset-2 col-md-31 col-md-offset-2">';
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
}
