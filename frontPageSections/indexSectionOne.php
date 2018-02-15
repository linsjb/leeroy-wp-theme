<?php
$grid = $GLOBALS["grid"];
$query = new WP_Query('page_id=5');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new wpContent;
    $title->title();
    $title->useBreakpoint();
    $title->setElementType('h1');
    $title->setClasses('a-indexSectionOneContent__header' . $grid->width(100));

    $content = new WpContent;
    $content->content();
    $content->useBreakpoint();
    $content->setElementType('p');
    $content->setClasses('a-indexSectionOneContent__text' . $grid->width(100));
?>
    <div id="home" class="o-indexSectionOne <?= $grid->width(100); ?>" style="background-color: <?php the_field('acfPageBackgroundColor'); ?>">
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
