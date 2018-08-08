<?php
get_header();
?>
<script type="text/javascript">
  let pageLocation = 'index';
</script>
<?php
$args = array(
  'post_type'       => 'sm_indexsections',
  'posts_per_page'  => 0
);
$query = new WP_Query($args);
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();
?>
    <div  class="o-indexSection col-xs-24 <?= acfButtonGroup('backgroundColor', 'acfIndSecBackground', 'color')?>">
      <?php

      switch($_COOKIE['language']) {
        case 'en':
          if(get_field('acfTitlePref')['titleEng'] =='') {
            $title = new wpContent;
            $title->setContent('title');
          } else {
            $title = new AcfText;
            $title->setObject('acfTitlePref', 'titleEng');
          }
          break;

        case 'sv':
          $title = new wpContent;
          $title->setContent('title');
          break;

        default:
          $title = new wpContent;
          $title->setContent('title');
          break;
      }
      $titleAlignment = acfButtonGroup('textAlignment', 'acfTitlePref', 'alignment');
      $titleColor = acfButtonGroup('textColor', 'acfTitlePref', 'color');
      $titleUsed = false;

      if(have_rows('acfIndCont')) {
        while(have_rows('acfIndCont')) {
          the_row();

          // Set title element type and class depending on content type.
          if(get_row_layout() == 'acfIndSecTopCont') {
            $title->setElementType('h1');
            $title->setClasses('o-indexSectionContent__topTitle ' . $titleAlignment . ' ' . $titleColor);
          } else {
            $title->setElementType('h3');
            $title->setClasses('o-indexSectionContent__title ' . $titleAlignment . ' ' . $titleColor);
          }

          switch(get_row_layout()) {
            // Top content
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecTopCont':
              $contentImage = new AcfImage;
              $contentImage->useSubfield();
              $contentImage->setObject('acfIndSecTopContImg', 'image');
              $contentImage->setSize('large');

              $overlappingImage = new AcfImage;
              $overlappingImage->useSubfield();
              $overlappingImage->setObject('acfIndSecTopContOverImg', 'image');
              $overlappingImage->setSize('large');
              $overlappingImage->useElement();
              $overlappingImage->setClasses('m-indexSectionTopContent__image col-xs-24 col-sm-20 col-sm-offset-2');

              $sectionImageTintOpacity = acfButtonGroup('opacity', 'acfIndSecTopContImg', 'tintOpacity', null, true);
              $sectionImageTintColor = acfButtonGroup('backgroundColor', 'acfIndSecTopContImg', 'tintColor', null, true);

              echo '<div class="m-topIndexSection">';
                echo '<div class="blue m-topIndexSection__image col-xs-24" style="background: url(' . $contentImage->init() . '); background-position: 50% 50%; background-repeat: no-repeat; background-size: cover;">';
                  if(get_sub_field('acfIndSecTopContImg')['tintImage']) {
                    echo '<div class="col-xs-24 a-elementTint ' . $sectionImageTintOpacity . ' ' . $sectionImageTintColor .'"></div>';
                  }
                echo '</div>'; // .m-topIndexSection__image

                // Overlaping element
                echo '<div class="a-topIndexSectionContent col-xs-24">';
                  echo '<div class="container">';
                    if(!$titleUsed) {
                      $title->init();
                    }
                    $titleUsed = true;

                    if(get_sub_field('acfIndSecTopContTag')['useTagline']) {
                      $taglineAlignment = acfButtonGroup('textAlignment', 'acfIndSecTopContTag', 'alignment', null, true);
                      $taglineColor = acfButtonGroup('textColor', 'acfIndSecTopContTag', 'color', null, true);

                      echo '<h3 class="a-indexSectionTopContent__tagline ' . $taglineAlignment . ' ' . $taglineColor . '">';
                        echo get_bloginfo('description');
                      echo '</h3>';
                    }

                    $overlappingImage->init();
                  echo '</div>'; //.container
                echo '</div>';// .a-topIndexSectionContent
              echo '</div>';// .m-topIndexSection
              break;

            // Section text
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecText':
              $content = new AcfText;
              $content->useSubfield();

              // Language control
              if(get_field('acfIndSecSecLang')) {
                switch($_COOKIE['language']) {
                  case 'en':
                    $content->setObject('acfIndSecTextFieldEng');
                    break;

                  case 'sv':
                    $content->setObject('acfIndSecTextFieldSwe');
                    break;

                  default:
                    $content->setObject('acfIndSecTextFieldSwe');
                    break;
                }
              } else {
                $content->setObject('acfIndSecTextFieldSwe');
              }
              $content->setElementType('div');

              $contentFontSize = acfButtonGroup('fontSize', 'acfIndSecTextPref', 'size', null, true);
              $contentTextColor = acfButtonGroup('textColor', 'acfIndSecTextPref', 'color', null, true);
              $content->setClasses('container m-indexSectionContentText ' . $contentFontSize .  ' ' . $contentTextColor);

              if(!$titleUsed) {
                $title->init();
              }
              $titleUsed = true;
              $content->init();

              break;

            // Section image
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecImage':
              $desktopImage = new AcfImage;
              $desktopImage->useSubfield();
              $desktopImage->setObject('acfIndSecDesktopImg');
              $desktopImage->useElement();
              $desktopImage->setClasses('col-xs-16 col-xs-offset-4 hidden-xs');

              echo '<div class="container">';
                if(!$titleUsed) {
                  $title->init();
                }
                $titleUsed = true;
                $desktopImage->init();

                if(get_sub_field('acfIndSecMobImg')) {
                  $mobileImage = new AcfImage;
                  $mobileImage->useSubfield();
                  $mobileImage->setObject('acfIndSecMobileImg');
                  $mobileImage->useElement();
                  $mobileImage->setClasses('a-indexSectionMobile__image col-xs-24 hidden-sm hidden-md hidden-lg');
                  $mobileImage->init();
                }
              echo '</div>';
              break;

            // Contact form
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecContactForm':
              echo '<div class="container">';
                if(!$titleUsed) {
                  $title->init();
                }
                $titleUsed = true;

                echo '<div class="o-contactFormContent col-xs-24 col-sm-19">';
                  echo do_shortcode(get_sub_field('acfIndSecContCode'));
                echo '</div>'; // .o-contactFormContent

                echo '<div class="o-contactFormIcon col-xs-24 col-sm-5">';
                  $contactIcon = new AcfImage;
                  $contactIcon->useSubfield();
                  $contactIcon->setObject('acfIndSecContIcon');
                  $contactIcon->useElement();
                  $contactIcon->setClasses('a-contactForm__icon');
                  $contactIcon->init();
                echo '</div>'; // .o-contactFormIcon
              echo '</div>'; // .container
              break;

            // Knowledgehub grid
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecBlogPosts':
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
              break;

            // Subtitle
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecSubTitle':
              $subtitle = new AcfText;
              $subtitle->useSubfield();

              // Language control
              if(get_field('acfIndSecSecLang')) {
                switch($_COOKIE['language']) {
                  case 'en':
                    $subtitle->setObject('acfIndSecSubTitleTextEng');
                    break;

                  case 'sv':
                    $subtitle->setObject('acfIndSecSubTitleTextSwe');
                    break;

                  default:
                    $subtitle->setObject('acfIndSecSubTitleTextSwe');
                    break;
                }
              } else {
                $subtitle->setObject('acfIndSecSubTitleTextSwe');
              }

              $subtitle->setElementType(acfButtonGroup('titleType', 'acfIndSecSubTitlePref', 'size', null, true));

              $subtitleAlignment = acfButtonGroup('textAlignment', 'acfIndSecSubTitlePref', 'alignment', null, true);
              $subtitleColor = acfButtonGroup('textColor', 'acfIndSecSubTitlePref', 'color', null, true);

              $subtitle->setClasses($subtitleAlignment . ' ' . $subtitleColor);
              echo '<div class="container m-indexSectionSubtitleContent">';
                $subtitle->init();
              echo '</div>';
              break;

            // Dynamic cell's
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecDynCells':
              echo '<div class="container m-indexSectionDynamicCellsContent">';

                if(!$titleUsed) {
                  $title->init();
                }
                $titleUsed = true;

                dynamicCells();

              echo '</div>'; // .container
              break;

            // Button
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecBtn':
              $buttonAlignment = acfButtonGroup('textAlignment', 'acfIndSecBtnPref', 'alignment', null, true);
              $buttonColor = acfButtonGroup('buttonColor', 'acfIndSecBtnPref', 'color', null, true);

              if(get_field('acfIndSecSecLang')) {
                switch($_COOKIE['language']) {
                  case 'en':
                    $buttonText = get_sub_field('acfIndSecBtnPref')['nameEng'];
                    break;

                  case 'sv':
                    $buttonText = get_sub_field('acfIndSecBtnPref')['nameSwe'];
                    break;

                  default:
                    $buttonText = get_sub_field('acfIndSecBtnPref')['nameSwe'];
                    break;
                }
              } else {

                $buttonText = get_sub_field('acfIndSecBtnPref')['nameSwe'];
              }

              echo '
                <div class="container m-indexSectionButton ' . $buttonAlignment . '">
                  <a href="' . get_sub_field('acfIndSecBtnPref')['link'] . '" class ="a-btn ' . $buttonColor . '"/>'
                  . $buttonText .'
                  </a>
                </div>
              ';
              break;

            // List
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecList':
              echo '<div class="container m-indexSectionList">';
                if(!$titleUsed) {
                  $title->init();
                }
                $titleUsed = true;

                textList('-indexLineHeight');

              echo '</div>'; // .m-indexSectionList
              break;
          }
        }
      }
      ?>
    <!-- .o-indexSection -->
    </div>

<?php
  endwhile; // while($query->have_posts())
  wp_reset_postdata();
endif; //if($query->have_posts())
get_footer();
?>
