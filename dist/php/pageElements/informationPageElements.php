<?php
/*
* Description: We need to split this code that's for info. pages.
* This is because of the about page that need's additional elements. So we avoid don't repeat yourself this way.
* Author: Linus Sjöbro
*/
function informationPageElements() {
  $grid = $GLOBALS["grid"];

  $title = new wpContent;
  $title->title();
  $title->breakPoint();
  $title->setElementType('h1');
  $title->setClasses('a-informationPage__header');

  $slogan = new AcfText;
  $slogan->setObject('acfInfoPageSlogan');
  $slogan->setClasses('a-informationPage__slogan');
  $slogan->setElementType('p');
  ?>

  <div class="o-informationPage" <?= $grid->width(100) ?>>
    <div class="m-informationPageTop <?= $grid->width(100) ?>" style="background-color: <?php the_field('acfIndexSectionBackgroundColor'); ?>">
      <?php pageBackgroundType(); ?>

      <div class="container m-informationPageTopContent">
        <?php
        $title->init();
        $slogan->init();
        ?>
      <!-- .m-informationPageTopContent -->
      </div>
    <!-- .m-informationPageTop -->
    </div>

    <div class="m-informationPageBottom<?= $grid->width(100) ?>" style="background-color: <?php the_field('acfInfoPageContentBackground') ?>; color: <?php the_field('acfInfoPageTextColor')?>;">
      <div class="container">
        <?php if(get_field('acfInfoPageColumns') == 1): ?>
          <div class="m-informationPageBottomContent<?= $grid->width(100) ?>">
            <?php the_field('acfInfoPageLeftContent') ?>
          </div>

          <?php elseif(get_field('acfInfoPageColumns') == 2): ?>
            <div class="m-informationPageColBottomContent<?= $grid->width(50, 100) ?>">
                <?php the_field('acfInfoPageLeftContent') ?>
            </div>

            <div class="m-informationPageColBottomContent<?= $grid->width(50, 100) ?>">
              <?php the_field('acfInfoPageRightContent') ?>
            </div>
        <?php endif; ?>
      <!-- .m-informationPageBottomContent -->
      </div>
    <!-- .m-informationPageBottom -->
    </div>
  <!-- .o-informationPage -->
  </div>
<?php
}
?>
