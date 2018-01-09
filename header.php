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
      $navigation->setContainerClasses('m-headerNav col-md-70 col-sm-70 col-lg-70 col-md-pull-1 pull-right');
    ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header id="header" class="o-header o-header--extendedHeight animated <?php bootstrapGrid(100, false, true)?>">
          <object id="headerLogo" class="m-header__logo col-md-30 col-md-push-1" type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>">je</object>
          <?php $navigation->init(); ?>
        </header>
