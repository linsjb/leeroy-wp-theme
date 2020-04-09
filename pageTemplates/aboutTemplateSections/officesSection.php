<?php
$officeIcon = new AcfImage;
$officeIcon->useSubfield();
$officeIcon->setObject('acfAboutOfficesPref', 'icon');
$officeIcon->useElement();
$officeIcon->setClasses('a-aboutOffices__icon');

$officesSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutOfficesSecPref', 'backgroundColor', null, true);
$officeSectionTextColor = acfButtonGroup('textColor', 'acfAboutOfficesPref', 'color', null, true);
echo '<div class="o-aboutPage col-xs-24 ' . $officesSectionBackgroundColor . '">';
  echo '<div class="container o-aboutPageContent">';

    echo '<div class="m-aboutOfficesIcon col-xs-4">';
     $officeIcon->init();
    echo '</div>'; // .m-aboutOfficesIcon

    if(have_rows('acfAboutOfficesContent')) {
      echo '<div class="col-xs-24 col-sm-16">';
        while(have_rows('acfAboutOfficesContent')) {
          the_row();
          $officeTitle = new AcfText;
          $officeTitle->useSubfield();

          // Language control
          if(get_field('acfAboutSecLang')) {
            switch($_COOKIE['language']) {
              case get_field('acfLangOptPrimLang', 'option')['code']:
                $officeTitle->setObject('primLangTitle');
                break;

              case get_field('acfLangOptSecLang', 'option')['code']:
                $officeTitle->setObject('secLangTitle');
                break;

              default:
                $officeTitle->setObject('primLangTitle');
                break;
            }
          } else {
            $officeTitle->setObject('primLangTitle');
          }

          $officeTitle->setElementType('p');
          $officeTitle->setClasses('a-aboutOffice__title ' . $officeSectionTextColor);

          $officeInformation = new AcfText;
          $officeInformation->useSubfield();
          $officeInformation->setObject('information');
          $officeInformation->setElementType('div');
          $officeInformation->setClasses('a-aboutOfficesInfo ' . $officeSectionTextColor);

          echo '<div class="m-aboutOfficeCell col-xs-24 col-sm-10 col-sm-offset-2">';
            $officeTitle->init();
            $officeInformation->init();
          echo '</div>'; //.m-aboutOfficeCell
        }
        echo '</div>'; // .col-xs-24
    }
  echo '</div>'; // .o-aboutPageContent
echo '</div>'; // .o-aboutPage