<?php
//Adding styles and scripts the wordpress way

function leeroy_scripts() {
  //Init. styles
  wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',array() ,'3.3.7', 'all');
  wp_enqueue_style( 'animateCss', get_template_directory_uri() . '/css/animate.min.css', array() , '3.5.2', 'all');
  wp_enqueue_style( 'leeroyCss', get_stylesheet_uri());

  //Init. scripts
  wp_enqueue_script('leeroyJavascript', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'leeroy_scripts');
