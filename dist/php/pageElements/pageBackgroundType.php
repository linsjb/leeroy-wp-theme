<?php
/*
* Description: On all sections at index we can choose either a background image or a background color.
* This function remove the Don't Repeat Yourself in the index-section files.
* When using this function we still need to define the background color for the section element in the section file itselfe.
* the background color style set needs to be done directly in the div-element and not in css.
* Author: Linus Sjöbro
*/
function pageBackgroundType() {
  $grid = $GLOBALS["grid"];
  if(get_field('acfPageBackgroundType') == 'image'):
    $backgroundImage = new AcfImage;
    $backgroundImage->setObject('acfPageBackgroundImage');
    $backgroundImage->useElement();
    $backgroundImage->setClasses('m-pageSection__image' . $grid->width(100));
    $backgroundImage->init();
    if(get_field('acfPageImageFade')):
?>
      <div
        class="m-pageImageFader<?= $grid->width(100) ?>"
        style="background-color: <?php the_field('acfPageFadeColor') ?>; opacity: <?php the_field('acfPageFadeOpacity') ?>;">
      </div>
<?php
    endif;
  endif;
}
?>
