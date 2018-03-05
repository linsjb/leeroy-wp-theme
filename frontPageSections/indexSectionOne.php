<?php
$args = array(
  'p' => 687,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new wpContent;
    $title->setContent('title');
    $title->useBreakpoint();
    $title->setElementType('h1');
    $title->setClasses('a-indexSectionOneContent__header col-xs-100');

    $content = new AcfText;
    $content->useBreakpoint();
    $content->setObject('acfIndexSectionOneContent');
    $content->setElementType('p');
    $content->setClasses('a-indexSectionOneContent__text col-xs-100');
?>
    <div id="home" class="o-indexSectionOne col-xs-100" style="background-color: <?php the_field('acfPageBackgroundColor'); ?>">
      <?php pageBackgroundType(); ?>
        <div class="container m-indexSectionOneContent">
          <?php
          $title->init();
          $content->init();
          ?>
        <!-- .m-indexSectionOneText -->
        </div>
    <!-- .indexSectionOne -->
    </div>

<?php
  endwhile;
endif;
wp_reset_postdata();
?>
