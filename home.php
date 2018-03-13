<?php
get_header();
knowledgeHubTop();
?>

<div class="o-knowledgeHub col-xs-100">
  <div class="container o-knowledgeHubContent">
    <?php
    if(have_posts()):
    ?>
      <div class="o-knowledgeHubGrid col-xs-100">

        <?php
        while (have_posts()) {
          the_post();
          knowledgeHubGrid();
        }
        ?>
      <!-- .o-knowledgeHubGrid -->
      </div>
    <?php
    endif;
    ?>
  <!-- .m-knowledgeHubContent -->
  </div>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();

?>
