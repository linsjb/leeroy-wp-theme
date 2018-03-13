<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_head();
    $navigation = new Navigation();
    $navigation->setLocation('masterMenu');
    $navigation->setContainerClasses('m-header__nav m-header__nav--lightTextColour pull-right col-lg-80');

    $mobileNavigation = new Navigation();
    $mobileNavigation->setLocation('masterMenu');
    $mobileNavigation->setContainerClasses('');

    if(is_front_page()) {
      $logoLinkRel = 'm_PageScroll2id';
      $logoUrl = '#topElement';
    } else {
      $logoLinkRel = '';
      $logoUrl = home_url();
    }

    ?>
  </head>
  <body>
    <div class="container-fluid">
      <?php include "headerDesktop.php" ?>
      <?php include "headerMobile.php" ?>
