<?php
  if(have_posts()):
    while (have_posts()):
      the_post();
      $backgroundImage = new AcfImage();
      $backgroundImage->setObject('acfIndexImage');
?>
      <div class="o-indexSectionOne col-md-100">
        <img class="m-indexSectionOne__image" src="<?php echo $backgroundImage->getImageUrl() ?>" alt="">
      </div><!-- .indexSectionOne -->
    <?php endwhile; ?>
<?php endif; ?>
