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

    switch(get_field('acfPageBackgroundColor', get_option('page_for_posts'))) {
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

  } else {
    $backgroundType = get_field('acfPageBackgroundType');
    switch(get_field('acfPageBackgroundColor')) {
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
  }

  // What kind of background is set for the page
  if($backgroundType == 'image') {
    $backgroundImageUrl = new AcfImage;
    $backgroundImageUrl->setSize('large');

    // If the page is home of posts page (blog index)
    if($pageType == 'postsPage')
      $backgroundImageUrl->usePostsPage();

    $backgroundImageUrl->setObject('acfPageBackgroundImage');

    $backgroundImage = 'url(' . $backgroundImageUrl->init() . '); background-position: 50% 50%; background-repeat: no-repeat; background-size: cover';
  } else {
    $backgroundImage =  $backgroundColor;
  }

  return 'background: ' . $backgroundImage . ';';
}
