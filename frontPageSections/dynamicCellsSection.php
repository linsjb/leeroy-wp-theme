<?php
echo '<div class="container m-indexSectionDynamicCellsContent">';

if(!$titleUsed) {
  $title->init();
}
$titleUsed = true;

dynamicCells();

echo '</div>'; // .container