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

export function showContactFormMessageField() {
  let parentElement = document.getElementsByClassName('m-contactFormCheckbox')[0];

  if(parentElement) {
    let checkboxId = parentElement.getElementsByTagName('input')[0].id;
    let checkbox = document.querySelector('#' + checkboxId)

    checkbox.addEventListener('change', () => {
      if(checkbox.checked) {
        document.getElementsByClassName('m-contactFormMessage')[0].classList.add('displayBlock');
      } else {
        document.getElementsByClassName('m-contactFormMessage')[0].classList.remove('displayBlock');
      }
    });
  }
}
