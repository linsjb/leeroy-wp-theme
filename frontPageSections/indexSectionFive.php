<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=86');

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new WpContent;
    $title->title();
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionFiveContent__header');
?>
    <div class="o-indexSectionFive<?= $grid->width(100); ?>"style="background-color: <?php the_field('acfIndexSectionBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
      <div class="container m-indexSectionFiveContent">
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
                <div class="m-indexSectionItem  col-xs-90 col-xs-offset-5 col-sm-47 col-sm-offset-2 col-md-47 col-md-offset-2 col-lg-47 col-lg-offset-2">
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
      <!-- .m-indexSectionFiveContent -->
      </div>
    </div><!-- .indexSectionFive -->
  <?php endwhile ?>
<?php endif ?>
