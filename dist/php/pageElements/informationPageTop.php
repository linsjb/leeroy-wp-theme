<?php
/*
* Description: We need to seperate the information top (header) from the content.
* This because we need the top part for the blog index.
* Author: Linus Sjöbro
*/
function informationPageTop() {
  $grid = $GLOBALS["grid"];

  $title = new wpContent;
  $title->title();
  $title->useBreakpoint();
  $title->setElementType('h1');
  $title->setClasses('a-informationPage__header');

  $slogan = new AcfText;
  $slogan->setObject('acfInfoPageSlogan');
  $slogan->setClasses('a-informationPage__slogan');
  $slogan->setElementType('p');
?>

  <div class="o-informationPageTop<?= $grid->width(100) ?>" style="background-color: <?php the_field('acfPageBackgroundColor'); ?>">
    <?php pageBackgroundType(); ?>
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
