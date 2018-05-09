<header class="o-header col-sm-24 hidden-xs">
  <div class="container">
    <div class="o-headerWrapper col-sm-24">
        <div class="m-headerLogo col-sm-5">
          <a rel="<?= $logoLinkRel ?>" href="<?= $logoUrl ?>" class="a-headerLogo__link">
            <object id="desktopHeaderLogoObj" class="a-headerLogo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
          </a>
        </div>
        <?php $navigation->init(); ?>
    <!-- .o-headerWrapper -->
    </div>
  <!-- .container -->
  </div>
</header>
