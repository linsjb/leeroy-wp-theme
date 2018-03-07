<?php
/*
 * Template Name: About page
 * Description: Page template for about page.
 */
get_header();
if(have_posts()):
  $timelineTitle = new AcfText;
  $timelineTitle->setObject('acfAboutTimelineTitle');
  $timelineTitle->setElementType('h2');
  $timelineTitle->setClasses('a-aboutTimeline__title');

  $timelineImage = new AcfImage;
  $timelineImage->setObject('acfAboutTimelineImage');
  $timelineImage->useElement();
  $timelineImage->setClasses('a-aboutTimeline__image col-xs-98 col-xs-offset-2');

  while (have_posts()):
    the_post();
    informationPageElements();
?>
    <div class="o-aboutTimeline col-xs-100" style="background-color: <?php the_field('acfAboutTimelineBackground') ?>">
      <div class="container m-aboutTimelineContent">
        <?php
        $timelineTitle->init();
        $timelineImage->init();
        ?>
      <!-- .m-aboutTimelineContent -->
      </div>
    <!-- .o-aboutTimeline -->
    </div>
<?php
    if(have_rows('acfAboutTeam')):
      $teamTitle = new AcfText;
      $teamTitle->setObject('acfAboutTeamTitle');
      $teamTitle->setElementType('h2');
      $teamTitle->setClasses('a-aboutPageTeam__header');

      $contactTitle = new AcfText;
      $contactTitle->setObject('acfAboutContactTitle');
      $contactTitle->setElementType('h2');
      $contactTitle->setClasses('a-aboutContact__header');

      $contactIcon = new AcfImage;
      $contactIcon->setObject('acfAboutContactIcon');
      $contactIcon->setClasses('a-contactForm__icon');
      $contactIcon->useElement();

      $lastCellIcon = new AcfImage;
      $lastCellIcon->setObject('acfAboutTeamLcIcon');
      $lastCellIcon->setClasses('a-aboutTeamLastCell__icon');
      $lastCellIcon->useElement();

      $lastCellTitle = new AcfText;
      $lastCellTitle->setObject('acfAboutTeamLcTo');
      $lastCellTitle->setElementType('p');
      $lastCellTitle->setClasses('a-aboutTeam__name');

      $lastCellSubTitle = new AcfText;
      $lastCellSubTitle->setObject('acfAboutTeamLcTt');
      $lastCellSubTitle->setElementType('p');
      $lastCellSubTitle->setClasses('a-aboutTeam__email');
?>
      <div id="the-team" class="o-aboutPageTeam col-xs-100" style="background-color: <?php the_field('acfAboutTeamBackground') ?>">
        <div class="container m-aboutPageTeamContent">
          <?php
          $teamTitle->init();
          while(have_rows('acfAboutTeam')):
            the_row();
          ?>
          <!-- Team cell -->
          <div class="m-aboutTeamCell col-xs-40 col-sm-30 col-md-20 col-xs-offset-7 col-sm-offset-3 col-md-offset-4">
            <div class="m-aboutTeamCellContent" style="background-image: url('<?php the_sub_field('acfAboutTeamEmpPicture') ?>')">
              <?php if(get_sub_field('acfAboutTeamEmpImgDim')):?>
                <div class="m-pageImageFader col-xs-100" style="background-color: <?php the_field('acfAboutTeamFadeColor') ?>; opacity: <?php the_field('acfAboutTeamFadeOpacity') ?>"></div>
              <?php endif; ?>
              <p class="a-aboutTeam__name"><span><?php the_sub_field('acfAboutTeamEmpName') ?></span>, <span><?php the_sub_field('acfAboutTeamEmpTitle') ?></span></p>
              <p class="a-aboutTeam__email"><?php the_sub_field('acfAboutTeamEmpEmail') ?></p>
            <!-- .m-aboutTeamCellContent -->
            </div>
          </div>
          <?php
          endwhile;
          ?>
          <!-- Element for the last cell that is static -->
          <div class="m-aboutTeamCell col-xs-40 col-sm-30 col-md-20 col-xs-offset-7 col-sm-offset-3 col-md-offset-4">
            <div class="m-aboutTeamCellContent" style="background-color: <?php the_field('acfAboutTeamLcBgc') ?>">
              <?php
              $lastCellIcon->init();
              $lastCellTitle->init();
              $lastCellSubTitle->init();
              ?>
              <!-- .m-aboutTeamCellContent -->
            </div>
          </div>
          <!-- .m-aboutPageTeamContent -->
        </div>
        <!-- .o-aboutPageTeam -->
      </div>
<?php
    endif;
?>
    <div id="join" class="o-aboutContact col-xs-100" style="background-color: <?php the_field('acfAboutContactBackground') ?>">
      <div class="container m-aboutContactContent">
        <?php
        $contactTitle->init();
        echo do_shortcode('[caldera_form id="CF5a83a0c89cdb9"]');
        $contactIcon->init();
        ?>
      <!-- .m-aboutContactContent -->
      </div>
    <!-- .0-aboutContact -->
    </div>
<?php
  endwhile;
endif;
get_footer();
?>
