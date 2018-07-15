<?php
/*
 * Template Name: About page
 * Description: Page template for about page.
 */
get_header();
?>
<script type="text/javascript">
  let pageLocation = 'about';
</script>
<?php

if(have_posts()) {
  informationPageTop();

  if(have_rows('acfAboutFlexContent')) {
    while(have_rows('acfAboutFlexContent')) {
      the_row();
      switch(get_row_layout()) {

        // Text content
        // -------------------------------------------------
        // -------------------------------------------------
        case 'acfAboutText':
          $textSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutTextSecPref', 'backgroundColor', null, true);

          echo '<div class="o-aboutPage col-xs-24 ' . $textSectionBackgroundColor . '" id="about-leeroy">';
            $aboutText = new AcfText;
            $aboutText->useSubfield();
            $aboutText->setObject('acfAboutTextCont');
            $aboutText->setElementType('div');

            $aboutTextColor = acfButtonGroup('textColor', 'acfAboutTextPref', 'color', null, true);
            $aboutTextSize = acfButtonGroup('fontSize', 'acfAboutTextPref', 'size', null, true);
            $aboutText->setClasses('container m-aboutPageContent ' . $aboutTextColor .  ' ' . $aboutTextSize);
            $aboutText->init();
          echo '</div>'; // .o.aboutPage

          break; // case - acfAboutText

        case 'acfAboutOffices':
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
                    $officeTitle->setObject('title');
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
          break;

        case 'acfAboutImage':
          $imageSectionTitle = new AcfText;
          $imageSectionTitle->useSubfield();
          $imageSectionTitle->setObject('acfAboutImageTitlePref', 'title');
          $imageSectionTitle->setElementType();

          $imageSectionTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutImageTitlePref', 'alignment', null, true);
          $imageSectionTitleColor = acfButtonGroup('textColor', 'acfAboutImageTitlePref', 'color', null, true);

          $imageSectionTitle->setClasses('a-aboutPageSection__header ' . $imageSectionTitleAlignment . ' ' . $imageSectionTitleColor);

          echo '<div class="o-aboutPage col-xs-24" style="background-color:' . get_sub_field('acfAboutImageSectionPref')['backgroundColor'] . '">';
            echo '<div class="container o-aboutPageContent">';
              $imageSectionTitle->init();
              $aboutDesktopImage = new AcfImage;
              $aboutDesktopImage->useSubfield();
              $aboutDesktopImage->setObject('acfAboutImageGroup', 'desktopImage');
              $aboutDesktopImage->useElement();

              if(get_sub_field('acfAboutImageGroup')['MobileImageCheck']) {
                $aboutDesktopImage->setClasses('a-aboutImage__desktopImage col-xs-24 hidden-xs');
                $aboutDesktopImage->init();

                $aboutMobileImage = new AcfImage;
                $aboutMobileImage->useSubfield();
                $aboutMobileImage->setObject('acfAboutImageGroup', 'mobileImage');
                $aboutMobileImage->useElement();
                $aboutMobileImage->setClasses('a-aboutImage__mobileImage col-xs-24 hidden-sm hidden-md hidden-lg');
                $aboutMobileImage->init();
              } else {
                $aboutDesktopImage->setClasses('a-aboutImage__desktopImage col-xs-24');
                $aboutDesktopImage->init();
              }
            echo '</div>'; // .o-aboutPageContent
          echo '</div>'; // .o-aboutPage

          break; // case - acfAboutImage

        case 'acfAboutForm':
          $formSectionTitle = new AcfText;
          $formSectionTitle->useSubfield();
          $formSectionTitle->setObject('acfAboutFormTitlePref', 'title');
          $formSectionTitle->setElementType('h3');

          $formSectionTitleAlignment = acfButtonGroup('textAlignment', 'acfAboutFormTitlePref', 'alignment', null, true);
          $formSectionTitleTextColor = acfButtonGroup('textColor', 'acfAboutFormTitlePref', 'color', null, true);
          $formSectionTitle->setClasses('a-aboutPageSection__header ' . $formSectionTitleAlignment . ' ' . $formSectionTitleTextColor . ' ');

          $formSectionIcon = new AcfImage;
          $formSectionIcon->useSubfield();
          $formSectionIcon->setObject('acfAboutFormSecPref', 'icon');
          $formSectionIcon->useElement();
          $formSectionIcon->setClasses('a-contactForm__icon');

          $formSectionShortcode = new AcfText;
          $formSectionShortcode->useSubfield();
          $formSectionShortcode->setObject('acfAboutFormShortcode');

          $aboutSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutFormSecPref', 'backgroundColor', null, true);
          echo '<div class="o-aboutPage col-xs-24 ' . $aboutSectionBackgroundColor . '" id="join-us">';
            echo '<div class="container o-aboutPageContent">';
              $formSectionTitle->init();

              echo '<div class="o-contactFormContent col-xs-24 col-sm-20">';
                echo do_shortcode($formSectionShortcode->init());
              echo '</div>';

              echo '<div class="o-contactFormIcon col-xs-24 col-sm-4">';
                $formSectionIcon->init();
              echo '</div>'; // .o-contactFormIcon
            echo '</div>'; // .o-aboutPageContent
          echo '</div>'; // .o-aboutPage
          break; // case - acfAboutContact

        case 'acfAboutDynCells':
          $dynamicCellsSectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAbvoutDynCellsSecPref', 'backgroundColor', null, true);

          echo '<div class="o-aboutPage col-xs-24 ' . $dynamicCellsSectionBackgroundColor . '" id="about-leeroy">';
            echo '<div class="container">';
              dynamicCells();
            echo '</div>';
          echo '</div>';
          break;
      }
    }
  }
}

get_footer();
?>
