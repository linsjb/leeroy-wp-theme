// import Underscore from 'underscore';

export function postFlexSlider() {(function ($) {
  $('#slider').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
    smoothHeight: true,
  });
})(jQuery);}

export function indexTopContent() {
  if(pageLocation == 'index') {
    let topSection = document.getElementsByClassName('m-topIndexSection')[0];
    let contentMiddle = document.getElementsByClassName('a-topIndexSectionContent')[0].offsetHeight/2;
    let topSectionImage = document.getElementsByClassName('m-topIndexSection__image')[0];

    if(window.innerWidth < 992) {

      if(window.innerHeight < window.innerWidth) {
        topSectionImage.style.height = '100vh';
        topSection.style.height = window.innerHeight + contentMiddle + 'px';
      } else if(window.innerWidth < 768) {
        topSection.style.height = window.innerHeight + contentMiddle - window.innerHeight*0.5 + 'px';
      }
    } else {
      topSection.style.height = window.innerHeight + contentMiddle - window.innerHeight*0.4 + 'px';
    }
  }
}
