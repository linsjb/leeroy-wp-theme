import { SvgColor } from './classes/svgColor';

let didScroll;
let lastScrollTop = 0;
let delta = 10;
let headerElement;

export default function headerBehaviour () {
  (function ($) {
    let navigationElement;

    // Variable to control the behaviour of the logo.
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

    // Mobile menu button click
    mobileNavigationButton.addEventListener('click', () => {

      $('#mobileNavBtn').toggleClass('is-active');

      // Animate mobile menu to slide down/up
      switch(mobileMenuVisible) {
        case true:
          $('#mobileHeaderMenu').addClass('slideOutUp').removeClass('slideInDown').one(animationEnds, () =>{
            $(this).css('visibility', 'hidden');
          });
          break;

        case false:
          $('#mobileHeaderMenu').addClass('slideInDown').removeClass('slideOutUp').css('visibility', 'visible');
          break;
      }

      logoBehaviour = !logoBehaviour;
      headerLogo.setColor(whiteColor);
      mobileMenuVisible = !mobileMenuVisible;

      /*
      * Have the user scrolled down more than scroll offset?
      * If that's the case. The header background is going to be toggled.
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
    * And only if the page width is > 768 px (bootstrap col-sm).
    */
    if(window.innerWidth >= 768) {
      if(window.pageYOffset > scrolloffset) {
        navigationElement.addClass('m-header__nav--darkTextColor');
        headerElement.addClass('o-header--background');
        headerLogo.setColor(blackColor);
      }
    }


    // Scroll listener
    window.addEventListener('scroll', function () {

        didScroll = true;
        setInterval(function() {
          if(didScroll) {
            if($(this).scrollTop() > 500) {
              hasScrolled();
              didScroll = false;
            }
          }
        }, 250);

      // Has the user scrolled over the scroll offset?
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


function hasScrolled() {
  (function ($) {
    let st = $(window).scrollTop();
    if(Math.abs(lastScrollTop - st) <=delta) {
      return;
    }

    if(st > lastScrollTop && st > 20) {
      // Scrolling down
      headerElement.removeClass('fadeIn').addClass('animated').addClass('fadeOut');
    } else {
      // Scrolling upp
      headerElement.removeClass('fadeOut').addClass('fadeIn');
    }

    lastScrollTop = st;
  })(jQuery);
}
