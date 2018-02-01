<?php
$query = new WP_Query('page_id=5');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();
    $backgroundImage = new AcfImage;
    $backgroundImage->setObject('acfIndexImage');
    $backgroundImage->useElement();
    $backgroundImage->setClasses('m-indexSectionOne__image');

    $title = new wpContent;
    $title->title();
    $title->breakPoint();
    $title->setElementType('h1');
    $title->setClasses('a-indexSectionOneText__header' . bootstrapGridWidth(100));

    $content = new WpContent;
    $content->content();
    $content->breakPoint();
    $content->setElementType('p');
    $content->setClasses('a-indexSectionOneText__paragraph' . bootstrapGridWidth(60));

?>
    <div class="o-indexSectionOne <?php bootstrapGridWidth(100); ?>">
      <?php
      $backgroundImage->init();
      if(get_field('acfIndexImageFade')):
      ?>
        <div class="m-indexSectionOneImageFader<?= bootstrapGridWidth(100) ?>" style="background-color: <?php the_field('acfIndexImageFadeColour')?>"></div>
      <?php endif; ?>

      <div class="container">
        <div class="m-indexSectionOneText <?= bootstrapGridWidth(100) ?>">
          <?php
            $title->init();
            $content->init();
          ?>
        <!-- .m-indexSectionOneText -->
        </div>
      <!-- .container -->
      </div>
    <!-- .indexSectionOne -->
    </div>

<?php
  endwhile;
endif;
wp_reset_postdata();
?>
