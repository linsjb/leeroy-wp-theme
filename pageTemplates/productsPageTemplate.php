<?php
/*
 * Template Name: Products page
 * Description: Page template for products.
 */
 get_header();
 ?>
 <script type="text/javascript">
   let pageLocation = 'products';
 </script>
 <?php
  

 if(have_posts()) {
   informationPageTop();
   $counter = 0;
   if(have_rows('acfProdCont')) {
     while(have_rows('acfProdCont')) {
       the_row();
       switch(get_row_layout()) {
         // One column
         case 'acfProdOneCol':
          $oneColumnBackgroundColor = acfButtonGroup('backgroundColor', 'acfProdOneColSecPref', 'backgroundColor', null, true);

          echo '<div class="o-productsPage col-xs-24 ' . $oneColumnBackgroundColor .'">';

            $oneColumnTextColor = acfButtonGroup('textColor', 'acfProOneColTextPref', 'color', null, true);
            $oneColumnTextSize = acfButtonGroup('textSize', 'acfProOneColTextPref', 'size', null, true);

            echo '<div class="container m-productsPageOneColumnContent ' . $oneColumnTextColor . ' ' . $oneColumnTextSize . '">';

              $oneColumnContentText = new AcfText;
              $oneColumnContentText->useSubfield();

              if(get_field('acfProdSecLang')) {
                switch($_COOKIE['language']) {
                  case 'en':
                    the_sub_field('acfProdOneColTextContEng');
                    break;

                  case 'sv':
                  the_sub_field('acfProdOneColTextContSwe');
                    break;

                  default:
                  the_sub_field('acfProdOneColTextContSwe');
                    break;
                }
              } else {
                the_sub_field('acfProdOneColTextContSwe');
              }
            echo '</div>'; // .m-productsPageContent
          echo '</div>'; // .o-productsPage
          break;

          // Two column's
         case 'acfProdTwoCol':

           $twoColBackgroundColor = acfButtonGroup('backgroundColor', 'acfProdTwoColSecPref', 'backgroundColor', null, true);
           $twoColTextColor = acfButtonGroup('textColor', 'acfProdTwoColSecPref', 'textColor', null, true);

           $twoColTitle = new AcfText;
           $twoColTitle->useSubfield();

           $twoColSubtitle = new AcfText;
           $twoColSubtitle->useSubfield();


          if(get_field('acfProdSecLang')) {
            switch($_COOKIE['language']) {
                case 'en':
                  $twoColTitle->setObject('acfProdTwoColTitlePref', 'titleEng');
                  $twoColSubtitle->setObject('acfProdTwoColTitlePref', 'subtitleEng');
                  $buttonText = 'Book a demo';
                  break;

                case 'sv':
                  $twoColTitle->setObject('acfProdTwoColTitlePref', 'titleSwe');
                  $twoColSubtitle->setObject('acfProdTwoColTitlePref', 'subtitleSwe');
                  $buttonText = 'Boka demo';
                  break;

                default:
                  $twoColTitle->setObject('acfProdTwoColTitlePref', 'titleSwe');
                  $twoColSubtitle->setObject('acfProdTwoColTitlePref', 'subtitleSwe');
                  $buttonText = 'Boka demo';
                  break;
              }
            } else {
              $twoColTitle->setObject('acfProdTwoColTitlePref', 'titleSwe');
              $twoColSubtitle->setObject('acfProdTwoColTitlePref', 'subtitleSwe');
              $buttonText = 'Boka demo';
          }

           $twoColTitle->setElementType('h3');
           $twoColTitle->setClasses('a-twoColumnsProductPage__title');

           $twoColSubtitle->setElementType('h5');
           $twoColSubtitle->setClasses('a-twoColumnsProductPage__subtitle');

           $twoColImage = new AcfImage;
           $twoColImage->useSubfield();
           $twoColImage->setObject('acfProdTwoColImg');
           $twoColImage->useElement();
           $twoColImage->setClasses('a-twoColumnsProductPage__image');


           // Alternate the text and image left and right
           if($counter % 2 == 1) {
             $textColumnPosition = ' col-sm-pull-9 ';
             $textColumnOffset = ' ';
             $imageColumnPosition = ' col-sm-push-15 ';
             $buttonPosition = ' ';
           } else {
             $textColumnPosition = ' ';
             $textColumnOffset = ' col-md-offset-2 ';
             $imageColumnPosition  = ' ';
             $buttonPosition = ' -right ';
           }

            echo '<div class="o-productsPage col-xs-24 ' . $twoColBackgroundColor . ' ' . $twoColTextColor .'">';
              echo '<div class="container m-productsPageContent">';
                // Image column
                echo '<div class="a-twoColumnsProductPage -image col-xs-24 col-sm-9' . $imageColumnPosition . '">';
                $twoColImage->init();
                echo '</div>'; // .a-twoColumnsProductPage

                // Text column
                echo '<div class="a-twoColumnsProductPage col-xs-24 col-sm-15 col-md-13' . $textColumnOffset . $textColumnPosition . '">';
                  $twoColTitle->init();
                  $twoColSubtitle->init();
                  textList('-productsLineHeight');
                  echo '<button class="a-twoColumnsProductPage__button' . $buttonPosition . 'a-btn -btnPurple pull-right">' . $buttonText . '</button>';
                echo '</div>'; // .a-twoColumnsProductPage


              echo '</div>'; // .m-productsPageContent
            echo '</div>'; // .o-productsPage
            break;

       } // Switch

       $counter++;
     }
   }

   formPopup(get_field('acfOptProdPopupTitle', 'option'), get_field('acfOptProdPopupShortCode', 'options'));
 }
 get_footer();
 ?>
