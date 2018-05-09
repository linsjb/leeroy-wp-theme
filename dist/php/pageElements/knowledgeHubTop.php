<?php
function knowledgeHubTop($pageType = null) {
  informationPageTop('postsPage');
?>

  <div class="o-knowledgeHubMenu col-xs-24">
    <div class="container o-knowledgeHubMenuContent">
      <nav class="m-knowledgeHubMenuNav">
        <ul class="a-knowledgehubMenuList">
          <li class="a-knowledgeHubMenuList__item">Categories</li>
          <li class="a-knowledgeHubMenuList__item">Tags</li>
          <li class="a-knowledgeHubMenuList__item">Cases</li>
          <li class="a-knowledgeHubMenuList__item">Latest posts</li>
        </ul>
      </nav>
    <!-- .o-knowledgeHubMenuContent -->
    </div>
  <!-- .o-knowledgeHubMenu -->
  </div>

  <!-- Categories -->
  <div  class="o-knowledgeHubMenuDropdown col-xs-24">
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

  <!-- Tags -->
  <div  class="o-knowledgeHubMenuDropdown col-xs-24">
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

  <!-- Cases -->
  <div  class="o-knowledgeHubMenuDropdown col-xs-24">
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

  <!-- Latest posts -->
  <div  class="o-knowledgeHubMenuDropdown col-xs-24">
    <div class="container">
      <?php
      $latest = new recentPosts;
      $latest->setItemsNumber(5);
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
