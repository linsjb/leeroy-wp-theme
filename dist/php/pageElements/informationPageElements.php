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

  switch(get_field('acfInfPageContentClrs')['backgroundColor']) {
    case 'black':
      $backgroundColor = '#2F2F2F';
      break;

    case 'purple':
      $backgroundColor = '#442D5E';
      break;

    case 'white':
      $backgroundColor = '#FDFDFD';
      break;

    case 'blue':
      $backgroundColor = '#0B4F6C';
      break;

    case 'gold':
      $backgroundColor = '#C9AD74';
      break;

    default:
      $backgroundColor = '#2F2F2F';
      break;
  }

  switch(get_field('acfInfPageContentClrs')['textColor']) {
    case 'black':
      $textColor = '#2F2F2F';
      break;

    case 'purple':
      $textColor = '#442D5E';
      break;

    case 'white':
      $textColor = '#FDFDFD';
      break;

    case 'blue':
      $textColor = '#0B4F6C';
      break;

    case 'gold':
      $textColor = '#C9AD74';
      break;

    default:
      $textColor = '#2F2F2F';
      break;
  }

  $content = get_field('acfInfPageContent');

  informationPageTop();
  ?>
  <div class="o-informationPageBottom col-xs-100" style="background-color: <?= $backgroundColor ?>; color: <?= $textColor ?>;">
    <div class="container">
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
