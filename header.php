<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_head();

    $navigation = new Navigation();
    $mobileNavigation = new Navigation();

    // Language control
    Switch($_COOKIE['language']) {
      case 'en':
        $engLang = '-current';
        $sweLang = '';
        $flag = get_template_directory_uri() . '/images/united-kingdom.svg';
        $navigation->setLocation(get_field('acfHeaderOptDeskPref', 'option')['desktopHeaderLocationEng']);
        $mobileNavigation->setLocation(get_field('acfHeaderOptmobPref', 'option')['mobileHeaderLocationEng']);
        break;

      case 'sv':
        $engLang = '';
        $sweLang = '-current';
        $flag = get_template_directory_uri() . '/images/sweden.svg';
        $navigation->setLocation(get_field('acfHeaderOptDeskPref', 'option')['desktopHeaderLocationSwe']);
        $mobileNavigation->setLocation(get_field('acfHeaderOptmobPref', 'option')['mobileHeaderLocationSwe']);
        break;

      default:
        $engLang = '';
        $sweLang = '-current';
        $flag = get_template_directory_uri() . '/images/sweden.svg';
        $navigation->setLocation(get_field('acfHeaderOptDeskPref', 'option')['desktopHeaderLocationSwe']);
        $mobileNavigation->setLocation(get_field('acfHeaderOptMobPref', 'option')['mobileHeaderLocationSwe']);
        break;
    }

    $navigation->setContainerClasses('m-header__nav col-md-20');
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

      <div class="o-clickBlanket" id="languageSelectorBlanket"></div>

      <form class="o-languageSelector visibilityHidden" method="post">
        <div class="o-languageSelector__arrow"></div>
        <ul class="m-languageSelectorList">
          <li class="a-languageSelectorListItem">
            <input class="a-languageSelectorListItem__link <?= $sweLang ?>" type="submit" name="langSv" value="Svenska">
            <!-- <a class="a-languageSelectorListItem__link <?= $sweLang ?>" href="?<?= http_build_query(array('lang'=>'sv')) . "\n";?>">Svenska</a> -->
          </li>

          <li class="a-languageSelectorListItem">
            <input class="a-languageSelectorListItem__link <?= $engLang ?>" type="submit" name="langEn" value="English">
            <!-- <a class="a-languageSelectorListItem__link <?= $engLang ?>" href="?<?= http_build_query(array('lang'=>'en')) . "\n";?>">English</a> -->
          </li>
        </ul>
      </form>
