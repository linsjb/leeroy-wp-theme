<?php
function pageBackgroundTone($pageType = null, $id = null) {
  if($pageType == 'postsPage') {
    $toneCheck               = get_field('acfTintImage',  get_option('page_for_posts'));
    $toneOpacity             = get_field('acfTintPref',   get_option('page_for_posts'))['opacity'];

    switch(get_field('acfTintPref', get_option('page_for_posts'))['color']) {
      case 'black':
        $toneColor = '#2F2F2F';
        break;

      case 'purple':
        $toneColor = '#442D5E';
        break;

      case 'white':
        $toneColor = '#FDFDFD';
        break;

      case 'blue':
        $toneColor = '#0B4F6C';
        break;

      case 'gold':
        $toneColor = '#C9AD74';
        break;

      default:
        $toneColor = '#2F2F2F';
        break;
    }
  } else {
    $toneCheck               = get_field('acfTintImage', $id);
    $toneOpacity             = get_field('acfTintPref', $id)['opacity'];

    switch(get_field('acfTintPref', $id)['color']) {
      case 'black':
        $toneColor = '#2F2F2F';
        break;

      case 'purple':
        $toneColor = '#442D5E';
        break;

      case 'white':
        $toneColor = '#FDFDFD';
        break;

      case 'blue':
        $toneColor = '#0B4F6C';
        break;

      case 'gold':
        $toneColor = '#C9AD74';
        break;

      default:
        $toneColor = '#2F2F2F';
        break;
    }
  }

  if($toneCheck) {
    echo '<div class="col-xs-24 a-elementTint" style="background-color:' . $toneColor . '; opacity:' . $toneOpacity . '"></div>';
  }
}
