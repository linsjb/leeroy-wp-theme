<?php
get_header();
$args = array(
  'post_type'     => 'sm_indexsections',
  'posts_per_page' => 20
);
$query = new WP_Query($args);
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();

    // Alignment of post title
    switch(get_field('acfIndSecTitlePref')['alignment']) {
      case 'left':
        $titleAlignment = 'a-indexSectionContent__title--left';
        break;

      case 'center':
        $titleAlignment = 'a-indexSectionContent__title--center';
        break;

      case 'right':
        $titleAlignment = 'a-indexSectionContent__title--right';
        break;
    }

    // color of post title
    switch(get_field('acfIndSecTitlePref')['color']) {
      case 'black':
        $titleColor = 'a-textColor--black';
        break;

      case 'purple':
        $titleColor = 'a-textColor--purple';
        break;

      case 'white':
        $titleColor = 'a-textColor--white';
        break;

      case 'blue':
        $titleColor = 'a-textColor--blue';
        break;

      case 'gold':
        $titleColor = 'a-textColor--gold';
        break;

      default:
        $titleColor = 'a-textColor--black';
        break;
    }

    // Color of content text
    switch(get_field('acfIndSecContPref')['color']) {
      case 'black':
        $contentTextColor = 'a-textColor--black';
        break;

      case 'purple':
        $contentTextColor = 'a-textColor--purple';
        break;

      case 'white':
        $contentTextColor = 'a-textColor--white';
        break;

      case 'blue':
        $contentTextColor = 'a-textColor--blue';
        break;

      case 'gold':
        $contentTextColor = 'a-textColor--gold';
        break;

      default:
        $contentTextColor = 'a-textColor--black';
        break;
    }



    $title = new wpContent;
    $title->setContent('title');

    // Decide what class the section parent element going to have
    if(get_field('acfIndSecContType') == 'topPage') {
      $sectionParentClass   = 'o-indexSectionTop';
      $sectionContentClass  = 'o-indexSectionTopContent';
    } else {
      $sectionParentClass   = 'o-indexSection';
      $sectionContentClass  ='o-indexSectionContent';
    }
?>

    <div class="<?= $sectionParentClass . ' ' . $contentTextColor; ?> col-xs-100" style="<?= pageBackgroundType(); ?>">
        <?php pageBackgroundTone() ?>
        <div class="container <?= $sectionContentClass ?>">
          <?php
          // If the content is top content
          if(get_field('acfIndSecContType') == 'topPage') {
            $title->setElementType('h1');
            $title->setClasses('a-indexSectionContent__topTitle col-xs-100 col-sm-80 col-md-60');
            $title->init();

            $topContent = new AcfText;
            $topContent->useBreakpoint();
            $topContent->setObject('acfIndSecTopContent');
            $topContent->setElementType('div');
            $topContent->setClasses('m-indexSectionTopContent col-xs-100 col-sm-80 col-md-60');
            $topContent->init();

            // If the content is content. I.e everything accept top content
          } else {
            $title->setElementType('h2');
            $title->setClasses('a-indexSectionContent__title ' . $titleAlignment . ' ' . $titleColor);
            $title->init();
            if(have_rows('acfIndSecContent')) {
              while(have_rows('acfIndSecContent')) {
                the_row();

                switch(get_row_layout()) {
                  case 'acfIndSecText':
                  $content = new AcfText;
                  $content->useSubfield();
                  $content->setObject('acfIndSecTextField');
                  $content->setElementType('div');
                  $content->setClasses('m-indexSectionContentText ');
                  $content->init();
                  break;

                  case 'acfIndSecImage':
                    $desktopImage = new AcfImage;
                    $desktopImage->useSubfield();
                    $desktopImage->setObject('acfIndSecDesktopImg');
                    $desktopImage->useElement();
                    $desktopImage->setClasses('a-indexSectionContent__image col-xs-100 hidden-xs');

                    $desktopImage->init();

                    if(get_sub_field('acfIndSecMobImg')) {
                      $mobileImage = new AcfImage;
                      $mobileImage->useSubfield();
                      $mobileImage->setObject('acfIndSecMobileImg');
                      $mobileImage->useElement();
                      $mobileImage->setClasses('a-indexSectionMobile__image col-xs-100 hidden-sm hidden-md hidden-lg');
                      $mobileImage->init();
                    }
                    break;

                  case 'acfIndSecCellItems':
                    indexSectionItems();
                    break;

                  case 'acfIndSecContactForm':
                    echo do_shortcode(get_sub_field('acfIndSecContCode'));
                    break;

                  case 'acfIndSecBlogPosts':
                    $postsArgs = array(
                      'numberposts' => -1,
                      'post_type'  => 'post',
                      'meta_key' => 'acfKnowHubPostCaseShow',
                      'meta_value' => true
                    );
                    $postsQuery = new WP_Query($postsArgs);
                    if($postsQuery->have_posts()) {
                      echo '<div class="o-knowledgeHubGrid col-xs-100">';
                      while($postsQuery->have_posts()) {
                        $postsQuery->the_post();
                        knowledgeHubGrid();
                      }
                      echo '</div>'; // .KnowledgeHubGrid
                    }
                    wp_reset_postdata();
                    break;
                }
              }
            }
          }
          ?>
        <!-- .m-indexSectionTwoTopContent -->
        </div>
    <!-- .o-indexSectionTwoTop -->
    </div>

<?php
  endwhile;
endif;
wp_reset_postdata();
get_footer();
?>
