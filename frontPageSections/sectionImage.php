<?php
$desktopImage = new AcfImage;
$desktopImage->useSubfield();
$desktopImage->setObject('acfIndSecDesktopImg');
$desktopImage->useElement();
$desktopImage->setClasses('col-xs-16 col-xs-offset-4 hidden-xs');

echo '<div class="container">';
  if(!$titleUsed) {
    $title->init();
  }
  $titleUsed = true;
  $desktopImage->init();

  if(get_sub_field('acfIndSecMobImg')) {
    $mobileImage = new AcfImage;
    $mobileImage->useSubfield();
    $mobileImage->setObject('acfIndSecMobileImg');
    $mobileImage->useElement();
    $mobileImage->setClasses('a-indexSectionMobile__image col-xs-24 hidden-sm hidden-md hidden-lg');
    $mobileImage->init();
  }
echo '</div>';