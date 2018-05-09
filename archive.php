<?php
get_header();
informationPageTop('postsPage');

if(is_category()) {
  $archiveType = 'Categories: ';
  $archiveName = single_cat_title('', false);
} else {
  $archiveType = 'Tags: ';
  $archiveName = single_tag_title('', false);
}
?>

<div class="o-archive col-xs-24">
  <div class="container o-archiveContent">
    <h1 class="o-archiveContent__title"><?= $archiveType . ' ' . $archiveName?></h1>
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
