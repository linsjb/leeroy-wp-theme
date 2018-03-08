<?php
get_header();
knowledgeHubTop('postsPage');
?>
<div class="o-singlePost col-xs-100">
  <div class="container m-singlePostContent">
    <?php
    if(have_posts()):
      while(have_posts()):
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
        <div class="m-singlePostLeft col-xs-100 col-md-70">
          <?php $postTitle->init(); ?>
          <p class="m-singlePostInfo__text">
            <a class="a-singlePostInfo__category" href="<?= get_category_link(get_cat_ID($postCategory->init())) ?>"><?= $postCategory->init(); ?></a>
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

          <div class="m-singlePostTags col-xs-100 col-sm-50">
            <?php
            $counter = 1;
            $tags = get_the_tags();
            $tagsLength = sizeof($tags);

            if($tags) {
              echo '<span class="a-postTags_title">Tags: </span>';
              foreach($tags as $tag){
                if($tagsLength <= $counter) {
                  echo '<a class="a-postTags__tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                } else {
                  echo '<a class="a-postTags__tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ', </a>';
                }
                $counter ++;
              }
            }
            ?>
          <!-- .m-m-singlePostTags -->
          </div>

          <div class="m-singlePostShare col-xs-100 col-sm-50">
              <a href="#" class="a-singlePostShare__link a-singlePostShare__facebook">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <path class="st0" d="M288,176v-64c0-17.7,14.3-32,32-32h32V0h-64c-53,0-96,43-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
                </svg>
              </a>

              <a href="#" class="a-singlePostShare__link a-singlePostShare__google">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 836 521" style="enable-background:new 0 0 836 521;" xml:space="preserve">
                <g>
                  <polygon class="st0" points="720.6,210.6 720.6,109.8 670.2,109.8 670.2,210.6 569.4,210.6 569.4,261 670.2,261 670.2,361.8
                  720.6,361.8 720.6,261 821.4,261 821.4,210.6"/>
                  <path class="st0" d="M267,210.6v100.8h142.6c-20.8,58.7-76.9,100.8-142.6,100.8c-83.4,0-151.2-67.8-151.2-151.2
                  S183.6,109.8,267,109.8c36.1,0,70.9,13,97.9,36.5l66.2-76C385.8,30.8,327.5,9,267,9C128,9,15,122,15,261s113,252,252,252
                  s252-113,252-252v-50.4H267z"/>
                </g>
                </svg>
              </a>

              <a href="#" class="a-singlePostShare__link a-singlePostShare__twitter">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 512 430" style="enable-background:new 0 0 512 430;" xml:space="preserve">
                  <path class="st0" d="M512,56.2c-19,8.4-39.3,13.9-60.5,16.6c21.8-13,38.4-33.4,46.2-58c-20.3,12.1-42.7,20.6-66.6,25.4
                    C411.9,19.7,384.4,7,354.5,7c-58.1,0-104.9,47.2-104.9,105c0,8.3,0.7,16.3,2.4,23.9C164.7,131.7,87.5,89.8,35.6,26.1
                    c-9.1,15.7-14.4,33.7-14.4,53.1c0,36.4,18.7,68.6,46.6,87.2c-16.9-0.3-33.4-5.2-47.4-12.9c0,0.3,0,0.7,0,1.2
                    c0,51,36.4,93.4,84.1,103.1c-8.5,2.3-17.9,3.5-27.5,3.5c-6.7,0-13.5-0.4-19.9-1.8c13.6,41.6,52.2,72.1,98.1,73.1
                    c-35.7,27.9-81.1,44.8-130.1,44.8c-8.6,0-16.9-0.4-25.1-1.4c46.5,30,101.6,47.1,161,47.1c193.2,0,298.8-160,298.8-298.7
                    c0-4.6-0.2-9.1-0.4-13.6C480.2,96,497.7,77.5,512,56.2z"/>
                </svg>
              </a>

              <a href="#" class="a-singlePostShare__link a-singlePostShare__linkedin">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <g>
                    <rect y="160" class="st0" width="114.5" height="352"/>
                    <path class="st0" d="M426.4,164.1c-1.2-0.4-2.4-0.8-3.6-1.2c-1.5-0.4-3.1-0.6-4.6-0.9c-6.1-1.2-12.7-2.1-20.5-2.1
                    c-66.8,0-109.1,48.5-123,67.3V160H160v352h114.5V320c0,0,86.5-120.5,123-32c0,79,0,224,0,224H512V274.5
                    C512,221.3,475.6,177,426.4,164.1z"/>
                    <circle class="st0" cx="56" cy="56" r="56"/>
                  </g>
                </svg>
              </a>
          <!-- .m-singlePostShare -->
          </div>
        <!-- .m-singlePostLeft -->
        </div>
    <?php
      endwhile;
    endif;
    ?>

    <div class="m-singlePostRight col-xs-100 col-md-25 pull-right">
      <div class="m-contentRightBox col-xs-100 col-sm-45 col-md-100">
        <h5 class="a-contentRightBox__title">Latest blogposts</h5>
          <?php
          $recentPosts = new RecentPosts;
          $recentPosts->setContainerClasses('a-singlePostRightBox__list');
          $recentPosts->setElementClasses('a-singlePostRightBox__item');
          $recentPosts->setElementClasses('a-singlePostRightBox__item');
          $recentPosts->setItemsNumber(5);
          $recentPosts->init();
          ?>
      <!-- .m-knowledgeHubCategory -->
      </div>

      <?php resourcesSideBox() ?>
    <!-- .m-singlePostRight -->
    </div>
  <!-- .m-singlePostContent -->
  </div>
<!-- .o-singlePost -->
</div>
<?php
get_footer();
?>
