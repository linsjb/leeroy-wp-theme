<?php
/*
*/

function indexSectionItems() {
  $grid = $GLOBALS["grid"];
  if(have_rows('acfIndexSectionItems')):
    while(have_rows('acfIndexSectionItems')):
      the_row();
      if(get_sub_field('acfItemIcon')) {
        $icon = new AcfImage;
        $icon->useSubfield();
        $icon->useElement();
        $icon->setObject('acfItemIcon');
        $icon->setClasses('a-indexSectionItems__icon' . $grid->width(30, 40) . $grid->center(true));
      }

      $title = new AcfText;
      $title->useSubfield();
      $title->setObject('acfItemTitle');
      $title->setElementType('h5');
      $title->setClasses('a-indexSectionItems__title' . $grid->width(100));

      $content = new AcfText;
      $content->useSubfield();
      $content->setObject('acfItemContent');
      $content->setElementType('p');
      $content->setClasses('a-indexSectionItems__content' . $grid->width(100, 60) . $grid->center(true));
  ?>
      <div class="m-indexSectionItem col-xs-98 col-xs-offset-1 col-sm-47 col-sm-offset-2 col-md-31 col-md-offset-2 col-lg-31 col-lg-offset-2">
        <?php
        if(get_sub_field('acfItemIcon')) {
          $icon->init();
        }
        $title->init();
        $content->init();
        ?>
      </div>
<?php
    endwhile;
  endif;
}
?>
