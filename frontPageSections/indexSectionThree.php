<?php
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
$icon->setClasses('a-indexSectionThreeContent__icon col-xs-30');
?>
    <div class="o-indexSectionThree col-xs-100" style="<?= pageBackgroundType(); ?>">
        <?php pageBackgroundTone() ?>
        <div class="container m-indexSectionThreeContent">
          <div class="m-indexSectionThreeTopContent col-xs-80 col-md-offset-10">
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
