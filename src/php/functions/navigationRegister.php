<?php
function navigationRegistration()
{
  register_nav_menu('masterMenu',( 'masterMenu' ));
}

add_action( 'init', 'navigationRegistration' );
