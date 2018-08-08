<?php
get_header();
?>
<script type="text/javascript">
  let pageLocation = 'single';
</script>
<?php
knowledgeHubTop('postsPage');
?>
<div class="o-singlePost col-xs-24">
  <div class="container">
    <?php
     

    if(have_posts()):
      the_post();

      // Language control. Is a second language choosen for the post?
      if(get_field('acfPostSecLang')) {
        switch($_COOKIE['language']) {
          case "en":
            $postTitle = new AcfText;
            $postTitle->setObject('acfSecLangtitle');
            break;

          case "sv":
            $postTitle = new WpContent;
            $postTitle->setContent('title');
            break;
        }
      } else {
        $postTitle = new WpContent;
        $postTitle->setContent('title');
      }

      $postTitle->setElementType('h1');

      if(get_field('acfKnowHubPostCase')) {
        $postTitle->setClasses('a-singlePost__caseTitle');
      } else {
        $postTitle->setClasses('a-singlePost__title');
      }

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
      <div class="m-singlePostLeftColumn hidden-xs col-sm-2 col-sm-offset-2 col-md-1 col-md-offset-1">
        <?php shareIcons() ?>
      <!-- .m-singlePostLeftColumn -->
      </div>

      <div class="m-singlePostRightColumn col-xs-24 col-sm-20">
        <?php $postTitle->init() ?>

        <p class="m-singlePostInfo__text">
          <a class="a-singlePostInfo__category" href="<?= get_category_link(get_cat_ID($postCategory->init())) ?>">
            <?= $postCategory->init(); ?>
          </a>
          <?php $postDate->init() ?> by <?php $postAuthor->init() ?>
        </p>

        <div class="m-singlePostContent col-xs-24">
          <?php
          if(have_rows('acfPostFlexContent')) {
            while(have_rows('acfPostFlexContent')) {
              the_row();
              switch(get_row_layout()) {
                case 'acfPostText':
                  if(get_field('acfPostSecLang')) {
                    switch($_COOKIE['language']) {
                      case "en":
                        echo the_sub_field('acfPostTextFieldEng');
                        break;

                      case "sv":
                        echo the_sub_field('acfPostTextFieldSwe');
                        break;
                    }
                  } else {
                    echo the_sub_field('acfPostTextFieldSwe');
                  }
                  break;

                case 'acfPostImageSlider':
                  $images = get_sub_field('acfPostImageSliderContent')['gallery'];
                  if($images) {
                    echo '<div class="o-singlePostContentSlider flexslider" id="slider">';
                      echo '<ul class="slides">';

                      foreach($images as $image) {
                        echo '<li>';
                        echo '<img src="' . $image['sizes']['large'] . '"/>';
                        if($image['caption']) {
                          echo '<p class="a-singlePostContent__galleryImgDesc">' . $image['caption'] . '</p>';
                        }
                        echo '</li>';
                      }
                      echo '</ul>';
                    echo '</div>';
                  }
                  break;
              }
            }
          }
          ?>
        <!-- .m-singlePostContent -->
        </div>

        <?php postAuthor(); ?>

        <div class="m-singlePostTags col-xs-24">
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

        <div class="m-singlePostMobileShareIcons col-xs-24 hidden-sm hidden-md hidden-lg">
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
