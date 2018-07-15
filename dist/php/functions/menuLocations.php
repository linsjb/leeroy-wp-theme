<?php
/*
* Register new menu locations from option's page
*/
function menuLocations() {
  if(have_rows('acfMenuPref', 'option')) {
    while(have_rows('acfMenuPref', 'option')) {
      the_row();

      if(have_rows('acfSiteMenuLocations')) {
        $menu = new NavLocationRegistration;
        while(have_rows('acfSiteMenuLocations')) {
          the_row();
          $menu->regMenu(get_sub_field('location'), get_sub_field('description'));
        }
        $menu->buildMenu();
      }
    }
  }
}
?>
