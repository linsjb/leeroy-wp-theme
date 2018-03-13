<?php
/*
* Filename: scripts.php
* Author: Linus Sjöbro
* Created: 2018-01-01
* Description: Loading scripts and CSS correct WP-way
*/

function leeroyScripts() {
  wp_enqueue_style( 'proximaNovaRegular', get_template_directory_uri() . '/dist/fonts/PROXIMA_NOVA/proximanova_regular_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaSemibold', get_template_directory_uri() . '/dist/fonts/PROXIMA_NOVA/proximanova_semibold_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaBold', get_template_directory_uri() . '/dist/fonts/PROXIMA_NOVA/proximanova_bold_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaLightItalic', get_template_directory_uri() . '/dist/fonts/PROXIMA_NOVA/proximanova_lightitalic_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'freightDispPro', get_template_directory_uri() . '/dist/fonts/FREIGHT_DISPLAY/MyFontsWebfontsKit.css', array() , '', 'all');

  wp_enqueue_style( 'grid100', get_template_directory_uri() . '/dist/css/grid100.css', array(),'3.2.0', 'all');
  wp_enqueue_style( 'animateCss', get_template_directory_uri() . '/dist/css/animate.min.css', array() , '3.5.2', 'all');
  wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/dist/css/hamburgers.min.css', array() , '0.9.3', 'all');

  wp_enqueue_style( 'owlCarouselCss', get_template_directory_uri() . '/dist/css/owl.carousel.min.css', array() , '2.2.1', 'all');
  wp_enqueue_style( 'owlCarouselThemeCss', get_template_directory_uri() . '/dist/css/owl.theme.default.min.css', array() , '2.2.1', 'all');

  wp_enqueue_style( 'leeroyCss', get_stylesheet_uri());

  wp_enqueue_script('owlCarousel', get_template_directory_uri() . '/dist/js/owl.carousel.min.js', array('jquery'), '2.2.1', true);
  wp_enqueue_script('Masonry', get_template_directory_uri() . '/dist/js/masonry.pkgd.min.js', array('jquery'), '2.2.1', true);
  wp_enqueue_script('leeroyBundle', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'leeroyScripts');
