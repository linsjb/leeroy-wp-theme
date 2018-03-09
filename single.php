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
      <div class="m-singlePostLeftColumn col-xs-10">
        <ul class="m-singlePostShareList">
          <!-- Facebook icon -->
          <li class="a-singlePostShareList__item">
            <a href="#" class="a-singlePostShare__link a-singlePostShare__facebook">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                <style type="text/css">
                  .svgCircle{fill:none;stroke-width:1.5;}
                </style>
                <g transform="translate(1 1)">
                  <path class="st0" d="M16,13.2v-1.9c0-0.5,0.4-0.9,1-0.9h1V8h-2c-1.7,0-3,1.3-3,2.8v2.3h-2v2.3h2V23h3v-7.5h2l1-2.3H16z"/>
                  <circle class="svgCircle" cx="15" cy="15" r="15"/>
                </g>
              </svg>
            </a>
          </li>

          <!-- Twitter icons -->
          <li class="a-singlePostShareList__item">
            <a href="#" class="a-singlePostShare__link a-singlePostShare__twitter">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                <style type="text/css">
                .svgCircle{fill:none;stroke-width:1.5;}
                </style>
                <g transform="translate(1 1)">
                  <path class="st0" d="M23,11.4c-0.6,0.2-1.2,0.4-1.8,0.5c0.6-0.4,1.1-1,1.4-1.7c-0.6,0.3-1.3,0.6-2,0.7c-0.6-0.6-1.4-1-2.2-1
                  c-1.7,0-3.1,1.4-3.1,3c0,0.2,0,0.5,0.1,0.7c-2.6-0.1-4.8-1.3-6.3-3.2c-0.3,0.5-0.4,1-0.4,1.5c0,1,0.5,2,1.4,2.5
                  c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.7,2.5,3c-0.3,0.1-0.5,0.1-0.8,0.1c-0.2,0-0.4,0-0.6-0.1c0.4,1.2,1.5,2.1,2.9,2.1
                  c-1,0.8-2.4,1.3-3.8,1.3c-0.3,0-0.5,0-0.7,0c1.4,0.9,3,1.4,4.7,1.4c5.7,0,8.8-4.6,8.8-8.6c0-0.1,0-0.3,0-0.4
                  C22.1,12.6,22.6,12,23,11.4z"/>
                  <circle class="svgCircle" cx="15" cy="15" r="15"/>
                </g>
              </svg>
            </a>
          </li>

          <!-- LinkedIn icon -->
          <li class="a-singlePostShareList__item">
            <a href="#" class="a-singlePostShare__link a-singlePostShare__linkedin">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                <style type="text/css">
                .svgCircle{fill:none;stroke-width:1.5;}
                </style>
                <g transform="translate(1 1)">
                  <rect x="9" y="13" class="st0" width="3" height="9"/>
                  <path class="st0" d="M19.8,13.1C19.8,13.1,19.8,13.1,19.8,13.1c-0.1,0-0.2,0-0.2-0.1c-0.2,0-0.3-0.1-0.5-0.1
                  c-1.7,0-2.8,1.2-3.1,1.7V13H13v9h2.9v-4.9c0,0,2.2-3.1,3.1-0.8c0,2,0,5.7,0,5.7H22v-6.1C22,14.6,21.1,13.4,19.8,13.1z"/>
                  <circle class="st0" cx="10.5" cy="10.5" r="1.5"/>
                  <circle class="svgCircle" cx="15" cy="15" r="15"/>
                </g>
              </svg>
            </a>
          </li>

          <!-- Google+ icon -->
          <li class="a-singlePostShareList__item">
            <a href="#" class="a-singlePostShare__link a-singlePostShare__google">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                <style type="text/css">
                .svgCircle{fill:none;stroke-width:1.5;}
                </style>
                <g transform="translate(1 1)">
                  <polygon class="st0" points="22.6,15.4 22.6,13 21.4,13 21.4,15.4 19,15.4 19,16.6 21.4,16.6 21.4,19 22.6,19 22.6,16.6 25,16.6
                  25,15.4 	"/>
                  <path class="st0" d="M12,14.4v2.2h3.4c-0.5,1.3-1.8,2.2-3.4,2.2c-2,0-3.6-1.5-3.6-3.3s1.6-3.3,3.6-3.3c0.9,0,1.7,0.3,2.3,0.8
                  l1.6-1.7C14.8,10.5,13.4,10,12,10c-3.3,0-6,2.5-6,5.5S8.7,21,12,21s6-2.5,6-5.5v-1.1H12z"/>
                  <circle class="svgCircle" cx="15" cy="15" r="15"/>
                </g>
              </svg>
            </a>
          </li>
        </ul>
      <!-- .m-singlePostLeftColumn -->
      </div>

      <div class="m-singlePostRightColumn col-xs-90">
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
