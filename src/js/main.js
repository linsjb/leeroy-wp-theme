/* global jQuery */
import { SvgColor } from './classes/svgColor';

window.onload = function () {
  (function ($) {

    let headerLogo = new SvgColor();
    let headerElement;
    let headerNavElement;

    if(window.innerWidth > 768) {
      console.log('not xs');
      headerElement = $('.o-header');
      headerNavElement = $('.m-header__nav');
      headerLogo.setObject('desktopHeaderLogoObj');
    } else if(window.innerWidth < 768) {
      headerLogo.setObject('mobileHeaderLogoObj');
      headerElement = $('.o-mobileHeader');
      headerNavElement = $('.m-mobileHeader__nav');
      // let headerNavElement = $('.m-mobileHeader__nav');
    }
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('#FDFDFD');


    // Mobile menu
    let mobileHeaderNavigation = document.getElementById('mobileNav');
    let mobileMenu = document.getElementById('mobileHeaderMenu');

    let testa = true;

    mobileHeaderNavigation.addEventListener('click', () => {
      mobileMenu.classList.toggle('visible');
      testa = !testa;

      if(window.pageYOffset > 200 ) {
        headerElement.toggleClass('o-header--background');
      }
      headerLogo.setColor('#FDFDFD');
      if(testa) {
        if(window.pageYOffset < 200) {
          headerLogo.setColor('#FDFDFD');
        } else {
          headerLogo.setColor('#2F2F2F');
        }

      }
    });

    // Menu behaviour withing the scroll
    window.addEventListener('scroll', function () {
      if ($(this).scrollTop() > 200) {
        if(testa) {
          headerLogo.setColor('#2F2F2F');
          headerElement.addClass('o-header--background');
        }
        if(window.innerWidth >= 768) {
          headerNavElement.removeClass('m-header__nav--lightTextColour').addClass('m-header__nav--darkTextColor');
        }
      } else if ($(this).scrollTop() < 200) {
        if(testa) {
          headerLogo.setColor('#FDFDFD');
          headerElement.removeClass('o-header--background');
        }
        if(window.innerWidth >= 768) {
          headerNavElement.addClass('m-header__nav--lightTextColour').removeClass('m-header__nav--darkTextColor');
        }
      }
    });


    // Knowledge hub menu
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

jQuery(document).ready(function() {
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
