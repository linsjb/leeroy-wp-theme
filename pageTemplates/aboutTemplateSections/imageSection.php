<?php
if(get_sub_field('acfAboutDynCellsTitle')['title']) {
  $imageSectionTitle = new AcfText;
  $imageSectionTitle->useSubfield();
  $imageSectionTitle->setObject('acfAboutImageTitlePref', 'title');
  $imageSectionTitle->setElementType();

  $imageSectionTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutImageTitlePref', 'alignment', null, true);
  $imageSectionTitleColor = acfButtonGroup('textColor', 'acfAboutImageTitlePref', 'color', null, true);

  $imageSectionTitle->setClasses($imageSectionTitleAlignment . ' ' . $imageSectionTitleColor);
}

echo '<div class="o-aboutPage col-xs-24" style="background-color:' . get_sub_field('acfAboutImageSectionPref')['backgroundColor'] . '">';
  echo '<div class="container o-aboutPageContent">';
    if(get_sub_field('acfAboutDynCellsTitle')['title']) {
      $imageSectionTitle->init();
    }
    
    $aboutDesktopImage = new AcfImage;
    $aboutDesktopImage->useSubfield();
    $aboutDesktopImage->setObject('acfAboutImageGroup', 'desktopImage');
    $aboutDesktopImage->useElement();

    if(get_sub_field('acfAboutImageGroup')['MobileImageCheck']) {
      $aboutDesktopImage->setClasses('a-aboutImage__desktopImage col-xs-24 hidden-xs');
      $aboutDesktopImage->init();

      $aboutMobileImage = new AcfImage;
      $aboutMobileImage->useSubfield();
      $aboutMobileImage->setObject('acfAboutImageGroup', 'mobileImage');
      $aboutMobileImage->useElement();
      $aboutMobileImage->setClasses('a-aboutImage__mobileImage col-xs-24 hidden-sm hidden-md hidden-lg');
      $aboutMobileImage->init();
    } else {
      $aboutDesktopImage->setClasses('a-aboutImage__desktopImage col-xs-24');
      $aboutDesktopImage->init();
    }
  echo '</div>'; // .o-aboutPageContent
echo '</div>'; // .o-aboutPage