<?php
$args = array(
  'p' => 695,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new WpContent;
    $title->setContent('title');
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionFourContent__header');
?>
    <div class="o-indexSectionFour col-xs-100" style="<?= pageBackgroundType(); ?>">
      <?php pageBackgroundTone() ?>
      <div class="container m-indexSectionFourContent">
          <?php $title->init(); ?>

          <div class="col-xs-100 col-md-70 col-md-offset-15">
            <?php
            // Loop through the customer values in page
            if(have_rows('acfIndexSectionItems')):
              while(have_rows('acfIndexSectionItems')):
                the_row();
                $icon = new AcfImage;
                $icon->useSubfield();
                $icon->useElement();
                $icon->setObject('acfItemIcon');
                $icon->setClasses('a-indexSectionItems__icon col-xs-40 col-sm-30 col-xs-offset-30 col-sm-offset-35');

                $title = new AcfText;
                $title->useSubfield();
                $title->setObject('acfItemTitle');
                $title->setElementType('h5');
                $title->setClasses('a-indexSectionItems__title col-xs-100');

                $content = new AcfText;
                $content->useSubfield();
                $content->setObject('acfItemContent');
                $content->setElementType('p');
                $content->setClasses('a-indexSectionItems__content col-xs-60 col-sm-100 col-xs-offset-20 col-sm-offset-0');
                ?>
                <div class="m-indexSectionItem col-xs-90 col-sm-47 col-xs-offset-5 col-sm-offset-2">
                  <?php
                  $icon->init();
                  $title->init();
                  $content->init();
                  ?>
                </div>
                <?php
              endwhile;
            endif;
            ?>
          </div>
      <!-- .m-indexSectionFourContent -->
      </div>
    </div><!-- .indexSectionFive -->
  <?php endwhile ?>
<?php endif ?>
