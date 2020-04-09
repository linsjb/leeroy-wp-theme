<?php
$dynamicCellsSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutDynCellsSecPref', 'backgroundColor', null, true);

echo '<div class="o-aboutPage col-xs-24 ' . $dynamicCellsSectionBackgroundColor . '" id="about-leeroy">';
  echo '<div class="container">';
    dynamicCells();
  echo '</div>';
echo '</div>';