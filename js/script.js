/* global jQuery */

(function ($) {
  $(window).scroll(function () {
    // Show/hide the header background
    if ($(this).scrollTop() > 100) {
      $('.header').addClass('header--background');
    } else {
      $('.header').removeClass('header--background');
    }


  });
})(jQuery);
