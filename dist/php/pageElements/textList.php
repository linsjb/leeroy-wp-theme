<?php
function textList() {
  $useDecorator = false;

  $listAlignment = acfButtonGroup('textAlignment', 'acfListPref', 'alignment', null, true);
  $listFontSize = acfButtonGroup('fontSize', 'acfListPref', 'size', null, true);
  $listTextColor = acfButtonGroup('textColor', 'acfIListPref', 'textColor', null, true);

  if(get_sub_field('acfListPref')['listDecoration']) {
    $listDecorator = new AcfImage;
    $listDecorator->useSubfield();
    $listDecorator->setObject('acfListPref', 'decorationItem');
    $listDecorator->useElement();
    $listDecorator->setClasses('a-listContent__decoration');

    $useDecorator = true;
  }

  if(have_rows('acfListCont')) {
    echo '<ul class="a-listContent ' . $listAlignment . ' ' . $listFontSize . ' ' . $listTextColor .  '">';
    while(have_rows('acfListCont')) {
      the_row();
        echo '<li class="a-listContent__item">';
          if($useDecorator) {
            $listDecorator->init();
          }

          the_sub_field('text');
        echo '</li>';
    }
    echo '</ul>'; // .a-listContent
  }
}
?>
