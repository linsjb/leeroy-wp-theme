<?php
/*
* Description: We need to seperate the information top (header) from the content.
* This because we need the top part for the blog index.
* Author: Linus Sjöbro
*/
function informationPageTop($pageType = null) {

  $slogan = new AcfText;

  switch($_COOKIE['language']) {
    case get_field('acfLangOptPrimLang', 'option')['code']:
      $title = new wpContent;
      $title->setContent('title');

      if(get_field('acfInfoPagePrimLangSlogan') == '') {
        $slogan->setObject('acfInfoPageSecLangSlogan');
      } else {
        $slogan->setObject('acfInfoPagePrimLangSlogan');
      }
      break;

    case get_field('acfLangOptSecLang', 'option')['code']:
      $title = new AcfText;
      $title->setObject('acfInfoPageSecLangTitle');

      if(get_field('acfInfoPageSecLangSlogan') == '') {
        $slogan->setObject('acfInfoPagePrimLangSlogan');
      } else {
        $slogan->setObject('acfInfoPageSecLangSlogan');
      }
      break;

    default:
      $title = new wpContent;
      $title->setContent('title');

      if(get_field('acfInfoPagePrimLangSlogan') == '') {
        $slogan->setObject('acfInfoPageSecLangSlogan');
      } else {
        $slogan->setObject('acfInfoPagePrimLangSlogan');
      }
      break;
  }

  $title->setElementType('h1');
  $title->setClasses('a-informationPage__title');

  $slogan->setClasses('a-informationPage__slogan');
  $slogan->setElementType('p');

  if(is_home() || $pageType == 'postsPage') {
    $slogan->usePostsPage();
    $title->usePostsPage();
  }
?>
    <div id="topElement" class="o-informationPageTop col-xs-24" <?= pageBackgroundType($pageType); ?>>
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
