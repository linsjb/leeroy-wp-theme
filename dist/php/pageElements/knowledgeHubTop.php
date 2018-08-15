<?php
function knowledgeHubTop($pageType = null) {
  informationPageTop('postsPage');

  switch($_COOKIE['language']) {
    case get_field('acfLangOptPrimLang', 'option')['code']:
      $catMenu = 'Categories';
      $tagMenu = 'Tags';
      $latestMenu = 'Latest posts';
      break;

    case get_field('acfLangOptSecLang', 'option')['code']:
      $catMenu = 'Kategorier';
      $tagMenu = 'Taggar';
      $latestMenu = 'Senaste inläggen';
      break;

    default:
      $catMenu = 'Categories';
      $tagMenu = 'Tags';
      $latestMenu = 'Latest posts';
      break;
  }
?>

  <div class="o-knowledgeHubMenu col-xs-24">
    <div class="container o-knowledgeHubMenuContent">
      <nav class="m-knowledgeHubMenuNav">
        <ul class="a-knowledgehubMenuList">
          <li class="a-knowledgeHubMenuList__item"><?= $catMenu ?></li>
          <li class="a-knowledgeHubMenuList__item"><?= $tagMenu ?></li>
          <li class="a-knowledgeHubMenuList__item"><?= $latestMenu ?></li>
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
      $categories->setTitle($catMenu . ':');
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
      $tags->setTitle($tagMenu . ':');
      $tags->setTitleClasses('a-knowledgeHubMenuDropdownTitle');
      $tags->init();
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
      $latest->setTitle($latestMenu . ':');
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
