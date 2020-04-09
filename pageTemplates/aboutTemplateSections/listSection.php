<?php
$listSectionBgrClr = acfButtonGroup('backgroundColor', 'acfAboutListSecPref', 'backgroundColor', null, true);
$textColor = acfButtonGroup('textColor', 'acfAboutListContPref', 'textColor', null, true);
$textSize = acfButtonGroup('fontSize', 'acfAboutListContPref', 'textSize', null, true);
$titleColor = acfButtonGroup('textColor', 'acfAboutListContPref', 'titleColor', null, true);

$title = new AcfText;
$title->useSubfield();
$title->setObject('acfAboutListContPref', 'title');
$title->setElementType('h3');
$title->setClasses($titleColor);

$textContent = new AcfText;
$textContent->useSubfield();
$textContent->setObject('acfAboutListTextContent');
$textContent->setElementType('div');
$textContent->setClasses($textColor . ' ' . $textSize);

echo '<div class="o-aboutPage col-xs-24 ' . $listSectionBgrClr . '">';
    echo '<div class="container o-aboutPageContent">';

        $title->init();

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