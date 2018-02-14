<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=192');

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();
    $title = new wpContent;
    $title->title();
    $title->breakpoint();
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionThreeContent__header');

    $image = new AcfImage;
    $image->setObject('acfIndexSectionThreeImage');
    $image->useElement();
    $image->setClasses('a-indexSectionThreeContent__image' . $grid->width(100));

?>
    <div class="o-indexSectionThree<?= $grid->width(100); ?>" style="background-color: <?php the_field('acfIndexSectionBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
      <div class="container">
        <?php $title->init() ?>
        <div class="m-indexSectionThreeContent <?= $grid->width(80, 100); echo $grid->center(); ?>">
          <?php $image->init() ?>
        <!-- .m-indexSectionThreeContent -->
        </div>
      <!-- .container -->
      </div>
    </div><!-- .indexSectionThree -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
