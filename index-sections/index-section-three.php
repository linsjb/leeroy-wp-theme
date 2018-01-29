<?php
$query = new WP_Query('page_id=69');

if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

$title = new WpContent;
$title->title();
$title->setElementType('h2');
$title->setClasses('m-indexSectionThree__header pull-right' . bootstrapGridWidth(80));
$title->breakPoint();

$icon = new AcfImage;
$icon->
?>
    <div class="o-indexSectionThree<?= bootstrapGridWidth(100); ?>">
      <div class="m-indexSectionThreeContent<?= bootstrapGridWidth(80, true, true); ?>">
        <?php $title->init(); ?>
      <!-- .m-indexSectionThreeContent -->
      </div>
    </div><!-- .indexSectionThree -->
  <?php endwhile ?>
<?php endif ?>
