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
$title->setClasses('a-indexSectionThreeContent__title');
$title->useBreakpoint();

$icon = new AcfImage;
$icon->setObject('acfIndexSectionImage');
$icon->useElement();
$icon->setClasses('a-indexSectionThreeContent__icon col-xs-30');
?>
    <div class="o-indexSectionThree col-xs-100" style="<?= pageBackgroundType(); ?>">
        <?php pageBackgroundTone() ?>
        <div class="container m-indexSectionThreeContent">

        <!-- .m-indexSectionThreeContent -->
        </div>
      <!-- .m-indexSectionThreeContent -->
    </div><!-- .indexSectionThree -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
