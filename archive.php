<?php
get_header();
informationPageTop('postsPage');
?>

<div class="o-knowledgeHub col-xs-100 col-sm-100 col-md-100 col-lg-100">
  <div class="container m-knowledgeHubContent">
    <div id="knowledgeHubPosts" class="m-knowledgeHubLeft col-xs-100 col-sm-100 col-md-70 col-lg-70">

  <?php
  if(have_posts()):
    while (have_posts()):
      the_post();
      $postImage = new AcfImage;
      $postImage->setObject('acfKnowHubPostImage');

      $postTitle = new WpContent;
      $postTitle->setContent('title');

      $postCategory = new WpContent;
      $postCategory->setElementType('p');
      $postCategory->setContent('category');
      $postCategory->setClasses('a-knowledgeHubContent__category');

      $postDate = new wpContent;
      $postDate->setElementType('span');
      $postDate->setContent('date');
      $postDate->setClasses('a-knowledgeHubPost__date');

      $postAuthor = new WpContent;
      $postAuthor->setElementType('span');
      $postAuthor->setContent('author');
      $postAuthor->setClasses('a-knowledgeHubPost__author');
?>
      <div class="m-knowledgeHubPost col-xs-100 col sm-100 col-md-100 col-lg-100">
        <div class="a-knowledgeHubPostImage col-xs-100 col-sm-50 col-md-50 col-lg-50" style="background-image: url(<?= $postImage->getUrl() ?>)"></div>
        <div class="a-knowledgeHubPostContent col-xs-100 col-sm-50 col-md-50 col-lg-50 pull-right">
          <?php
          $postCategory->init();
          ?>
          <a href="<?php the_permalink() ?>" class="a-knowledgeHubContent__title"><?= $postTitle->init(); ?></a>
          <p class="a-knowledgeHubPost__info"><?php $postDate->init(); ?> by <?php $postAuthor->init(); ?></p>
        </div>
      <!-- .m-knowledgeHubPost -->
      </div>
<?php
    endwhile;
  endif;
  load_more_button();
?>

  <!-- .m-knowledgeHubLeft -->
  </div>

  <div class="m-knowledgeHubRight col-xs-100 col-sm-100 col-md-25 col-lg-25 pull-right">
    <div class="m-contentRightBox col-xs-100 col-sm-45 col-md-100 col-lg-100">
      <h5 class="a-contentRightBox__title">Categories</h5>
      <?php
      $categories = new Categories;
      $categories->setContainerClasses('a-knowledgeHubCategory__list');
      $categories->setElementClasses('a-knowledgeHubCategory__item');
      $categories->init();
      ?>
    <!-- .m-knowledgeHubCategory -->
    </div>

    <?php resourcesSideBox() ?>
  <!-- .m-knowledgeHubRight -->
  </div>

  <!-- .m-knowledgeHubContent -->
  </div>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();

?>
