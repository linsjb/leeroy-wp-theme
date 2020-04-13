export function formPopup() {
  if (pageLocation == "products") {
    let closeButton = document.getElementsByClassName(
      "a-popupFormContent__close"
    )[0];
    let openButtons = Array.from(
      document.getElementsByClassName("a-alternatingContent__button")
    );

    openButtons.map((button) => {
      button.addEventListener("click", function () {
        document.getElementsByClassName("o-formPopupCover")[0].style.display =
          "block";

        let popup = document.getElementsByClassName("o-popupForm")[0];
        popup.style.display = "block";
        popup.style.top =
          Math.round(Math.abs(popup.getBoundingClientRect().top)) + 80 + "px";
      });
    });

    closeButton.addEventListener("click", function () {
      document.getElementsByClassName("o-formPopupCover")[0].style.display =
        "none";

      let popup = document.getElementsByClassName("o-popupForm")[0];
      popup.style.display = "none";
      popup.style.top = 0;
    });
  }
}
