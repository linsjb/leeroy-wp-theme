<?php
/** @file
* Add's language-support for the site.
*
* For this to work we need to set a cookie.
* When the cookie is set the page will update. And the other language will be displayed.
*
*/

function language() {
  if(isset($_POST['primLang'])) {
    setcookie('language', get_field('acfLangOptPrimLang', 'option')['code'], 0, COOKIEPATH, COOKIE_DOMAIN);
    wp_redirect(home_url() . $_SERVER['REQUEST_URI']);
    exit;
  }

  if(isset($_POST['secLang'])) {
    setcookie('language', get_field('acfLangOptSecLang', 'option')['code'], 0, COOKIEPATH, COOKIE_DOMAIN);
    wp_redirect(home_url() . $_SERVER['REQUEST_URI']);
    exit;
  }

  if(!isset($_COOKIE['language'])) {
    setcookie('language', get_field('acfLangOptPrimLang', 'option')['code'], 0, COOKIEPATH, COOKIE_DOMAIN);
    wp_redirect(home_url() . $_SERVER['REQUEST_URI']);
    exit;
  }
}
?>
