export function postAuthor() {
  (function ($) {
    if($(window).width() >=768 ) {
      let postAuthorHeight = $('#postAuthor').outerHeight(true);
      let postAuthorDescriptionHeight = $('#postAuthorDesc').outerHeight(true);

      let postAuthorContent = $('#postAuthorContent');
      let postAuthorContentHeight = postAuthorContent.outerHeight(true);
      postAuthorContent.css("margin-top", (postAuthorHeight - (postAuthorContentHeight + postAuthorDescriptionHeight))/2);
    }
  })(jQuery);
}

export function indexCardCarousel() {
  (function ($) {
    $(".owl-carousel").owlCarousel({
      items: 1,
      autoHeight: true
    });
  })(jQuery);
}

export function postFlexSlider() {
  (function ($) {
    $('#slider').flexslider({
      animation: "slide",
      animationLoop: false,
      slideshow: false,
      smoothHeight: true,
    });

  })(jQuery);
}
