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

<?php
  endwhile;
endif;
wp_reset_postdata();
?>
