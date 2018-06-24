<?php
/*
 * Template Name: Products page
 * Description: Page template for products.
 */
 get_header();
 if(have_posts()) {
   informationPageTop();
   if(have_rows('acfProdCont')) {
     while(have_rows('acfProdCont')) {
       the_row();
       switch(get_row_layout()) {
         // Two column's
         case 'acfProdTwoCol':

           $twoColBackgroundColor = acfButtonGroup('backgroundColor', 'acfProdTwoColSecPref', 'backgroundColor', null, true);
           $twoColTextColor = acfButtonGroup('textColor', 'acfProdTwoColSecPref', 'textColor', null, true);

           $twoColTitle = new AcfText;
           $twoColTitle->useSubfield();
           $twoColTitle->setObject('acfProdTwoColTitlePref', 'title');
           $twoColTitle->setElementType('h3');
           $twoColTitle->setClasses('a-twoColumnsProductPage__title');

           $twoColSubtitle = new AcfText;
           $twoColSubtitle->useSubfield();
           $twoColSubtitle->setObject('acfProdTwoColTitlePref', 'subtitle');
           $twoColSubtitle->setElementType('h5');
           $twoColSubtitle->setClasses('a-twoColumnsProductPage__subtitle');

           $twoColImage = new AcfImage;
           $twoColImage->useSubfield();
           $twoColImage->setObject('acfProdTwoColImg');
           $twoColImage->useElement();
           $twoColImage->setClasses('a-twoColumnsProductPage__image');

           if(get_sub_field('ContentPosition')) {
             $leftColumnWidth = 'col-sm-15';
             $rightColumnWidth = 'col-sm-9';
           } else {
             $leftColumnWidth = 'col-sm-9';
             $rightColumnWidth = 'col-sm-15';
           }

            echo '<div class="o-productsPage col-xs-24 ' . $twoColBackgroundColor . ' ' . $twoColTextColor .'">';
              echo '<div class="container m-productsPageContent">';

                echo '<div class="a-twoColumnsProductPage col-xs-24 ' . $leftColumnWidth . '">';
                  if(get_sub_field('ContentPosition')) {
                    $twoColTitle->init();
                    $twoColSubtitle->init();
                    textList('-productsLineHeight');
                    echo '<button class="a-twoColumnsProductPage__button a-btn -btnPurple">Book a demo</button>';
                  } else {
                    $twoColImage->init();
                  }
                echo '</div>'; // .m-productsPageLeftColumn

                echo '<div class="a-twoColumnsProductPage col-xs-24 ' . $rightColumnWidth . '">';
                  if(get_sub_field('ContentPosition')) {
                    $twoColImage->init();
                  } else {
                    $twoColTitle->init();
                    $twoColSubtitle->init();
                    textList('-productsLineHeight');
                    echo '<button class="a-twoColumnsProductPage__button a-btn -btnPurple">Book a demo</button>';
                  }
                echo '</div>'; // .m-procuttsPageRightColumn

              echo '</div>'; // .container
            echo '</div>'; // .o-productsPage
            break;

        case 'acfProdOneCol':
          $oneColumnBackgroundColor = acfButtonGroup('backgroundColor', 'acfProdOneColSecPref', 'backgroundColor', null, true);

          echo '<div class="o-productsPage col-xs-24 ' . $oneColumnBackgroundColor .'">';
            echo '<div class="container m-productsPageOneColumnContent">';
              $oneColumnContentText = new AcfText;
              $oneColumnContentText->useSubfield();
              $oneColumnContentText->setObject('acfProdOneColTextCont');
              $oneColumnContentText->setElementType('div');

              $oneColumnTextColor = acfButtonGroup('textColor', 'acfProOneColTextPref', 'color', null, true);
              $oneColumnTextSize = acfButtonGroup('textSize', 'acfProOneColTextPref', 'size', null, true);
              $oneColumnContentText->setClasses($oneColumnTextColor . ' ' . $oneColumnTextSize);
              $oneColumnContentText->init();

              $oneContentImage = new AcfImage;
              $oneContentImage->useSubfield();
              $oneContentImage->setObject('acfprodOneColImage');
              $oneContentImage->useElement();
              $oneContentImage->setClasses('m-productsPageOneColumnContent__image col-xs-24 col-sm-20 col-sm-offset-2');
              $oneContentImage->init();
            echo '</div>'; // .m-productsPageContent
          echo '</div>'; // .o-productsPage
          break;
       } // Switch
     }
   }

   formPopup();
 }
 get_footer();
 ?>
