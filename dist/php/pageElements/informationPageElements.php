<?php
/*
* Description: We need to split this code that's for info. pages.
* This is because of the about page that need's additional elements. So we avoid don't repeat yourself this way.
* Author: Linus Sjöbro
*/
function informationPageElements() {
  $title = new wpContent;
  $title->setContent('title');
  $title->useBreakpoint();
  $title->setElementType('h1');
  $title->setClasses('a-informationPage__header');

  $slogan = new AcfText;
  $slogan->setObject('acfInfoPageSlogan');
  $slogan->setClasses('a-informationPage__slogan');
  $slogan->setElementType('p');

  $content = get_field('acfInfPageContent');

  informationPageTop();
  ?>
  <div class="o-informationPageBottom col-xs-100" style="background-color: <?= get_field('acfInfPageContentClrs')['backgroundColor'] ?>; color: <?= get_field('acfInfPageContentClrs')['textColor'] ?>;">
    <div class="container o-informationPageBottomContent">
      <?php if($content['columns'] == 'one'): ?>
        <div class="m-informationPageBottomContent col-xs-100">
          <?= $content['leftContent'] ?>
        </div>

      <?php elseif($content['columns'] == 'two'): ?>
          <div class="m-informationPageColBottomContent col-xs-100 col-sm-50">
              <?= $content['leftContent'] ?>
          </div>

          <div class="m-informationPageColBottomContent col-xs-100 col-sm-50">
            <?= $content['rightContent'] ?>
          </div>
      <?php endif; ?>
    <!-- .m-informationPageBottomContent -->
    </div>
  <!-- .o-informationPageBottom -->
  </div>

<?php
}
?>
