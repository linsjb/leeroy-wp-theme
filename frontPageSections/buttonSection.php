<?php
$buttonAlignment = acfButtonGroup('textAlignment', 'acfIndSecBtnPref', 'alignment', null, true);
$buttonColor = acfButtonGroup('buttonColor', 'acfIndSecBtnPref', 'color', null, true);

if(get_field('acfIndSecSecLang')) {
  switch($_COOKIE['language']) {
    case get_field('acfLangOptPrimLang', 'option')['code']:
      $buttonText = get_sub_field('acfIndSecBtnPref')['primLangBtn'];
      break;

    case get_field('acfLangOptSecLang', 'option')['code']:
      $buttonText = get_sub_field('acfIndSecBtnPref')['secLangBtn'];
      break;

    default:
      $buttonText = get_sub_field('acfIndSecBtnPref')['primLangBtn'];
      break;
  }
} else {

  $buttonText = get_sub_field('acfIndSecBtnPref')['primLangBtn'];
}

echo '
  <div class="col-xs-24 m-indexSectionButton ' . $buttonAlignment . '">
    <div class="container">
      <a href="' . get_sub_field('acfIndSecBtnPref')['link'] . '" class ="a-btn ' . $buttonColor . '"/>'
      . $buttonText .'
      </a>
    </div>
  </div>
';