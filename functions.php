<?php
function leeroy_scripts() {
  wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',array() ,'3.3.7', 'all');
  wp_enqueue_style( 'leeroyCss', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'leeroy_scripts');
