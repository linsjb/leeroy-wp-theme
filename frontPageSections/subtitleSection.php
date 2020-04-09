<?php
$subtitle = new AcfText;
$subtitle->useSubfield();

// Language control
if(get_field('acfIndSecSecLang')) {
  switch($_COOKIE['language']) {
    case get_field('acfLangOptPrimLang', 'option')['code']:
      $subtitle->setObject('acfIndSecPrimLangSubTitleText');
      break;

    case get_field('acfLangOptSecLang', 'option')['code']:
      $subtitle->setObject('acfIndSecSecLangSubTitleText');
      break;

    default:
      $subtitle->setObject('acfIndSecPrimLangSubTitleText');
      break;
  }
} else {
  $subtitle->setObject('acfIndSecPrimLangSubTitleText');
}

$subtitle->setElementType(acfButtonGroup('titleType', 'acfIndSecSubTitlePref', 'size', null, true));

$subtitleAlignment = acfButtonGroup('textAlignment', 'acfIndSecSubTitlePref', 'alignment', null, true);
$subtitleColor = acfButtonGroup('textColor', 'acfIndSecSubTitlePref', 'color', null, true);

$subtitle->setClasses($subtitleAlignment . ' ' . $subtitleColor);
echo '<div class="container m-indexSectionSubtitleContent">';
  $subtitle->init();
echo '</div>';