/* global jQuery */
import { SvgColor } from './classes/svgColor';

window.onload = function () {
  (function ($) {
    let headerLogo = new SvgColor();
    headerLogo.setObject('headerLogoObj');
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('#FDFDFD');

    let headerElement = $('.o-header');
    let headerNavElement = $('.m-header__nav');

    window.addEventListener('scroll', function () {
      if ($(this).scrollTop() > 120) {
        headerLogo.setColor('#2F2F2F');
        headerElement.addClass('o-header--background');
        headerNavElement.removeClass('m-header__nav--lightTextColour').addClass('m-header__nav--darkTextColor');
      } else if ($(this).scrollTop() < 120) {
        headerLogo.setColor('#FDFDFD');
        headerElement.removeClass('o-header--background');
        headerNavElement.addClass('m-header__nav--lightTextColour').removeClass('m-header__nav--darkTextColor');
      }
    });
  })(jQuery);
};
