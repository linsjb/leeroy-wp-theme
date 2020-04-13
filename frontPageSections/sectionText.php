<?php
$content = new AcfText;
$content->useSubfield();

// Language control
if(get_field('acfIndSecSecLang')) {
  switch($_COOKIE['language']) {
    case get_field('acfLangOptPrimLang', 'option')['code']:
      $content->setObject('acfIndSecPrimLangTextCont');
      break;

    case get_field('acfLangOptSecLang', 'option')['code']:
      $content->setObject('acfIndSecSecLangTextCont');
      break;

    default:
      $content->setObject('acfIndSecPrimLangTextCont');
      break;
  }
} else {
  $content->setObject('acfIndSecPrimLangTextCont');
}
$content->setElementType('div');

$contentFontSize = acfButtonGroup('fontSize', 'acfIndSecTextPref', 'size', null, true);
$contentTextColor = acfButtonGroup('textColor', 'acfIndSecTextPref', 'color', null, true);
$content->setClasses($contentFontSize . ' ' . $contentTextColor);

echo '<div class="col-xs-24 m-indexSectionContentText">';
  echo '<div class="container">';
    if(!$titleUsed) {
      $title->init();
    }
    $titleUsed = true;
    $content->init();
  echo '</div>';
echo '</div>';