<?php
$args = array(
  'p' => 695,
  'post_type' => 'sm_indexsections'
);
$query = new WP_Query($args);

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    $title = new WpContent;
    $title->setContent('title');
    $title->setElementType('h2');
    $title->setClasses('a-indexSectionFourContent__title');
?>
    <div class="o-indexSectionFour col-xs-100" style="<?= pageBackgroundType(); ?>">
      <?php pageBackgroundTone() ?>
      <div class="container m-indexSectionFourContent">
          <?php
          $title->init();
          indexSectionItems();
          ?>
      <!-- .m-indexSectionFourContent -->
      </div>
    </div><!-- .indexSectionFive -->
  <?php endwhile ?>
<?php endif ?>
