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
  $cookieStatus = false;

  // Set's the cookie
  if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $language = $lang;
    setcookie('language', $lang, time()+3600, COOKIEPATH, COOKIE_DOMAIN);
    $cookieStatus = true;
  }

  if(!$cookieStatus) {
    if(isset($_COOKIE['language'])) {
      $language = $_COOKIE['language'];
    }
  }
}
?>
