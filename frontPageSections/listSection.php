<?php
echo '<div class="container m-indexSectionList">';
if(!$titleUsed) {
  $title->init();
}
$titleUsed = true;

textList('-indexLineHeight');

echo '</div>'; // .m-indexSectionList