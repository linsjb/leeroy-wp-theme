// import Underscore from 'underscore';

export function indexCardCarousel() {
  (function ($) {
    $(".owl-carousel").owlCarousel({
      items: 1,
      autoHeight: true
    });
  })(jQuery);
}

export function postFlexSlider() {(function ($) {
  $('#slider').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
    smoothHeight: true,
  });
})(jQuery);}
