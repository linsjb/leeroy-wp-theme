<?php
/*
 * Template Name: Information page
 * Description: Page template for information pages.
 */
get_header();
if(have_posts()):
  while (have_posts()):
    the_post();
    informationPageElements();
  endwhile;
endif;
get_footer();
?>
