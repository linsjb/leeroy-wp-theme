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
    
    wp_redirect(home_url());
    exit;
  }

  if(!isset($_COOKIE['language'])) {
    setcookie('language', 'sv', 0, COOKIEPATH, COOKIE_DOMAIN);
  }
}
?>
