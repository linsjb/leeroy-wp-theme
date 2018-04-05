<?php
function knowledgeHubTop($pageType = null) {
  informationPageTop('postsPage');
?>

  <div class="o-knowledgeHubMenu col-xs-100">
    <div class="container o-knowledgeHubMenuContent">
      <nav class="m-knowledgeHubMenu__nav">
        <ul>
          <li class="a-knowledgeHubMenuItem">Categories</li>
          <li class="a-knowledgeHubMenuItem">Tags</li>
          <li class="a-knowledgeHubMenuItem">Cases</li>
          <li class="a-knowledgeHubMenuItem">Latest posts</li>
        </ul>
      </nav>
    <!-- .o-knowledgeHubMenuContent -->
    </div>
  <!-- .o-knowledgeHubMenu -->
  </div>

  <div  class="o-knowledgeHubMenuDropdown col-xs-100">
    <div class="container">
      <?php
      $categories = new Taxonomy;
      $categories->setTaxonomy('category');
      $categories->setContainerClasses('m-knowledgeHubMenuDropdownList');
      $categories->setElementClasses('a-knowledgehubMenuDropdownItem');
      $categories->setTitle('Categories:');
      $categories->setTitleClasses('a-knowledgeHubMenuDropdownTitle');
      $categories->init();
      ?>
    <!-- .container -->
    </div>
  <!-- .o-knowledgeHubMenuDropdown -->
  </div>

  <div  class="o-knowledgeHubMenuDropdown col-xs-100">
    <div class="container">
      <?php
      $tags = new Taxonomy;
      $tags->setTaxonomy('post_tag');
      $tags->setContainerClasses('m-knowledgeHubMenuDropdownList');
      $tags->setElementClasses('a-knowledgehubMenuDropdownItem');
      $tags->setTitle('Tags:');
      $tags->setTitleClasses('a-knowledgeHubMenuDropdownTitle');
      $tags->init();
      ?>
    <!-- .container -->
    </div>
  <!-- .o-knowledgeHubMenuDropdown -->
  </div>

  <div  class="o-knowledgeHubMenuDropdown col-xs-100">
    <div class="container">
      <?php
      $postsArgs = array(
        'post_type'  => 'post',
        'meta_key' => 'acfKnowHubPostCase',
        'meta_value' => true
      );

      $postsQuery = new WP_Query($postsArgs);
      if($postsQuery->have_posts()) {
        echo '<ul class="m-knowledgeHubMenuDropdownList">';
          echo '<span class="a-knowledgeHubMenuDropdownTitle">Cases:</span>';
          while($postsQuery->have_posts()) {
            $postsQuery->the_post();
            echo '<li class="a-knowledgehubMenuDropdownItem">';
              echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
            echo '</li>';
          }
        echo '</ul>';
      }
      wp_reset_postdata();
      ?>
    <!-- .container -->
    </div>
  <!-- .o-knowledgeHubMenuDropdown -->
  </div>

  <div  class="o-knowledgeHubMenuDropdown col-xs-100">
    <div class="container">
      <?php
      $latest = new recentPosts;
      $latest->setItemsNumber(10);
      $latest->setContainerClasses('m-knowledgeHubMenuDropdownList');
      $latest->setElementClasses('a-knowledgehubMenuDropdownItem');
      $latest->setTitle('Latest posts:');
      $latest->setTitleClasses('a-knowledgeHubMenuDropdownTitle');
      $latest->init();
      ?>
    <!-- .container -->
    </div>
  <!-- .o-knowledgeHubMenuDropdown -->
  </div>
<?php
}
?>
