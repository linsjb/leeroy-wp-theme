<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WCSNWKS');</script>
    <!-- End Google Tag Manager -->

    <?php
    wp_head();

    $navigation = new Navigation();
    $mobileNavigation = new Navigation();

    // Language control
    Switch($_COOKIE['language']) {
      case get_field('acfLangOptPrimLang', 'option')['code']:
        $primaryLanguage = '-current';
        $secondaryLanguage = '';
        $flag = get_field('acfLangOptPrimLang', 'option')['icon']['url'];
        $navigation->setLocation(get_field('acfHeaderOptDeskPref', 'option')['primLangDesktop']);
        $mobileNavigation->setLocation(get_field('acfHeaderOptmobPref', 'option')['primLangMobile']);
        break;

      case get_field('acfLangOptSecLang', 'option')['code']:
        $secondaryLanguage = '-current';
        $primaryLanguage = '';
        $flag =  get_field('acfLangOptSecLang', 'option')['icon']['url'];
        $navigation->setLocation(get_field('acfHeaderOptDeskPref', 'option')['secLangDesktop']);
        $mobileNavigation->setLocation(get_field('acfHeaderOptmobPref', 'option')['secLangMobile']);
        break;

      default:
        $primaryLanguage = '-current';
        $secondaryLanguage = '';
        $flag = get_field('acfLangOptPrimLang', 'option')['icon']['url'];
        $navigation->setLocation(get_field('acfHeaderOptDeskPref', 'option')['primLangDesktop']);
        $mobileNavigation->setLocation(get_field('acfHeaderOptmobPref', 'option')['primLangMobile']);
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCSNWKS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
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
            <input class="a-languageSelectorListItem__link <?= $primaryLanguage ?>" type="submit" name="primLang" value="<?= get_field('acfLangOptPrimLang', 'option')['language']; ?>">
          </li>

          <li class="a-languageSelectorListItem">
            <input class="a-languageSelectorListItem__link <?= $secondaryLanguage ?>" type="submit" name="secLang" value="<?= get_field('acfLangOptSecLang', 'option')['language']; ?>">
          </li>
        </ul>
      </form>
