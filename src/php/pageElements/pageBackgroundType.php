<?php
/*
* Description: On all sections at index we can choose either a background image or a background color.
* This function remove the Don't Repeat Yourself in the index-section files.
* When using this function we still need to define the background color for the section element in the section file itselfe.
* the background color style set needs to be done directly in the div-element and not in css.
* Author: Linus Sjöbro
*/

function pageBackgroundType($pageType = null) {
  $backgroundImage = ' ';

  if($pageType == 'postsPage') {
    $backgroundType = get_field('acfPageBackgroundType', get_option('page_for_posts'));
    $backgroundColor = acfButtonGroup('backgroundColor', 'acfPageBackgroundColor', null, 'page_for_posts');
  } else {
    $backgroundType = get_field('acfPageBackgroundType');
    $backgroundColor = acfButtonGroup('backgroundColor', 'acfPageBackgroundColor');
  }

  // What kind of background is set for the page
  if($backgroundType == 'image') {
    $backgroundImageUrl = new AcfImage;
    $backgroundImageUrl->setSize('large');

    // If the page is home of posts page (blog index)
    if($pageType == 'postsPage')
      $backgroundImageUrl->usePostsPage();

    $backgroundImageUrl->setObject('acfPageBackgroundImage');

    return 'style="background: url(' . $backgroundImageUrl->init() . '); background-position: 50% 50%; background-repeat: no-repeat; background-size: cover;"';
  } else {
    return 'class="' . $backgroundColor . '"';
  }
}
