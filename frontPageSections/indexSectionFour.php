<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=69');

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

$title = new WpContent;
$title->title();
$title->setElementType('h2');
$title->setClasses('a-indexSectionFourContent__header');
$title->breakPoint();

$icon = new AcfImage;
$icon->setObject('acfSectionFourIcon');
$icon->useElement();
$icon->setClasses('a-indexSectionFourContent__icon' . $grid->width(30));
?>
    <div class="o-indexSectionFour<?= $grid->width(100); ?>" style="background-color: <?php the_field('acfIndexSectionBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
      <div class="container">
        <div class="m-indexSectionFourContent <?= $grid->width(100)?>">
          <div class="m-indexSectionFourUpperContent<?= $grid->width(80); echo $grid->center(true) ?>">
            <?php
            $icon->init();
            $title->init();
            ?>
          </div>

          <div class="<?= $grid->width(100) ?>">
            <?php indexSectionItems() ?>
          </div>
        <!-- .m-indexSectionFourInnerContent -->
        </div>
      <!-- .m-indexSectionFourContent -->
      </div>
    </div><!-- .indexSectionFour -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
