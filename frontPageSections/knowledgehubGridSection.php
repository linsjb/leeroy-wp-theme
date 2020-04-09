<?php
echo '<div class="container m-indexSectionBlogPost">';

if(!$titleUsed) {
  $title->init();
}
$titleUsed = true;

$blogPostArgs = array(
  'posts_per_page'  => 5,
  'post_type'       => 'post',
  'meta_key'        => 'acfKnowHubPostCaseShow',
  'meta_value'      => true
);

$blogPosts = new WP_Query($blogPostArgs);

if(count($blogPosts->posts)) {
  $counter = 0;
  echo '<div class="o-knowledgeHubGrid col-xs-24">';
    foreach($blogPosts->posts as $blogPost) {
      if($counter != 3) {
        knowledgeHubGrid($counter, $blogPost->ID);
      } else {
        echo '
          <div id="cell-' . $counter . '" class="o-knowledgeHubCell -static hidden-sm hidden-xs" data-imgprops="-1">
            <div class="m-knowledgeHubCellRocket">
              <img src="' . get_template_directory_uri() . '/images/002-startup.svg" alt="Rocket" class="m-knowledgeHubCellRocket__image" />
            </div>
          </div>
        ';
        knowledgeHubGrid($counter+1, $blogPost->ID);
        $counter++;
      }
      $counter++;
    } // foreach($blogPosts->posts as $nestedPost)
  echo '</div>'; // .KnowledgeHubGrid
echo '</div>'; // .container
} // if($postsQuery->have_posts())