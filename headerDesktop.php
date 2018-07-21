<header class="o-header col-sm-24 hidden-sm">
  <div class="container">
    <div class="o-headerWrapper col-sm-24">
        <div class="m-headerLogo col-sm-2">
          <a rel="<?= $logoLinkRel ?>" href="<?= $logoUrl ?>" class="a-headerLogo__link">
            <object id="desktopHeaderLogoObj" class="a-headerLogo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
          </a>
        </div>
        <?php $navigation->init(); ?>

        <div  class="m-headerLanguage col-sm-2" id="desktopLang">
            <div class="m-headerLanguage__flag -desktop" id="desktopLangFlag" style="background-image: url(<?= $flag ?>);">
              <!-- .m-headerLanguage__flag -->
            </div>
          <!-- .m-headerLanguage -->
        </div>
        <!-- .o-headerWrapper -->
    </div>
    <!-- .container -->
  </div>
</header>
