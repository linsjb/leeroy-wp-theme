<?php
$args = array(
  'p' => 768,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new WpContent;
    $title->setContent('title');
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionThreeContent__title');
    $title->useBreakpoint();

    $desktopImage = new AcfImage;
    $desktopImage->setObject('acfIndexSectionThreeDesktopImg');
    $desktopImage->useElement();
    $desktopImage->setClasses('a-indexSectionThreeContent__image hidden-xs col-xs-100');

    $mobileImage = new AcfImage;
    $mobileImage->setObject('acfIndexSectionThreeMobileImage');
    $mobileImage->useElement();
    $mobileImage->setClasses('a-indexSectionThreeContent__image hidden-sm hidden-md hidden-lg col-xs-100');

?>
    <div class="o-indexSectionThree col-xs-100" style="<?= pageBackgroundType(); ?>">
        <?php pageBackgroundTone() ?>
        <div class="container o-indexSectionThreeContent">
          <?php
          $title->init();
          $desktopImage->init();
          $mobileImage->init();
          ?>

        <!-- .m-indexSectionThreeContent -->
        </div>
      <!-- .m-indexSectionThreeContent -->
    </div><!-- .indexSectionThree -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
