export default function language() {
    (function ($) {

      let languageButton;
      if(window.document.documentElement.clientWidth < 992) {
        languageButton = document.getElementById('mobileLang');

      } else {
        languageButton = document.getElementById('desktopLang');
      }

      popupOffset(languageButton);

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
  let flagPosition;
  if(window.document.documentElement.clientWidth < 992) {
    flagPosition = document.getElementById('mobileLangFlag').getBoundingClientRect();
  } else {
    flagPosition = document.getElementById('desktopLangFlag').getBoundingClientRect();
  }
  let popupElement = document.getElementsByClassName('o-languageSelector')[0];

  popupElement.style.left = Math.floor(buttonPosition.left + (languageButton.offsetWidth/2) - (popupElement.offsetWidth/2)) + 'px';
  popupElement.style.top = flagPosition.top + flagPosition.height + 2 + 'px';
}
