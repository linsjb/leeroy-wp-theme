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
        case get_field('acfLangOptPrimLang', 'option')['code']:
          $title = new wpContent;
          $title->setContent('title');
          break;

        case get_field('acfLangOptSecLang', 'option')['code']:
          if(get_field('acfTitlePref')['secLangTitle'] =='') {
            $title = new wpContent;
            $title->setContent('title');
          } else {
            $title = new AcfText;
            $title->setObject('acfTitlePref', 'secLangTitle');
          }
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
              include 'frontPageSections/topContentSection.php';
              break;

            // Section text
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecText':
              include 'frontPageSections/sectionText.php';
              break;

            // Section image
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecImage':
              include 'frontPageSections/sectionImage.php';
              break;
            
            // Contact form
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecContactForm':
              include 'frontPageSections/contactForm.php';
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
              include 'frontPageSections/subtitleSection.php';
              break;

            // Dynamic cell's
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecDynCells':
              include 'frontPageSections/dynamicCellsSection.php';
              break;

            // List
            // -------------------------------------------------
            // -------------------------------------------------
            case 'acfIndSecList':
              include 'frontPageSections/listSection.php';
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
