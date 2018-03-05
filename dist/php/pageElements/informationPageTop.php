<?php
/*
* Description: We need to seperate the information top (header) from the content.
* This because we need the top part for the blog index.
* Author: Linus Sjöbro
*/
function informationPageTop($pageType = null) {
  $grid = $GLOBALS["grid"];

  $title = new wpContent;
  $title->setContent('title');
  $title->useBreakpoint();
  $title->setElementType('h1');
  $title->setClasses('a-informationPage__header');

  $slogan = new AcfText;
  $slogan->setObject('acfInfoPageSlogan');
  $slogan->setClasses('a-informationPage__slogan');
  $slogan->setElementType('p');

  if(is_home() || $pageType == 'postsPage') {
    $slogan->usePostsPage();
    $title->usePostsPage();
    $backgroundColor = get_field('acfPageBackgroundColor', get_option('page_for_posts'));
  } else {
    $backgroundColor = get_field('acfPageBackgroundColor');
  }
?>

  <div id="top" class="o-informationPageTop<?= $grid->width(100) ?>" style="background-color: <?= $backgroundColor ?>">
    <?php pageBackgroundType($pageType); ?>
    <div class="container m-informationPageTopContent">
      <?php
      $title->init();
      $slogan->init();
      ?>
    <!-- .m-informationPageTopContent -->
    </div>
  <!-- .o-informationPageTop -->
  </div>
<?php
}
?>
