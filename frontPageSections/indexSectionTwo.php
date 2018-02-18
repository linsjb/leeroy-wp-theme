<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=31');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $topTitle = new wpContent;
    $topTitle->title();
    $topTitle->setElementType('h2');
    $topTitle->setClasses('a-indexSectionTwoContent__header');

    $bottomTitle = new AcfText;
    $bottomTitle->useBreakpoint();
    $bottomTitle->setObject('acfIndSecTwoBottomTitle');
    $bottomTitle->setElementType('h2');
    $bottomTitle->setClasses('a-indexSectionTwoBottom__title');

    $bottomImg = new AcfImage;
    $bottomImg->setObject('acfIndSecTwoBottomImg');
    $bottomImg->useElement();
    $bottomImg->setClasses('a-indexSectionTwoBottom__image' . $grid->width(100));
?>

    <div class="o-indexSectionTwoTop<?= $grid->width(100); ?>" style="background-color: <?php the_field('acfPageBackgroundColor') ?>">
      <?php pageBackgroundType() ?>
        <div class="container m-indexSectionTwoTopContent">
          <?php
          $topTitle->init();
          indexSectionItems();
          ?>
        <!-- .m-indexSectionTwoTopContent -->
        </div>
    <!-- .o-indexSectionTwoTop -->
    </div>

    <div class="o-indexSectionTwoBottom<?= $grid->width(100); ?>" style="background-color: <?php the_field('acfIndSecTwoBackground') ?>">
      <div class="container o-indexSectionTwoBottomContent">
        <?php
        $bottomTitle->init();
        $bottomImg->init();
        ?>
      <!-- .o-indexSectionTwoBottomContent -->
      </div>
    </div><!-- .indexSectionThree -->

<?php
  endwhile;
endif;
wp_reset_postdata();
?>