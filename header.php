<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_head();
    $navigation = new Navigation();
    $navigation->setLocation('masterMenu');
    $navigation->setContainerClasses('m-header__nav pull-right col-md-19');

    $mobileNavigation = new Navigation();
    $mobileNavigation->setLocation('mobileMasterMenu');
    $mobileNavigation->setContainerClasses('m-mobileHeader__nav');

    if(is_front_page()) {
      $logoLinkRel = 'm_PageScroll2id';
      $logoUrl = '#top-element';
    } else {
      $logoLinkRel = '';
      $logoUrl = home_url();
    }

    ?>
  </head>
  <body>
    <div class="container-fluid">
      <?php
      if(!is_404()) {
        include "headerDesktop.php";
        include "headerMobile.php";
      }
      ?>
