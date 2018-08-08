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


  if(isset($_GET['lang'])) {
    setcookie('language', $_GET['lang'], 0, COOKIEPATH, COOKIE_DOMAIN);
  }

  if(!isset($_COOKIE['language'])) {
    echo "Cookie is not set. </br> Set's the cookie";
    setcookie('language', 'sv', 0, COOKIEPATH, COOKIE_DOMAIN);
  }
}
?>
