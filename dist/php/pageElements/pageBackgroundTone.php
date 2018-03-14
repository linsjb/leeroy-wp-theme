<?php
function pageBackgroundTone($pageType = null) {
  if($pageType == 'postsPage') {
    $toneCheck               = get_field('acfToneImage',            get_option('page_for_posts'));
    $toneOpacity             = get_field('acfTonePref',             get_option('page_for_posts'))['opacity'];

    switch(get_field('acfTonePref', get_option('page_for_posts'))['color']) {
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
    $toneCheck               = get_field('acfToneImage');
    $toneOpacity             = get_field('acfTonePref')['opacity'];

    switch(get_field('acfTonePref')['color']) {
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
    echo '<div class="col-xs-100 a-elementToner" style="background-color:' . $toneColor . '; opacity:' . $toneOpacity . '"></div>';
  }
}
