<div class="indexTop">
  <?php $the_query = new WP_Query( 'page_id=5' );
  while ($the_query -> have_posts()):
    $image = get_field('acf-backgroundImage');
    $the_query -> the_post();
  ?>
    <img
      class="indexTop__image"
      src="<?php echo $image['url']?>"
      alt="<?php echo $image['title']?>"
    >
  <?php endwhile ?>
</div> <!-- .indexTop -->
