<?php
function textList($lineHeightClass) {
  $useDecorator = false;

  $listAlignment = acfButtonGroup('textAlignment', 'acfListPref', 'alignment', null, true);
  $listFontSize = acfButtonGroup('fontSize', 'acfListPref', 'size', null, true);
  $listTextColor = acfButtonGroup('textColor', 'acfIListPref', 'textColor', null, true);

  if(get_sub_field('acfListDecoration')['decoration']) {
    $listDecorator = new AcfImage;
    $listDecorator->useSubfield();
    $listDecorator->setObject('acfListDecoration', 'icon');
    $listDecorator->useElement();
    $listDecorator->setClasses('a-listContent__decoration');

    $useDecorator = true;
  }

  if(have_rows('acfListCont')) {
    echo '<ul class="a-listContent ' . $listAlignment . ' ' . $listFontSize . ' ' . $listTextColor . ' ' . $lineHeightClass . '">';
    while(have_rows('acfListCont')) {
      the_row();
        echo '<li class="a-listContent__item">';
          if($useDecorator) {
            $listDecorator->init();
          }

          if(get_field('acfListSecLang')) {
            switch($_COOKIE['language']) {
              case get_field('acfLangOptPrimLang', 'option')['code']:
                the_sub_field('primLangRow');
                break;

              case get_field('acfLangOptSecLang', 'option')['code']:
                the_sub_field('secLangRow');
                break;

              default:
                the_sub_field('primLangRow');
                break;
            }
          } else {
            the_sub_field('primLangRow');
          }

        echo '</li>';
    }
    echo '</ul>'; // .a-listContent
  }
}
?>
