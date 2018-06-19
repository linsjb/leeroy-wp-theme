export default function language() {
    (function ($) {
      let languageButton = document.getElementsByClassName('m-headerLanguage')[0];

      popupOffset(languageButton);

      let selectorVisiblity = false;
      let languageSelector = $('.o-languageSelector');
      let blanket = document.getElementById('languageSelectorBlanket');


      languageButton.addEventListener('click', function() {
        blanket.style.visibility = 'visible';

        languageSelector.removeClass('visibilityHidden').addClass('visibilityVisible');
        languageSelector.addClass('animated').removeClass('slideOutUp').addClass('slideInDown');

        blanket.addEventListener('click', function() {
          blanket.style.visibility = 'hidden';
          languageSelector.addClass('slideOutUp').removeClass('slideInDown');
        });
      });
    })(jQuery);
}

// Keeps track of the popup offset from the right edge
function popupOffset(languageButton) {
  let buttonPosition = languageButton.getBoundingClientRect();
  let popupElement = document.getElementsByClassName('o-languageSelector')[0];
  popupElement.style.left = Math.floor(buttonPosition.left + (languageButton.offsetWidth/2) - (popupElement.offsetWidth/2)) + 'px';
}
