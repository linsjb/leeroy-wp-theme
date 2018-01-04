<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header id="header" class="o-header o-header--extendedHeight col-md-12 animated">
            <div class="o-headerLogo col-md-3 col-md-push-1">
              <object id="headerLogo" class="m-headerLogo__logo" type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>">je</object>
            </div>

            <div class="o-headerNav col-md-5 col-md-pull-1 pull-right">
            </div>
        </header>
