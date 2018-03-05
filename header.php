<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_head();
    $navigation = new Navigation();
    $navigation->setLocation('masterMenu');
    $navigation->setContainerClasses('m-header__nav m-header__nav--lightTextColour pull-right col-lg-80');

    if(is_front_page()) {
      $logoUrl = '#home';
    } else {
      $logoUrl = home_url();
    }

    ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header class="o-header col-xs-100 col-sm-100 col-md-100 col-lg-100">
          <div class="container">
            <div class="o-headerWrapper col-xs-100 col-sm-100 col-md-100 col-lg-100">
                <div class="m-headerLogo col-xs-20 col-sm-20 col-md-20 col-lg-20">
                  <a href="<?= $logoUrl ?>" class="a-headerLogo__link">
                    <object id="headerLogoObj" class="a-headerLogo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
                  </a>
                </div>
                <?php $navigation->init(); ?>
            <!-- .o-headerWrapper -->
            </div>
          <!-- .container -->
          </div>
        </header>
