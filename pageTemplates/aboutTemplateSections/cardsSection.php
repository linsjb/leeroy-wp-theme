<?php
$textSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutCardsSecPref', 'backgroundColor', null, true);

$textColor = acfButtonGroup('textColor', 'acfAboutCardsContPref', 'textColor', null, true);
$textSize = acfButtonGroup('fontSize', 'acfAboutCardsContPref', 'textSize', null, true);

if(get_sub_field('acfAboutCardsTitle')['title']) {
  $cardsSectionTitle = new AcfText;
  $cardsSectionTitle->useSubfield();
  $cardsSectionTitle->setObject('acfAboutCardsTitle', 'title');
  $cardsSectionTitle->setElementType('h3');

  $cardsTitleColor = acfButtonGroup('textColor', 'acfAboutCardsTitle', 'color', null, true);
  $cardsTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutCardsTitle', 'alignment', null, true);

  $cardsSectionTitle->setClasses($cardsTitleAlignment .  ' ' . $cardsTitleColor);
}

$counter = 0;

echo '<div class="o-aboutPage col-xs-24 ' . $textSectionBackgroundColor . '">';
  echo '<div class="container o-aboutPageContent">';

    if(get_sub_field('acfAboutCardsTitle')['title']) {
      $cardsSectionTitle->init();
    }

    if(have_rows('acfAboutCardsContent')) {
      while(have_rows('acfAboutCardsContent')) {
        the_row();

        $icon = new AcfImage;
        $icon->useSubfield();
        $icon->setObject('icon');
        $icon->setClasses('a-aboutPageCardIcon__img');
        $icon->setSize('small');
        $icon->useElement();

        $title = new AcfText;
        $title->useSubfield();
        $title->setObject('title');
        $title->setElementType('span');
        $title->setClasses('m-aboutPageCard__title ' . $textColor );

        $content = new AcfText;
        $content->useSubfield();
        $content->setObject('content');
        $content->setElementType('div');
        $content->setClasses('m-aboutPageCard__content ' . $textColor );
        
        if($counter == 3) {
          $counter == 0;
          echo '<div class="col-xs-24"></div>';
        }

        echo '<div class="m-aboutPageCard col-xs-24 col-md-8">';
          echo '<div class="col-xs-24 a-aboutPageCardIcon">';
            $icon->init();
          echo '</div>';

          $title->init();
          $content->init();
        echo '</div>';

        $counter++;
      }
    }
  echo '</div>';
echo '</div>';
