<?php
function formPopup() {
?>
  <div class="o-formPopupCover"></div>

  <div class="o-popupForm col-xs-24">
    <div class="container m-popupFormContent">
      <div class="a-popupFormTopLeft col-xs-12">
        <h3 class="a-popupFormContent__title">Book a demo</h3>
      </div>

      <div class="a-popupFormTopRight col-xs-12">
        <span class="a-popupFormContent__close">X</span>
      </div>

      <div class="a-popupFormContent col-xs-24">
        <?= do_shortcode('[caldera_form id="CF5b297e2b82821"]') ?>
      </div>
      <!-- .m-popupFormContent -->
    </div>
    <!-- .o-popupForm -->
  </div>
<?php
}
?>
