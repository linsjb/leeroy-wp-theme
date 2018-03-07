<?php
function pageBackgroundTone($pageType = null) {
  if(is_home() || $pageType == 'postsPage') {
    $backgroundType          = get_field('acfPageBackgroundType',       get_option('page_for_posts'));
    $toneCheck               = get_field('acfPageBackgroundImageTone',  get_option('page_for_posts'));
    $imageToneColor          = get_field('acfPageToneColor',            get_option('page_for_posts'));
    $imageToneOpacity        = get_field('acfPageToneOpacity',          get_option('page_for_posts'));
  } else {
    $backgroundType          = get_field('acfPageBackgroundType');
    $toneCheck               = get_field('acfPageBackgroundImageTone');
    $imageToneColor          = get_field('acfPageToneColor');
    $imageToneOpacity        = get_field('acfPageToneOpacity');
  }

  if($backgroundType == 'image') {
    if($toneCheck) {
        echo '<div class="col-xs-100 m-pageImageToner" style="background-color:' . $imageToneColor . '; opacity:' . $imageToneOpacity . '"></div>';
    }
  }
}
