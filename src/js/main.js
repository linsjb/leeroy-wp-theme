/* global jQuery */
import { SvgColor } from './classes/svgColor';

window.onload = function () {
  (function ($) {
    let headerLogo = new SvgColor();
    headerLogo.setObject('headerLogoObj');
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('white');

    let previous = window.scrollY;
    let indexSectionOneHeight = $('.o-indexSectionOne').height();
    let headerElement = $('.o-header');
    let headerHeight = headerElement.height();

    let headerNavElement = $('.m-header__nav');

    window.addEventListener('scroll', function () {
      if ($(window).scrollTop() > indexSectionOneHeight + 30) {
        if (window.scrollY > previous) { // Scrolling up
          headerElement.addClass('slideOutUp').removeClass('slideInDown');
        } else { // Scrolling down
          headerElement.addClass('slideInDown').removeClass('slideOutUp');
        }
        previous = window.scrollY;
      }
      // Show/hide header background
      if ($(this).scrollTop() > (indexSectionOneHeight / 2) - headerHeight) {
        headerLogo.setColor('black');
        headerElement.removeClass('o-header--extendedHeight').addClass('o-header--background o-header--compressedHeight');
        headerNavElement.removeClass('m-header__nav--extendedTextColor').addClass('m-header__nav--compressedTextColor');
      } else {
        headerLogo.setColor('white');
        headerElement.addClass('o-header--extendedHeight').removeClass('o-header--background o-header--compressedHeight');
        headerNavElement.addClass('m-header__nav--extendedTextColor').removeClass('m-header__nav--compressedTextColor');
      }
    });
  })(jQuery);
};
