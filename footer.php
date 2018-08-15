    <?php
    wp_footer();


    if(is_front_page()) {
      $logoUrl = '#topElement';
      $logoLinkRel = 'm_PageScroll2id';
    } else {
      $logoUrl = home_url();
      $logoLinkRel = '';
    }

    $footerBackgroundColor = get_field('acfFooterPref', 'options')['backgroundColor'];
    ?>
    <div class="o-footer col-xs-24 <?= $footerBackgroundColor ?>">
      <a rel="<?= $logoLinkRel ?>" href="<?= $logoUrl ?>" class="m-footerLogo">
        <object class="m-footerLogo__img" type="image/svg+xml" data="<?= get_template_directory_uri() . '/images/leeroyStdLogo.svg' ?>"></object>
      </a>
      <p class="o-footer__slogan"><?= get_bloginfo('description') ?></p>

      <div class="container">
        <?php
        if(have_rows('acfFooterMenuPref', 'option')) {
          while(have_rows('acfFooterMenuPref', 'option')) {
            the_row();

            $numOfMenus = count(get_sub_field('acfFooterMenus'));
            $footerColumnWidth = 'col-sm-' . (24/$numOfMenus);

            if(have_rows('acfFooterMenus')) {
              while(have_rows('acfFooterMenus')) {
                the_row();
                ?>
                <div class="m-footerContentColumn col-xs-24 <?= $footerColumnWidth ?>">
                  <?php
                  $wpMenu = new Navigation;
                  $wpMenu->setContainerClasses('a-footerContentColumn__nav');

                  $navTitle = new AcfMenuFields;

                  // Language control
                  switch($_COOKIE['language']) {
                    case get_field('acfLangOptPrimLang', 'option')['code']:
                      $navTitle->setSubField('primLangTitle');
                      $navTitle->setMenuObject(get_sub_field('footerPrimLangLoc'));
                      $wpMenu->setLocation(get_sub_field('footerPrimLangLoc'));
                      break;

                    case get_field('acfLangOptSecLang', 'option')['code']:
                      $navTitle->setSubField('secLangTitle');
                      $navTitle->setMenuObject(get_sub_field('footerSecLangLoc'));
                      $wpMenu->setLocation(get_sub_field('footerSecLangLoc'));
                      break;

                    default:
                      $navTitle->setSubField('primLangTitle');
                      $navTitle->setMenuObject(get_sub_field('footerPrimLangLoc'));
                      $wpMenu->setLocation(get_sub_field('footerPrimLangLoc'));
                      break;
                  }

                  $navTitle->setElementType('h5');
                  $navTitle->init();

                  if(get_sub_field('useTitleLink')) {
                      $navTitle->setUrl(get_sub_field('titleLink')['url']);
                      $navTitle->setUrlClasses('a-footerContentColumnLink');
                      $navTitle->setElementClasses('a-footerContentColumnLink__title');
                  } else {
                    $navTitle->setElementClasses('m-footerContentColumn__title');
                  }
                  $wpMenu->init();

                  ?>
                  <!-- .m-footerContentColumn -->
                </div>
                <?php
              }
            }
          }
        }
        ?>
        <!-- .container -->
      </div>
      <!-- .o-footer -->
    </div>
    <!-- .container-fluid -->
  </div>
</body>
</html>
