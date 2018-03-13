<?php
get_header();
knowledgeHubTop('postsPage');
?>
<div class="o-singlePost col-xs-100">
  <div class="container">
    <?php
    if(have_posts()):
      the_post();

      $postTitle = new WpContent;
      $postTitle->setContent('title');
      $postTitle->setElementType('h1');
      $postTitle->setClasses('a-singlePost__title');

      $postCategory = new WpContent;
      $postCategory->setContent('category');

      $postDate = new WpContent;
      $postDate->setContent('date');
      $postDate->setElementType('span');
      $postDate->setClasses('a-singlePostInfo__date');

      $postAuthor = new WpContent;
      $postAuthor->setContent('author');
      $postAuthor->setElementType('span');
      $postAuthor->setClasses('a-singlePostInfo__author');
    ?>
      <div class="m-singlePostLeftColumn hidden-xs col-sm-5">
        <?php shareIcons() ?>
      <!-- .m-singlePostLeftColumn -->
      </div>

      <div class="m-singlePostRightColumn col-xs-100 col-sm-95">
        <?php $postTitle->init() ?>

        <p class="m-singlePostInfo__text">
          <a class="a-singlePostInfo__category" href="<?= get_category_link(get_cat_ID($postCategory->init())) ?>">
            <?= $postCategory->init(); ?>
          </a>
          <?php $postDate->init() ?> by <?php $postAuthor->init() ?>
        </p>

        <div class="m-singlePostContent">
          <?php
          if(have_rows('acfPostFlexContent')) {
            while(have_rows('acfPostFlexContent')) {
              the_row();
              switch(get_row_layout()) {
                case 'acfPostText':
                  echo the_sub_field('acfPostTextField');
                  break;

                case 'acfPostImage':
                  $rowImage = new AcfImage;
                  $rowImage->useSubfield();
                  $rowImage->setObject('acfPostImageField');
                  $rowImage->setClasses('a-singlePostContent__image');
                  $rowImage->useElement();
                  $rowImage->init();
                  break;

                case 'acfPostQuote':
                  $rowQuote = new AcfText;
                  $rowQuote->useSubfield();
                  $rowQuote->setObject('acfPostQuoteField');
                  $rowQuote->setClasses('a-singlePostContent__quote');
                  $rowQuote->setElementType('h3');
                  $rowQuote->useBreakpoint();
                  $rowQuote->init();
                  break;
              }
            }
          }
          ?>
        <!-- .m-singlePostContent -->
        </div>

        <?php postAuthor(); ?>

        <div class="m-singlePostTags col-xs-100">
          <?php
          $counter = 1;
          $tags = get_the_tags();
          $tagsLength = sizeof($tags);

          if($tags) {
            echo '<span class="a-postTags_title">Tags: </span>';

            foreach($tags as $tag) {
              if($tagsLength <= $counter) {
                echo '<a class="a-postTags__tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
              } else {
                echo '<a class="a-postTags__tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ', </a>';
              }
              $counter ++;
            }
          }
          ?>
        <!-- .m-singlePostTags -->
        </div>

        <div class="m-singlePostMobileShareIcons col-xs-100 hidden-sm hidden-md hidden-lg">
          <?php shareIcons() ?>
        <!-- .m-singlePostMobileShareIcons -->
        </div>
      <!-- .m-singlePostRightColumn -->
      </div>

    <?php
    endif;
    ?>
  <!-- .container -->
  </div>
<!-- .o-singlePost -->
</div>
<?php
get_footer();
?>
