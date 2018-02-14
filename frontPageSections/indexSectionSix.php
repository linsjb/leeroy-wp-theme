<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=223');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new wpContent;
    $title->title();
    $title->breakPoint();
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionSixContent__header' . $grid->width(100));

    $icon = new AcfImage;
    $icon->setObject('acfIndexSectionFiveIcon');
    $icon->setClasses('a-contactForm__icon');
    $icon->useElement();

?>
    <div class="o-indexSectionSix <?= $grid->width(100); ?>" style="background-color: <?php the_field('acfIndexSectionBackgroundColor'); ?>">
      <?php pageBackgroundType(); ?>
        <div class="container m-indexSectionSixContent">
          <?php
          $title->init();
          echo do_shortcode('[caldera_form id="CF5a80d6fe9432c"]');
          $icon->init();
          ?>
        <!-- .m-indexSectionSixText -->
        </div>
    <!-- .indexSectionSix -->
    </div>

<?php
  endwhile;
endif;
wp_reset_postdata();
?>
