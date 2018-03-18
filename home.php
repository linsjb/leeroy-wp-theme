<?php
get_header();
knowledgeHubTop();
?>

<div class="o-knowledgeHub col-xs-100">
  <div class="green container o-knowledgeHubContent">
    <?php
    if(have_posts()) {
      $counter = 0;
      echo '<div class="red o-knowledgeHubGrid col-xs-100">';
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
