/* global jQuery */
function setHeaderLogoColor (setColor) {
  var headerLogoObj = document.getElementById('headerLogo');
  var headerSvg = headerLogoObj.contentDocument;
  var svgItems = headerSvg.getElementsByClassName('a-leeroyLogo');

  for (let i = 0; i < svgItems.length; i++) {
    svgItems[i].style.fill = setColor;
  }
}

function setHeaderLogoColorOnLoad (setColor) {
  window.onload = function () {
    setHeaderLogoColor(setColor);
  };
}

setHeaderLogoColorOnLoad('white');

(function ($) {
  let previous = window.scrollY;
  let indexSectionOneHeight = $('.indexSectionOne').height();
  let headerElement = $('.o-header');
  let headerHeight = headerElement.height();

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
      setHeaderLogoColor('black');
      headerElement.removeClass('o-header--extendedHeight').addClass('o-header--background o-header--compressedHeight');
    } else {
      setHeaderLogoColor('white');
      headerElement.addClass('o-header--extendedHeight').removeClass('o-header--background o-header--compressedHeight');
    }
  });
})(jQuery);
