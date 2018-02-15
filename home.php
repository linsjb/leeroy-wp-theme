<?php
/*
 * Description: Page template for blog index.
 */
get_header();
informationPageTop();
?>

<div class="o-knowledgeHub">
  <?php
  if(have_posts()):
    while (have_posts()):
      the_post();
    endwhile;
  endif;
  ?>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();
?>
