<?php
$formSectionTitle = new AcfText;
$formSectionTitle->useSubfield();

// Language control
if(get_field('acfAboutSecLang')) {
  switch($_COOKIE['language']) {
    case 'en':
      $formSectionTitle->setObject('acfAboutFormTitlePref', 'primLangTitle');
      break;

    case 'sv':
      $formSectionTitle->setObject('acfAboutFormTitlePref', 'secLangTitle');
      break;

    default:
      $formSectionTitle->setObject('acfAboutFormTitlePref', 'primLangTitle');
      break;
  }
} else {
  $formSectionTitle->setObject('acfAboutFormTitlePref', 'primLangTitle');
}

$formSectionTitle->setElementType('h3');

$formSectionTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutFormTitlePref', 'alignment', null, true);
$formSectionTitleTextColor = acfButtonGroup('textColor', 'acfAboutFormTitlePref', 'color', null, true);

$formSectionTitle->setClasses($formSectionTitleAlignment . ' ' . $formSectionTitleTextColor);

$formSectionSubheader = new AcfText;
$formSectionSubheader->useSubfield();
$formSectionSubheader->setObject('acfAboutFormTitlePref', 'subheader');
$formSectionSubheader->setElementType('h4');

$formSectionSubheaderColor = acfButtonGroup('textColor', 'acfAboutFormTitlePref', 'subheaderColor', null, true);
$formSectionSubheader->setClasses('a-aboutPageSection__subheader ' . $formSectionTitleAlignment . ' ' . $formSectionSubheaderColor . ' ');

$formSectionIcon = new AcfImage;
$formSectionIcon->useSubfield();
$formSectionIcon->setObject('acfAboutFormSecPref', 'icon');
$formSectionIcon->useElement();
$formSectionIcon->setClasses('a-contactForm__icon');

$formSectionShortcode = new AcfText;
$formSectionShortcode->useSubfield();
$formSectionShortcode->setObject('acfAboutFormShortcode');


$aboutSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutFormSecPref', 'backgroundColor', null, true);
echo '<div class="o-aboutPage col-xs-24 ' . $aboutSectionBackgroundColor . '" id="join-us">';
  echo '<div class="container o-aboutPageContent">';
    $formSectionTitle->init();
    $formSectionSubheader->init();
    

    echo '<div class="o-contactFormContent col-xs-24 col-sm-20">';
      echo do_shortcode($formSectionShortcode->init());
    echo '</div>';

    echo '<div class="o-contactFormIcon col-xs-24 col-sm-4">';
      $formSectionIcon->init();
    echo '</div>'; // .o-contactFormIcon
  echo '</div>'; // .o-aboutPageContent
echo '</div>'; // .o-aboutPage