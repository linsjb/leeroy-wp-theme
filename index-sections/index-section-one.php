<?php
$query = new WP_Query(array('paged' => 5));
if($query->have_posts()):
  while ($query -> have_posts()):
    $query->the_post();
    $backgroundImage = new AcfImage();
    $backgroundImage->setObject('acfIndexImage');

    $title = new wpContent();
    $title->title();
    $title->breakPoint();
    $title->setElementType('h1');
    $title->setClasses('a-indexSectionOneText__header col-md-100');

    $content = new WpContent();
    $content->content();
    $content->breakPoint();
    $content->setElementType('p');
    $content->setClasses('a-indexSectionOneText__paragraph col-md-60');
?>
    <div class="o-indexSectionOne col-md-100">
      <img class="m-indexSectionOne__image" src="<?php echo $backgroundImage->getImageUrl() ?>" alt="">
      <div class="m-indexSectionOne__imageFader <?php bootstrapGridWidth(100, true, true) ?>"></div>
      <div class="m-indexSectionOneText <?php bootstrapGridWidth(94, false, true); bootstrapGridOffset(6); ?>">
        <?php
        $title->init();
        $content->init();
        ?>

      </div>
    </div><!-- .indexSectionOne -->
  <?php endwhile; ?>
<?php endif; ?>
