// import Underscore from 'underscore';



export function postFlexSlider() {(function ($) {
  $('#slider').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
    smoothHeight: true,
  });
})(jQuery);}

export function formPopup() {
  let closeButton = document.getElementsByClassName('a-popupFormContent__close')[0];
  let openButtons = Array.from(document.getElementsByClassName('a-twoColumnsProductPage__button'));

  openButtons.map((button) => {
    button.addEventListener('click', function() {
      document.getElementsByClassName('o-popupForm')[0].style.display = 'block';
      document.getElementsByClassName('o-formPopupCover')[0].style.display = 'block';

    });
  });

  closeButton.addEventListener('click', function() {
    document.getElementsByClassName('o-popupForm')[0].style.display = 'none';
    document.getElementsByClassName('o-formPopupCover')[0].style.display = 'none';
  });
}
