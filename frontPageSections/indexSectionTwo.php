<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=31');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();
    $title = new wpContent;
    $title->title();
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionTwoContent__header');
?>

    <div class="o-indexSectionTwo<?= $grid->width(100); ?>" style="background-color: <?php the_field('acfIndexSectionBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
        <div class="container m-indexSectionTwoContent">
          <?php $title->init(); ?>

          <div class="<?= $grid->width(100)?>">
            <?php indexSectionItems() ?>
          </div>
        <!-- .m-indexSectionTwoTopContent -->
        </div>
    <!-- .o-indexSectionTwo -->
    </div>

<?php
  endwhile;
endif;
wp_reset_postdata();
?>
