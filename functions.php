<?php
function leeroyScripts() {
  wp_enqueue_style( 'leeroy-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'leeroyScripts');
