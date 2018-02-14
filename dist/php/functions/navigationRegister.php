<?php
function navigationRegistration()
{
  register_nav_menus(
    array(
      'masterMenu'  => 'Header menu',
      'business'    => 'Footer left section',
      'aboutLeeroy' => 'Footer middle section',
      'resources'   => 'Footer right section'
    )
  );
}

add_action( 'init', 'navigationRegistration' );
