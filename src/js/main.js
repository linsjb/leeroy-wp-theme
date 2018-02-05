/* global jQuery */
import { SvgColor } from './classes/svgColor';

window.onload = function () {
  (function ($) {
    let headerLogo = new SvgColor();
    headerLogo.setObject('headerLogoObj');
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('#FDFDFD');

    let previous = window.scrollY;
    let headerElement = $('.o-header');

    let headerNavElement = $('.m-header__nav');

    // Listen wich direction we are scrolling in.
    window.addEventListener('scroll', function () {
      if ($(window).scrollTop() > 20) {
        if (window.scrollY > previous) { // Scrolling up
          // headerElement.fadeOut('slow');
        } else { // Scrolling down
          // headerElement.fadeIn('slow');
        }
        previous = window.scrollY;
      }

      // When the header is not visible anymore, add the headerbackgorund and change the nav and logo to white.
      if ($(this).scrollTop() > 60) {
        headerLogo.setColor('#2F2F2F');
        headerElement.addClass('o-header--background');
        headerNavElement.removeClass('m-header__nav--lightTextColour').addClass('m-header__nav--darkTextColor');
      }

      // Hide headerbackground and change back the color on logo and nav to white when we reach the top of the window.
      if ($(this).scrollTop() < 60) {
        headerLogo.setColor('#FDFDFD');
        headerElement.removeClass('o-header--background');
        headerNavElement.addClass('m-header__nav--lightTextColour').removeClass('m-header__nav--darkTextColor');
      }

    });
  })(jQuery);
};
