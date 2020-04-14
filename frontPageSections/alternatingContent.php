<?php
$altSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfIndSecBackground', 'color');
$altSectionTextColor = acfButtonGroup('textColor', 'acfIndSecAltContSect', 'textColor', null, true);

$altSectionSecondaryBackgroundColor = acfButtonGroup('backgroundColor', 'acfIndSecAltContentPref', 'backgroundColor', null, true);
$altSectionSecondaryTextColor = acfButtonGroup('textColor', 'acfIndSecAltContentPref', 'textColor', null, true);

if(get_sub_field('acfIndSecAltContentPref')['imageStartPos'] == "left") {
    $counter = 0;
} else {
    $counter = 1;
}
    if(!$titleUsed) {
        echo '<div class="container">';
            $title->init();
        echo '</div>';
    }
    $titleUsed = true;

    if(have_rows('acfIndSecAltContent')) {
        while(have_rows('acfIndSecAltContent')) {
            the_row();

            if(!empty(get_sub_field('title'))) {
                $altContentTitle = new AcfText;
                $altContentTitle->useSubfield();
                $altContentTitle->setObject('title');
                $altContentTitle->setElementType('h3');
                $altContentTitle->setClasses('a-alternatingContent__title');
            }

            if(!empty(get_sub_field('subtitle'))) {
                $altContentSubtitle = new AcfText;
                $altContentSubtitle->useSubfield();
                $altContentSubtitle->setObject('subtitle');
                $altContentSubtitle->setElementType('h5');
                $altContentSubtitle->setClasses('a-alternatingContent__subtitle');
            }
            
            $altContent = new AcfText;
            $altContent->useSubfield();
            $altContent->setObject('content');
            $altContent->setElementType('div');
            $altContent->setClasses('a-alternatingContent__content');

            $altContentImage = new AcfImage;
            $altContentImage->useSubfield();
            $altContentImage->setObject('image');
            $altContentImage->useElement();
            $altContentImage->setClasses('a-indexAlternatingContent__img');


            if($counter % 2 == 1) {
                $textColumnPosition = ' col-sm-pull-9 ';
                $imageColumnPosition = ' col-sm-push-15 ';
                $backgroundColor = $altSectionSecondaryBackgroundColor;
                $textColor = $altSectionSecondaryTextColor;
                
            } else {
                $textColumnPosition = ' ';
                $imageColumnPosition  = ' ';
                $backgroundColor = $altSectionBackgroundColor;
                $textColor = $altSectionTextColor;
              }
            ?>
            <div class="col-xs-24 m-indexAlternatingSection <?= $backgroundColor ?> <?= $textColor ?>">
                <div class="container m-indexAlternatingSectionContainer">
                    <!-- Image column -->
                    <div class="col-xs-24 col-sm-9 a-alternatingContent -image <?= $imageColumnPosition; ?>">
                        <?php
                        $altContentImage->init();
                        ?>
                    </div>

                    <!-- Content column -->
                    <div class="col-xs-24 col-sm-15 a-alternatingContent <?= $textColumnPosition; ?>">
                        <?php
                        if(!empty(get_sub_field('title'))) {
                            $altContentTitle->init();
                        }

                        if(!empty(get_sub_field('subtitle'))) {
                            $altContentSubtitle->init();
                        }

                        $altContent->init();
                        ?>
                    </div>
                </div>
            </div>
          <?php
          $counter++;
        }
    }
    ?>
