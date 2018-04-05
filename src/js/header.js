import { SvgColor } from './classes/svgColor';

/*!
* trert
*/
export default function headerBehaviour () {
  (function ($) {
    let headerElement;
    let navigationElement;

    // Variable to control the behaiour of the logo.
    // This is needed because of the mobile header.
    let logoBehaviour = true;

    let mobileMenuVisible = false;

    let whiteColor = '#fdfdfd';
    let blackColor = '#2f2f2f';

    let mobileNavigationButton = document.getElementById('mobileNavBtn');
    let mobileMenu = document.getElementById('mobileHeaderMenu');

    // How far the user need's to scroll before magic happens.
    let scrolloffset = 200;

    let headerLogo = new SvgColor();

    let animationEnds = 'animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';
    /*
    * What is the width of the browser?
    * If the width if equal of greater than 768 (bootstrap col-sm), we will assign the variables the elements of the dektop header and menu.
    * If the width is less than 768 (bootstrap col-xs), we will assign the variables the elements of the mobile header and menu.
    */
    if(window.innerWidth >= 768) {
      headerElement = $('.o-header');
      navigationElement = $('.m-header__nav');
      headerLogo.setObject('desktopHeaderLogoObj');
    } else if(window.innerWidth < 768) {
      headerElement = $('.o-mobileHeader');
      navigationElement = $('.m-mobileHeader__nav');
      headerLogo.setObject('mobileHeaderLogoObj');
    }

    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor(whiteColor);

    mobileNavigationButton.addEventListener('click', () => {

      $('#mobileNavBtn').toggleClass('is-active').addClass('test');

      // Animate mobile menu to slide down/up
      switch(mobileMenuVisible) {
        case true:
          $('#mobileHeaderMenu').addClass('slideOutUp').removeClass('slideInDown').one(animationEnds, () =>{
            $(this).removeClass('test');
          });
          break;

        case false:
          $('#mobileHeaderMenu').addClass('slideInDown').removeClass('slideOutUp').addClass('test');
          break;
      }

      logoBehaviour = !logoBehaviour;
      headerLogo.setColor(whiteColor);
      mobileMenuVisible = !mobileMenuVisible;

      /*
      * Have the user scrolled down more than 200 px?
      * If it's the case. The header background is going to be toggled.
      * Reason for this is simple. When the mobile menu is open we don't want the header to have a background
      */
      if(window.pageYOffset > scrolloffset) {
        headerElement.toggleClass('o-header--background');
        $('#mobileNavBtn').toggleClass('m-mobileHeaderMenuBtn--darkColor');
      }
      if(logoBehaviour) {
        if(window.pageYOffset < scrolloffset) {
          headerLogo.setColor(whiteColor);
        } else {
          headerLogo.setColor(blackColor);
        }
      }
    }); // Mobile menu button event listener


    /*
    * Set's the header background and dark text color
    * in case that the page is not at the top when it's loaded.
    */
    if(window.pageYOffset > scrolloffset) {
      navigationElement.addClass('m-header__nav--darkTextColor');
      headerElement.addClass('o-header--background');
      headerLogo.setColor(blackColor);
    }

    let previous = window.scrollY;
    let opacity = 100;
    let up = 0;
    let res;
    // the scroll behaviour
    window.addEventListener('scroll', function () {
      res = previous;
      // Test
      if(window.scrollY > previous) {
        let down = res;
        console.log(down);
      } else if(window.scrollY < previous) {
        console.log('up');
      }

      previous = window.scrollY;
      if ($(this).scrollTop() > scrolloffset) {
        if(logoBehaviour) {
          headerLogo.setColor(blackColor);
          headerElement.addClass('o-header--background');
          $('#mobileNavBtn').addClass('m-mobileHeaderMenuBtn--darkColor');
        }

        if(window.innerWidth >= 768) {
          navigationElement.addClass('m-header__nav--darkTextColor');
        }
      } else if ($(this).scrollTop() < scrolloffset) {
        if(logoBehaviour) {
          headerLogo.setColor(whiteColor);
          headerElement.removeClass('o-header--background');
          $('#mobileNavBtn').removeClass('m-mobileHeaderMenuBtn--darkColor');
        }

        if(window.innerWidth >= 768) {
          navigationElement.removeClass('m-header__nav--darkTextColor');
        }
      }
    });
  })(jQuery);
} // headerBahaviour
