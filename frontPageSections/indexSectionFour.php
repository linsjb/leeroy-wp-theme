<?php
$grid = $GLOBALS["grid"];
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
    <div class="o-indexSectionFour<?= $grid->width(100); ?>"style="background-color: <?php the_field('acfPageBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
      <div class="container m-indexSectionFourContent">
          <?php $title->init(); ?>

          <div class="col-xs-100 col-sm-100 col-md-70 col-md-offset-15 col-lg-70 col-lg-offset-15">
            <?php
            // Loop through the customer values in page
            if(have_rows('acfIndexSectionItems')):
              while(have_rows('acfIndexSectionItems')):
                the_row();
                $icon = new AcfImage;
                $icon->useSubfield();
                $icon->useElement();
                $icon->setObject('acfItemIcon');
                $icon->setClasses('a-indexSectionItems__icon' . $grid->width(30, 40) . $grid->center(true));

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
                <div class="m-indexSectionItem<?= $grid->width(47, 90); echo $grid->offset(2, 5)?>">
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
