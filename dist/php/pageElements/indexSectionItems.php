<?php
/*
*/

function indexSectionItems() {
  if(have_rows('acfIndexSectionItems')):
?>
    <div class="col-xs-100">
<?php
      while(have_rows('acfIndexSectionItems')):
        the_row();
        if(get_sub_field('acfItemIcon')) {
          $icon = new AcfImage;
          $icon->useSubfield();
          $icon->useElement();
          $icon->setObject('acfItemIcon');
          $icon->setClasses('a-indexSectionItems__icon col-xs-40 col-sm-30 col-xs-offset-30 col-sm-offset-35');
        }

        $title = new AcfText;
        $title->useSubfield();
        $title->setObject('acfItemTitle');
        $title->setElementType('h5');
        $title->setClasses('a-indexSectionItems__title col-xs-100');

        $content = new AcfText;
        $content->useSubfield();
        $content->setObject('acfItemContent');
        $content->setElementType('p');
        $content->setClasses('a-indexSectionItems__content col-xs-60 col-sm-100 col-xs-offset-20 col-md-offset-0');
  ?>
        <div class="m-indexSectionItem col-xs-98 col-xs-offset-1 col-sm-47 col-sm-offset-2 col-md-31 col-md-offset-2">
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
?>
    </div>
<?php
  endif;
}
?>
