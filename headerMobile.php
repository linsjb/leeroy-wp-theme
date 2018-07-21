<header class="o-mobileHeader col-xs-24 hidden-md hidden-lg">
  <div class="m-mobileHeaderLogo col-xs-10">
    <a rel="<?= $logoLinkRel ?>" href="<?= $logoUrl ?>" class="a-headerLogo__link">
      <object id="mobileHeaderLogoObj" class="a-headerLogo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
    </a>
  <!-- .m-mobileHeaderLogo -->
  </div>

  <div  class="m-headerLanguage col-xs-5 col-xs-offset-4" id="mobileLang">
      <div class="m-headerLanguage__flag  -mobile" id="mobileLangFlag" style="background-image: url(<?= $flag ?>);">
        <!-- .m-headerLanguage__flag -->
      </div>
    <!-- .m-headerLanguage -->
  </div>

  <div class="m-mobileHeaderMenuBtn col-xs-5 pull-right">
    <div id="mobileNavBtn" class="hamburger hamburger--collapse">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
  <!-- .m-mobileHeaderMenuBtn -->
  </div>
</header>

<div id="mobileHeaderMenu" class="o-mobileHeaderMenu animated col-xs-24 hidden-md hidden-lg">
  <?php $mobileNavigation->init() ?>
  <!-- .o-mobileHeaderMenu -->
</div>
