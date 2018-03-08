<?php
$args = array(
  'p' => 689,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $topTitle = new wpContent;
    $topTitle->setContent('title');
    $topTitle->setElementType('h2');
    $topTitle->setClasses('a-indexSectionTwoContent__title');

    $bottomTitle = new AcfText;
    $bottomTitle->useBreakpoint();
    $bottomTitle->setObject('acfIndSecTwoBottomTitle');
    $bottomTitle->setElementType('h2');
    $bottomTitle->setClasses('a-indexSectionTwoBottom__title');

    $bottomImg = new AcfImage;
    $bottomImg->setObject('acfIndSecTwoBottomImg');
    $bottomImg->useElement();
    $bottomImg->setClasses('a-indexSectionTwoBottom__image col-xs-100');
?>

    <div class="o-indexSectionTwoTop col-xs-100" style="<?= pageBackgroundType(); ?>">
        <?php pageBackgroundTone() ?>
        <div class="container m-indexSectionTwoTopContent">
          <?php
          $topTitle->init();
          indexSectionItems();
          ?>
        <!-- .m-indexSectionTwoTopContent -->
        </div>
    <!-- .o-indexSectionTwoTop -->
    </div>

    <div class="o-indexSectionTwoBottom col-xs-100" style="background-color: <?php the_field('acfIndSecTwoBackground') ?>">
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
