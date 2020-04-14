<?php
$dynamicCellsSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutDynCellsSecPref', 'backgroundColor', null, true);

if(get_sub_field('acfAboutDynCellsTitle')['title']) {
  $dynamicSectionTitle = new AcfText;
  $dynamicSectionTitle->useSubfield();
  $dynamicSectionTitle->setObject('acfAboutDynCellsTitle', 'title');
  $dynamicSectionTitle->setElementType('h3');
  
  $dynamicTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutDynCellsTitle', 'alignment', null, true);
  $dynamicTitleTextColor = acfButtonGroup('textColor', 'acfAboutDynCellsTitle', 'color', null, true);
  
  $dynamicSectionTitle->setClasses($dynamicTitleAlignment . ' ' . $dynamicTitleTextColor . ' ');
}
  
echo '<div class="o-aboutPage col-xs-24 ' . $dynamicCellsSectionBackgroundColor . '" id="about-leeroy">';
  echo '<div class="container">';
    if(get_sub_field('acfAboutDynCellsTitle')['title']) {
      $dynamicSectionTitle->init();
    }
    dynamicCells();
  echo '</div>';
echo '</div>';