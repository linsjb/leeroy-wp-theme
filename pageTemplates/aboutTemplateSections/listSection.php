<?php
$listSectionBgrClr = acfButtonGroup('backgroundColor', 'acfAboutListSecPref', 'backgroundColor', null, true);
$textColor = acfButtonGroup('textColor', 'acfAboutListContPref', 'textColor', null, true);
$textSize = acfButtonGroup('fontSize', 'acfAboutListContPref', 'textSize', null, true);

if(get_sub_field('acfAboutListTitle')['title']) {
    $listSectionTitle = new AcfText;
    $listSectionTitle->useSubfield();
    $listSectionTitle->setObject('acfAboutListTitle', 'title');
    $listSectionTitle->setElementType('h3');

    $listTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutListTitle', 'alignment', null, true);
    $listTitleColor = acfButtonGroup('textColor', 'acfAboutListTitle', 'color', null, true);

    $listSectionTitle->setClasses($listTitleAlignment .  ' ' . $listTitleColor);
}

$textContent = new AcfText;
$textContent->useSubfield();
$textContent->setObject('acfAboutListTextContent');
$textContent->setElementType('div');
$textContent->setClasses($textColor . ' ' . $textSize);

echo '<div class="o-aboutPage col-xs-24 ' . $listSectionBgrClr . '">';
    echo '<div class="container o-aboutPageContent">';

        if(get_sub_field('acfAboutListTitle')['title']) {
            $listSectionTitle->init();
        }

        $textContent->init();
        
        echo '<ul class="m-aboutPageList">';
            if(have_rows('acfAboutListContent')) {
                while(have_rows('acfAboutListContent')) {
                    the_row();

                    $item = new acfText;
                    $item->useSubfield();
                    $item->setObject('text');
                    $item->setElementType('li');
                    $item->init();
                }
            }
        echo '</ul>';
    echo '</div>';
echo '</div>';