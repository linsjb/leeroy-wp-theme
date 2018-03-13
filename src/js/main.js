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
    let topElementHeight = $('#topElement').height();

    window.addEventListener('scroll', function () {
      if ($(this).scrollTop() > topElementHeight/2) {
        headerLogo.setColor('#2F2F2F');
        headerElement.addClass('o-header--background');
        headerNavElement.removeClass('m-header__nav--lightTextColour').addClass('m-header__nav--darkTextColor');
      } else if ($(this).scrollTop() < topElementHeight/2) {
        headerLogo.setColor('#FDFDFD');
        headerElement.removeClass('o-header--background');
        headerNavElement.addClass('m-header__nav--lightTextColour').removeClass('m-header__nav--darkTextColor');
      }
    });

    let test = document.getElementsByClassName('test');
    let testArray = [];
    for (var i = 0; i < test.length; i++) {
      testArray.push(test[i]);
    }

    let dropdown = document.getElementById('knowledgeHubDropdown');
    let assignedId;

    testArray.map((arr) => {
      arr.addEventListener('click', () => {
        dropdown.classList.toggle('visible');
      });
    });

  })(jQuery);
};

jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel({
    items: 1,
    autoHeight: true
  });

  jQuery('.o-knowledgeHubGrid').masonry({
    itemSelector: '.m-knowledgeHubCell',
    percentPosition: true,
    horizontalOrder: true,
    gutter: 10
  });

});
