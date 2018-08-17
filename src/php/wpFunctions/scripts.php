<?php
/*
* Filename: scripts.php
* Author: Linus Sjöbro
* Created: 2018-01-01
* Description: Loading scripts and CSS correct WP-way
*/

function leeroyScripts() {
  wp_enqueue_style( 'proximaNovaRegular', get_template_directory_uri() . '/src/fonts/PROXIMA_NOVA/proximanova_regular_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaSemibold', get_template_directory_uri() . '/src/fonts/PROXIMA_NOVA/proximanova_semibold_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaBold', get_template_directory_uri() . '/src/fonts/PROXIMA_NOVA/proximanova_bold_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaLightItalic', get_template_directory_uri() . '/src/fonts/PROXIMA_NOVA/proximanova_lightitalic_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'proximaNovaItalic', get_template_directory_uri() . '/src/fonts/PROXIMA_NOVA/proximanova_italic_macroman/stylesheet.css', array() , '', 'all');
  wp_enqueue_style( 'freightDispPro', get_template_directory_uri() . '/src/fonts/FREIGHT_DISPLAY/MyFontsWebfontsKit.css', array() , '', 'all');

  wp_enqueue_style( 'grid24', get_template_directory_uri() . '/node_modules/@zirafa/bootstrap-grid-only/css/grid24.css', array(),'3.2.0', 'all');
  wp_enqueue_style( 'animateCss', get_template_directory_uri() . '/node_modules/animate.css/animate.min.css', array() , '3.5.2', 'all');
  wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/node_modules/hamburgers/dist/hamburgers.min.css', array() , '0.9.3', 'all');
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/node_modules/flexslider/flexslider.css', array() , '2.7.0', 'all');

  wp_enqueue_style( 'leeroyCss', get_stylesheet_uri(), array(), '1.1.5', 'all');
  wp_enqueue_script('leeroyBundle', get_template_directory_uri() . '/bundle.js', array('jquery'), '1.1.4.1', true);
}

add_action('wp_enqueue_scripts', 'leeroyScripts');
