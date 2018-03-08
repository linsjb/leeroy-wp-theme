<?php
$args = array(
  'p' => 698,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new wpContent;
    $title->setContent('title');
    $title->useBreakpoint();
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionFiveContent__title col-xs-100');

    $icon = new AcfImage;
    $icon->setObject('acfIndexSectionImage');
    $icon->setClasses('a-contactForm__icon');
    $icon->useElement();
?>
    <div class="o-indexSectionFive col-xs-100" style="<?= pageBackgroundType(); ?>">
        <?php pageBackgroundTone() ?>
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
