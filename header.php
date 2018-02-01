<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php
      wp_head();
      //Initialize Wp navigation
      $navigation = new Navigation();
      $navigation->setLocation('masterMenu');
      $navigation->setContainer('nav');
      $navigation->setContainerClasses('m-header__nav m-header__nav--lightTextColour pull-right' . bootstrapGridWidth(80));
    ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header class="o-header animated <?= bootstrapGridWidth(100, false, true)?>">
          <div class="container">
            <div class="o-headerWrapper <?= bootstrapGridWidth(100) ?>">
                <div class="m-header__logo col-sm-20 col-md-20 col-lg-20 ">
                  <object id="headerLogoObj" class="a-header__logo__logo" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
                </div>
                <?php $navigation->init(); ?>
            <!-- .o-headerWrapper -->
            </div>
          <!-- .container -->
          </div>
        </header>
