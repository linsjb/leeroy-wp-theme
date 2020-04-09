<?php
$textSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutTextSecPref', 'backgroundColor', null, true);
$aboutTextColor = acfButtonGroup('textColor', 'acfAboutTextPref', 'color', null, true);
$aboutTextSize = acfButtonGroup('fontSize', 'acfAboutTextPref', 'size', null, true);

$aboutText = new AcfText;
$aboutText->useSubfield();

// Language control
if(get_field('acfAboutSecLang')) {
  switch($_COOKIE['language']) {
    case get_field('acfLangOptPrimLang', 'option')['code']:
      $aboutText->setObject('acfAboutTextContPrimLang');
    break;
    
    case get_field('acfLangOptSecLang', 'option')['code']:
      $aboutText->setObject('acfAboutTextContSecLang');
    break;
    
    default:
    $aboutText->setObject('acfAboutTextContPrimLang');
  break;
}
} else {
  $aboutText->setObject('acfAboutTextContPrimLang');
}

$aboutText->setElementType('div');

$aboutText->setClasses('container m-aboutPageContent ' . $aboutTextColor .  ' ' . $aboutTextSize);

echo '<div class="o-aboutPage col-xs-24 ' . $textSectionBackgroundColor . '">';
  $aboutText->init();
echo '</div>'; // .o.aboutPage
