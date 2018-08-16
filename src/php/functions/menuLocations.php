<?php
/*
* Register new menu locations from option's page
*/
function menuLocations() {
  if(have_rows('acfSiteMenuLocations', 'option')) {
    $menu = new NavLocationRegistration;
    while(have_rows('acfSiteMenuLocations', 'option')) {
      the_row();
      $menu->regMenu(get_sub_field('location'), get_sub_field('description'));
    }
    $menu->buildMenu();
  }

}
?>
