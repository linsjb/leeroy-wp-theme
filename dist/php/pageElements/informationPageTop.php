<?php
/*
* Description: We need to seperate the information top (header) from the content.
* This because we need the top part for the blog index.
* Author: Linus Sjöbro
*/
function informationPageTop($pageType = null) {
  $title = new wpContent;
  $title->setContent('title');
  $title->useBreakpoint();
  $title->setElementType('h1');
  $title->setClasses('a-informationPage__title');

  $slogan = new AcfText;
  $slogan->setObject('acfInfoPageSlogan');
  $slogan->setClasses('a-informationPage__slogan');
  $slogan->setElementType('p');

  if(is_home() || $pageType == 'postsPage') {
    $slogan->usePostsPage();
    $title->usePostsPage();
  }
?>
    <div id="topElement" class="o-informationPageTop col-xs-24" style="<?= pageBackgroundType($pageType); ?>">
      <?php pageBackgroundTone($pageType) ?>
      <div class="container m-informationPageTopContainer">
        <div class="a-informationPageTopContent">
          <?php
          $title->init();
          $slogan->init();
          ?>
          <!-- .a-informationPageTopContent -->
        </div>
        <!-- .m-informationPageTopContainer -->
      </div>
      <!-- .o-informationPageTop -->
    </div>
<?php
}
?>
