<?php
$grid = $GLOBALS["grid"];
$args = array(
  'p' => 690,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

$title = new WpContent;
$title->setContent('title');
$title->setElementType('h2');
$title->setClasses('a-indexSectionThreeContent__header');
$title->useBreakpoint();

$icon = new AcfImage;
$icon->setObject('acfIndexSectionImage');
$icon->useElement();
$icon->setClasses('a-indexSectionThreeContent__icon' . $grid->width(30));
?>
    <div class="o-indexSectionThree<?= $grid->width(100); ?>" style="background-color: <?php the_field('acfPageBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
        <div class="container m-indexSectionThreeContent">
          <div class="m-indexSectionThreeTopContent<?= $grid->width(80); echo $grid->center(true) ?>">
            <?php
            $icon->init();
            $title->init();
            ?>
          <!-- .m-indexSectionThreeTopContent -->
          </div>
            <?php indexSectionItems() ?>
        <!-- .m-indexSectionThreeContent -->
        </div>
      <!-- .m-indexSectionThreeContent -->
    </div><!-- .indexSectionThree -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
