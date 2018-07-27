<?php
/** @file
* Add's language-support for the site.
*
* For this to work we need to set a cookie.
* When the cookie is set the page will update. And the other language will be displayed.
*
*/
add_action('init', 'language');

function language() {
  global $language;

  // Set's the cookie
  if(isset($_POST['langSv'])) {
    $language = 'sv';
    setcookie('language', 'sv', time()+3600, COOKIEPATH, COOKIE_DOMAIN);
  }

  if(isset($_POST['langEn'])) {
    $language = 'en';
    setcookie('language', 'en', time()+3600, COOKIEPATH, COOKIE_DOMAIN);
  }


  if(isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
  } else {
    setcookie('language', 'sv', time()+3600, COOKIEPATH, COOKIE_DOMAIN);
    $language = 'sv';
  }
}
?>
