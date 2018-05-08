<?php
/*
 * Template Name: About page
 * Description: Page template for about page.
 */
get_header();
if(have_posts()):
  informationPageTop();
  if(have_rows('acfAboutFlexContent')):
    while(have_rows('acfAboutFlexContent')):
      the_row();
      switch(get_row_layout()) {
        case 'acfAboutText':
          $acfGroup = 'acfAboutTextContent';
        ?>
          <div class="o-aboutPage col-xs-100" id="about-leeroy" style="background-color: <?= get_sub_field('acfAboutTextContent')['backgroundColor'] ?>; color: <?= get_sub_field('acfAboutTextContent')['textColor'] ?>">
            <div class="container o-aboutPageContent">
              <?php
              $leftTextContent = new AcfText;
              $leftTextContent->useSubfield();
              $leftTextContent->setObject($acfGroup, 'leftContent');
              $leftTextContent->setElementType('div');

              if(get_sub_field($acfGroup)['columns'] == 'two') {
                $leftTextContent->setClasses('m-aboutTextColumnContent col-xs-100 col-sm-50');

                $rightTextContent = new AcfText;
                $rightTextContent->useSubfield();
                $rightTextContent->setObject($acfGroup, 'rightContent');
                $rightTextContent->setElementType('div');
                $rightTextContent->setClasses('m-aboutTextColumnContent col-xs-100 col-sm-50');

                $leftTextContent->init();
                $rightTextContent->init();
              } else {
                $leftTextContent->setClasses('m-aboutTextContent col-xs-100');
                $leftTextContent->init();
              }
              ?>
            <!-- .o-aboutPageContent -->
            </div>
          <!-- .o-aboutPage -->
          </div>
          <?php
          break; // case - acfAboutText

        case 'acfAboutOffices':
          $acfSecPrefGroup = 'acfAboutOfficesSectionPref';

          $officeIcon = new AcfImage;
          $officeIcon->useSubfield();
          $officeIcon->setObject($acfSecPrefGroup, 'icon');
          $officeIcon->useElement();
          $officeIcon->setClasses('a-aboutOffices__icon');
        ?>
          <div class="o-aboutPage col-xs-100" style="background-color: <?= get_sub_field('acfAboutOfficesSectionPref')['backgroundColor'] ?>; color: <?= get_sub_field('acfAboutOfficesSectionPref')['textColor'] ?>">
            <div class="container o-aboutPageContent">

              <div class="m-aboutOfficesIcon col-xs-19">
                <?php $officeIcon->init() ?>
              <!-- .m-aboutOfficesIcon -->
              </div>

              <?php if(have_rows('acfAboutOfficeOffices')): ?>
                <div class="col-xs-100 col-sm-60">
                  <?php
                  while(have_rows('acfAboutOfficeOffices')):
                    the_row();
                    $officeTitle = new AcfText;
                    $officeTitle->useSubfield();
                    $officeTitle->setObject('title');
                    $officeTitle->setElementType('h2');
                    $officeTitle->setClasses('a-aboutOffice__title');

                    $officeInformation = new AcfText;
                    $officeInformation->useSubfield();
                    $officeInformation->setObject('information');
                    $officeInformation->setElementType('div');
                    $officeInformation->setClasses('a-aboutOfficesInfo');
                  ?>
                    <div class="m-aboutOfficeCell col-xs-100 col-sm-45 col-sm-offset-5">
                      <?php
                      $officeTitle->init();
                      $officeInformation->init();
                      ?>
                    <!-- .m-aboutOfficeCell  -->
                    </div>
                  <?php endwhile; // have_rows - acfAboutOfficeOffices ?>
                </div>
              <?php endif; // have_rows - acfAboutOfficeOffices ?>
            <!-- .o-aboutPageContent -->
            </div>
          <!-- .o-aboutPage -->
          </div>
        <?php
          break; // case - acfAboutOffices

        case 'acfAboutTeam':
          $teamTitle = new AcfText;
          $teamTitle->useSubfield();
          $teamTitle->setObject('acfAboutTeamTitlePref', 'title');
          $teamTitle->setElementType('h2');
          $teamTitle->setClasses('a-aboutPageSection__header ' . acfButtonSubGroup('textAlignment', 'acfAboutTeamTitlePref', 'alignment') . ' ' . acfButtonSubGroup('textColor', 'acfAboutTeamTitlePref', 'color') . ' ' . acfButtonSubGroup('fontSize', 'acfAboutTeamTitlePref', 'size'));

          $tintBackground = get_sub_field('acfAboutTeamSectionPref')['tintColor'];
        ?>
          <div class="o-aboutPage col-xs-100" id="the-team" style="background-color: <?= get_sub_field('acfAboutTeamSectionPref')['backgroundColor'] ?>">
            <div class="container o-aboutPageContent">
              <?php
              $teamTitle->init();
              if(have_rows('acfAboutTeamCells')):
                while(have_rows('acfAboutTeamCells')):
                  the_row();
                  $cardImage = new AcfImage;
                  $cardImage->setSize('mediumLarge');
                  $cardImage->useSubfield();
                  $cardImage->setObject('image');
              ?>
                  <div class="m-aboutTeamCell col-xs-100 col-sm-30 col-md-25">
                    <div class="m-aboutTeamCellContent" style="background-image: url('<?= $cardImage->init(); ?>')">

                      <?php if(get_sub_field('tintImage')):?>
                        <div class="a-elementToner col-xs-100" style="background-color: <?= $tintBackground ?>; opacity: <?= get_sub_field('tintOpacity') ?>"></div>
                      <?php endif; ?>

                      <?php if(!get_sub_field('image')): ?>
                        <p class="a-aboutTeam__noPicText">Image coming soon</p>
                      <?php endif; ?>

                      <!-- Cell information -->
                      <div class="m-aboutTeamCellInfo col-xs-100">
                        <p class="a-aboutTeam__name"><?= get_sub_field('name') ?></p>
                        <p class="a-aboutTeam__position"><?= get_sub_field('position') ?></p>
                      <!-- .m-aboutTeamCellInfo -->
                      </div>

                    <!-- .m-aboutTeamCellContent -->
                    </div>
                  <!-- .m-aboutTeamCell -->
                  </div>
                <?php endwhile; // have_rows - acfAboutTeamCells ?>

                <!-- Last team cell. Cell with icon and info-text -->
                <div class="m-aboutTeamCell col-xs-100 col-sm-30 col-md-25">
                  <div class="m-aboutTeamCellContent" style="background-color: <?= get_sub_field('acfAboutTeamLastCellGroup')['backgroundColor'] ?>">
                    <?php
                    $lastCellIcon = new AcfImage;
                    $lastCellIcon->useSubfield();
                    $lastCellIcon->setObject('acfAboutTeamLastCellGroup', 'icon');
                    $lastCellIcon->useElement();
                    $lastCellIcon->setClasses('a-aboutTeamLastCell__icon');
                    $lastCellIcon->init();

                    $lastCellTitle = new AcfText;
                    $lastCellTitle->useSubfield();
                    $lastCellTitle->setObject('acfAboutTeamLastCellGroup', 'textRowOne');
                    $lastCellTitle->setElementType('p');
                    $lastCellTitle->setClasses('a-aboutTeam__name');

                    $lastCellSubTitle = new AcfText;
                    $lastCellSubTitle->useSubfield();
                    $lastCellSubTitle->setObject('acfAboutTeamLastCellGroup', 'textRowTwo');
                    $lastCellSubTitle->setElementType('p');
                    $lastCellSubTitle->setClasses('a-aboutTeam__position');
                    ?>
                    <div class="m-aboutTeamCellInfo col-xs-100">
                      <?php
                      $lastCellTitle->init();
                      $lastCellSubTitle->init();
                      ?>
                    <!-- .m-aboutTeamCellInfo -->
                    </div>
                  <!-- .m-aboutTeamCellContent -->
                  </div>
                <!-- .m-aboutTeamCell -->
                </div>
              <?php endif; // have_rows - acfAboutTeamCells ?>
            <!-- .o-aboutPageContent -->
            </div>
          <!-- .o-aboutPage -->
          </div>
        <?php
          break; // case - acfAboutTeam

        case 'acfAboutImage':
          $imageSectionTitle = new AcfText;
          $imageSectionTitle->useSubfield();
          $imageSectionTitle->setObject('acfAboutImageTitlePref', 'title');
          $imageSectionTitle->setElementType('h2');
          $imageSectionTitle->setClasses('a-aboutPageSection__header ' . acfButtonSubGroup('textAlignment', 'acfAboutImageTitlePref', 'alignment') . ' ' . acfButtonSubGroup('textColor', 'acfAboutImageTitlePref', 'color') . ' ' . acfButtonSubGroup('fontSize', 'acfAboutImageTitlePref', 'size'));
        ?>
          <div class="o-aboutPage col-xs-100" style="background-color: <?= get_sub_field('acfAboutImageSectionPref')['backgroundColor'] ?>;">
            <div class="container o-aboutPageContent">
              <?php
              $imageSectionTitle->init();
              $aboutDesktopImage = new AcfImage;
              $aboutDesktopImage->useSubfield();
              $aboutDesktopImage->setObject('acfAboutImageGroup', 'desktopImage');
              $aboutDesktopImage->useElement();

              if(get_sub_field('acfAboutImageGroup')['MobileImageCheck']) {
                $aboutDesktopImage->setClasses('a-aboutImage__desktopImage col-xs-100 hidden-xs');
                $aboutDesktopImage->init();

                $aboutMobileImage = new AcfImage;
                $aboutMobileImage->useSubfield();
                $aboutMobileImage->setObject('acfAboutImageGroup', 'mobileImage');
                $aboutMobileImage->useElement();
                $aboutMobileImage->setClasses('a-aboutImage__mobileImage col-xs-100 hidden-sm hidden-md hidden-lg');
                $aboutMobileImage->init();
              } else {
                $aboutDesktopImage->setClasses('a-aboutImage__desktopImage col-xs-100');
                $aboutDesktopImage->init();
              }
              ?>
            <!-- .o-aboutPageContent -->
            </div>
          <!-- .o-aboutPage -->
          </div>
        <?php
          break; // case - acfAboutImage

        case 'acfAboutContact':
          $formSectionTitle = new AcfText;
          $formSectionTitle->useSubfield();
          $formSectionTitle->setObject('acfAboutImageFormPref', 'title');
          $formSectionTitle->setElementType('h2');
          $formSectionTitle->setClasses('a-aboutPageSection__header ' . acfButtonSubGroup('textAlignment', 'acfAboutImageFormPref', 'alignment') . ' ' . acfButtonSubGroup('textColor', 'acfAboutImageFormPref', 'color') . ' ' . acfButtonSubGroup('fontSize', 'acfAboutImageFormPref', 'size'));

          $formSectionIcon = new AcfImage;
          $formSectionIcon->useSubfield();
          $formSectionIcon->setObject('acfAboutFormSectionPref', 'icon');
          $formSectionIcon->useElement();
          $formSectionIcon->setClasses('a-contactForm__icon');

          $formSectionShortcode = new AcfText;
          $formSectionShortcode->useSubfield();
          $formSectionShortcode->setObject('acfAboutFormSectionPref', 'shortcode');
        ?>
        <div class="o-aboutPage col-xs-100" id="join-us" style="background-color: <?= get_sub_field('acfAboutFormSectionPref')['backgroundColor'] ?>;">
          <div class="container o-aboutPageContent">
            <?php
            $formSectionTitle->init();
            ?>
            <div class="o-contactFormContent col-xs-100 col-sm-80">
              <?php
              echo do_shortcode($formSectionShortcode->init());
              ?>
            </div>

            <div class="o-contactFormIcon col-xs-100 col-sm-20">
              <?php
              $formSectionIcon->init();
              ?>
            </div>
          <!-- .o-aboutPageContent -->
          </div>
        <!-- .o-aboutPage -->
        </div>
        <?php
          break; // case - acfAboutContact
      } // Switch
    endwhile; // have_rows - acfAboutFlexContent
  endif; // have_rows - acfAboutFlexContent
?>

<?php
endif; // have_posts - Wordpress content main loop
get_footer();
?>
