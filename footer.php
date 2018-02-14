      <?php
      wp_footer();
      $grid = $GLOBALS["grid"];

      $businessNav = new Navigation;
      $businessNav->setLocation('business');
      $businessNav->setContainerClasses('m-footer__nav');

      $businessAcfFields = new AcfMenuFields;
      $businessAcfFields->setElementType('h5');
      $businessAcfFields->setElementClasses('a-footerNav__title');
      $businessAcfFields->setMenuObject('business');
      $businessAcfFields->setAcfObject('acfFooterMenuTitle');
      $businessAcfFields->setPosition('before');
      $businessAcfFields->init();

      $aboutLeeroyNav = new Navigation;
      $aboutLeeroyNav->setLocation('aboutLeeroy');
      $aboutLeeroyNav->setContainerClasses('m-footer__nav');

      $aboutLeeroyAcfFields = new AcfMenuFields;
      $aboutLeeroyAcfFields->setElementType('h5');
      $aboutLeeroyAcfFields->setElementClasses('a-footerNav__title');
      $aboutLeeroyAcfFields->setMenuObject('aboutLeeroy');
      $aboutLeeroyAcfFields->setAcfObject('acfFooterMenuTitle');
      $aboutLeeroyAcfFields->setPosition('before');
      $aboutLeeroyAcfFields->init();

      $resourcesNav = new Navigation;
      $resourcesNav->setLocation('resources');
      $resourcesNav->setContainerClasses('m-footer__nav');

      $resourcesAcfFields = new AcfMenuFields;
      $resourcesAcfFields->setElementType('h5');
      $resourcesAcfFields->setElementClasses('a-footerNav__title');
      $resourcesAcfFields->setMenuObject('resources');
      $resourcesAcfFields->setAcfObject('acfFooterMenuTitle');
      $resourcesAcfFields->setPosition('before');
      $resourcesAcfFields->init();

      ?>
      <div class="o-footer <?= $grid->width(100)?>">
        <object class="m-footer__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
        <p class="m-footer__slogan"><?= get_bloginfo('description') ?></p>

        <div class="container m-footerContent">
          <div class="m-footerInnerContent<?= $grid->individualWidth(100, 100, 80, 80); echo $grid->center(); ?>">
            <div class="m-footerInnerContentCol<?= $grid->width(33) ?>">
              <?php $businessNav->init() ?>
            <!-- .m-footerInnerContentCol -->
            </div>

            <div class="m-footerInnerContentCol<?= $grid->width(33) ?>">
              <?php $aboutLeeroyNav->init() ?>
            <!-- .m-footerInnerContentCol -->
            </div>

            <div class="m-footerInnerContentCol<?= $grid->width(34) ?>">
              <?php $resourcesNav->init() ?>
            <!-- .m-footerInnerContentCol -->
            </div>
          <!-- .m-footerInnerContent -->
          </div>
        <!-- .m-footerContent -->
        </div>
      <!-- .o-footer -->
      </div>
    <!-- .row -->
    </div>
  <!-- .container-fluid -->
  </div>
</body>
</html>
