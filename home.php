<?php
get_header();
knowledgeHubTop();
?>

<div class="o-knowledgeHub col-xs-24">
  <div class="container o-knowledgeHubContent">
    <?php
    if(have_posts()) {
      $counter = 0;
      echo '<div class="o-knowledgeHubGrid col-xs-24">';
        while (have_posts()) {
          the_post();
            knowledgeHubGrid($counter);
          $counter++;
        }
      echo '</div>';
    }
    ?>
  <!-- .m-knowledgeHubContent -->
  </div>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();
?>
