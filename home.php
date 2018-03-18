<?php
get_header();
knowledgeHubTop();
?>

<div class="o-knowledgeHub col-xs-100">
  <div class="container o-knowledgeHubContent">
    <?php
    if(have_posts()) {
      $counter = 0;
      while (have_posts()) {
        the_post();
        knowledgeHubGrid($counter);
        $counter++;
      }

    }
    ?>
  <!-- .m-knowledgeHubContent -->
  </div>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();

?>
