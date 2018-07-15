<header class="o-header col-sm-24 hidden-xs">
  <div class="container">
    <div class="o-headerWrapper col-sm-24">
        <div class="m-headerLogo col-sm-2">
          <a rel="<?= $logoLinkRel ?>" href="<?= $logoUrl ?>" class="a-headerLogo__link">
            <object id="desktopHeaderLogoObj" class="a-headerLogo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
          </a>
        </div>
        <?php $navigation->init(); ?>

        <!-- <div  class="m-headerLanguage col-sm-2"> -->
            <!-- <div class="m-headerLanguage__flag" style="background-image: url(<?= get_template_directory_uri() . '/images/sweden.svg'?>);"> -->
              <!-- .m-headerLanguage__flag -->
            <!-- </div> -->
          <!-- .m-headerLanguage -->
        <!-- </div> -->
        <!-- .o-headerWrapper -->
    </div>
    <!-- .container -->
  </div>
</header>

<!-- <div class="o-clickBlanket" id="languageSelectorBlanket"></div>

<div class="o-languageSelector visibilityHidden">
  <div class="o-languageSelector__arrow"></div>
  <ul class="m-languageSelectorList">
    <li class="m-languageSelectorList__item -current">Svenska</li>
    <li class="m-languageSelectorList__item">English</li>
  </ul>
</div> -->
