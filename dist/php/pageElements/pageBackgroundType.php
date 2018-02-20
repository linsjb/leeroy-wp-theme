<?php
/*
* Description: On all sections at index we can choose either a background image or a background color.
* This function remove the Don't Repeat Yourself in the index-section files.
* When using this function we still need to define the background color for the section element in the section file itselfe.
* the background color style set needs to be done directly in the div-element and not in css.
* Author: Linus Sjöbro
*/

function pageBackgroundType() {
  if(is_home()) {
    $backgroundColor    = get_field('acfPageFadeColor',       get_option('page_for_posts'));
    $backgroundOpacity  = get_field('acfPageFadeOpacity',     get_option('page_for_posts'));
    $backgroundType     = get_field('acfPageBackgroundType',  get_option('page_for_posts'));
    $opacityCheck       = get_field('acfPageImageFade',       get_option('page_for_posts'));
  } else {
    $backgroundColor    = get_field('acfPageFadeColor');
    $backgroundOpacity  = get_field('acfPageFadeOpacity');
    $backgroundType     = get_field('acfPageBackgroundType');
    $opacityCheck       = get_field('acfPageImageFade');
  }

  if($backgroundType == 'image'):
    $backgroundImage = new AcfImage;

    if(is_home())
      $backgroundImage->usePostsPage();

    $backgroundImage->setObject('acfPageBackgroundImage');
    $backgroundImage->useElement();
    $backgroundImage->setClasses('m-pageSection__image col-xs-100 col-sm-100 col-md-100 col-lg-100');
    $backgroundImage->init();

    if($opacityCheck):
?>
      <div
        class="m-pageImageFader col-xs-100 col-sm-100 col-md-100 col-lg-100"
        style="background-color: <?= $backgroundColor ?>; opacity: <?= $backgroundOpacity ?>;">
      </div>
<?php
    endif;
  endif;
}
?>
