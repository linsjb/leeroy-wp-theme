<?php
$textSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutTextSecPref', 'backgroundColor', null, true);

if(get_sub_field('acfAboutTextTitle')['title']) {
  $textSectionTitle = new AcfText;
  $textSectionTitle->useSubfield();
  $textSectionTitle->setObject('acfAboutTextTitle', 'title');
  $textSectionTitle->setElementType('h3');
  
  $textTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutTextTitle', 'alignment', null, true);
  $textTitleTextColor = acfButtonGroup('textColor', 'acfAboutTextTitle', 'color', null, true);
  
  $textSectionTitle->setClasses($textTitleAlignment . ' ' . $textTitleTextColor);
}

if(get_sub_field('acfAboutTextPref')['centerInMobile']) {
  $centerInMobileClass = '-mobileCenterAlignment';
} else {
  $centerInMobileClass = '';
}

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

$aboutText->setClasses(
  'm-aboutPageContent ' .
  $aboutTextColor .  ' ' .
  $aboutTextSize .  ' ' .
  $centerInMobileClass
);?>

<div class="o-aboutPage col-xs-24 <?= $textSectionBackgroundColor ?>">
  <div class="container">
    <?php if(get_sub_field('acfAboutTextTitle')['title']) {
      $textSectionTitle->init();
    }
    $aboutText->init(); ?>
  </div>
</div>
