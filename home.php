<?php
get_header();
knowledgeHubTop();
?>

<div class="o-knowledgeHub col-xs-100">
  <div class="container m-knowledgeHubContent">
    <?php
    if(have_posts()):
      while (have_posts()):
          the_post();
      endwhile;
    endif;
    ?>
  <!-- .m-knowledgeHubContent -->
  </div>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();

?>
