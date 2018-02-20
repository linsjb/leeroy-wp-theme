<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=223');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new wpContent;
    $title->setContent('title');
    $title->useBreakpoint();
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionFiveContent__header' . $grid->width(100));

    $icon = new AcfImage;
    $icon->setObject('acfIndexSectionImage');
    $icon->setClasses('a-contactForm__icon');
    $icon->useElement();
?>
    <div class="o-indexSectionFive <?= $grid->width(100); ?>" style="background-color: <?php the_field('acfPageBackgroundColor'); ?>">
      <?php pageBackgroundType(); ?>
        <div class="container m-indexSectionFiveContent">
          <?php
          $title->init();
          echo do_shortcode('[caldera_form id="CF5a80d6fe9432c"]');
          $icon->init();
          ?>
        <!-- .m-indexSectionFiveContent -->
        </div>
    <!-- .o-indexSectionFive -->
    </div>
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
