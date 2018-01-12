<?php
/*
* Filename: scripts.php
* Author: Linus Sjöbro
* Created: 2018-01-01
* Description: Loading scripts and CSSes correct WP-way
*/

function leeroy_scripts() {
  //Init. styles
  // wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',array() ,'3.3.7', 'all');
  wp_enqueue_style( 'grid100', get_template_directory_uri() . '/src/css/grid100.css', array(),'3.2.0', 'all');
  wp_enqueue_style( 'animateCss', get_template_directory_uri() . '/src/css/animate.min.css', array() , '3.5.2', 'all');
  wp_enqueue_style( 'proximaNovaRegular', get_template_directory_uri() . '/src/fonts/proximanova_regular_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaBold', get_template_directory_uri() . '/src/fonts/proximanova_bold_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'leeroyCss', get_stylesheet_uri());

  //Init. scripts
  wp_enqueue_script('leeroyBundle', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'leeroy_scripts');
