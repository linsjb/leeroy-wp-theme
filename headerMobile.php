<header class="o-mobileHeader col-xs-24 hidden-sm hidden-md hidden-lg ">
  <div class="m-mobileHeaderLogo">
    <a rel="<?= $logoLinkRel ?>" href="<?= $logoUrl ?>" class="a-headerLogo__link">
      <object id="mobileHeaderLogoObj" class="a-headerLogo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
    </a>
  <!-- .m-mobileHeaderLogo -->
  </div>

  <div class="m-mobileHeaderMenuBtn">
    <div id="mobileNavBtn" class="hamburger hamburger--collapse">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
  <!-- .m-mobileHeaderMenuBtn -->
  </div>
</header>

<div id="mobileHeaderMenu" class="o-mobileHeaderMenu animated col-xs-24 hidden-sm hidden-md hidden-lg">
  <?php $mobileNavigation->init() ?>
  <!-- .o-mobileHeaderMenu -->
</div>
