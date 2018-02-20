<?php
/*
 * Description: Page template for blog index.
 */
get_header();
informationPageTop('postsPage');
?>

<div class="o-knowledgeHub col-xs-100 col-sm-100 col-md-100 col-lg-100">
  <div class="container m-knowledgeHubContent">
    <div class="m-knowledgeHubLeft col-md-75">

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
      <div class="m-knowledgeHubPost col-md-100">
        <div class="a-knowledgeHubPostImage col-md-40" style="background-image: url(<?= $postImage->getUrl() ?>)"></div>
        <div class="a-knowledgeHubPostContent col-md-55 pull-right">
          <?php
          $postCategory->init();

          ?>
          <a href="#" class="a-knowledgeHubContent__title"><?= $postTitle->init(); ?></a>
          <p class="a-knowledgeHubPost__info"><?php $postDate->init(); ?> by <?php $postAuthor->init(); ?></p>
        </div>
      <!-- .m-knowledgeHubPost -->
      </div>
<?php
    endwhile;
  endif;
  ?>
  <!-- .m-knowledgeHubLeft -->
  </div>

  <div class="red m-knowledgeHubRight col-lg-20 pull-right">
  <!-- .m-knowledgeHubRight -->
  </div>

  <!-- .m-knowledgeHubContent -->
  </div>
<!-- .o-knowledgeHub -->
</div>
<?php
get_footer();

?>
