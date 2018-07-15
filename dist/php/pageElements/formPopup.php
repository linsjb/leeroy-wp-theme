<?php
function formPopup($title, $formShortCode) {
?>
  <div class="o-formPopupCover"></div>

  <div class="o-popupForm col-xs-24">
    <div class="container m-popupFormContent">
      <div class="a-popupFormTopLeft col-xs-12">
        <h3 class="a-popupFormContent__title"><?= $title ?></h3>
      </div>

      <div class="a-popupFormTopRight col-xs-12">
        <span class="a-popupFormContent__close">
          <img src="<?= get_template_directory_uri() . '/images/close.svg' ?>" alt="">
        </span>
      </div>

      <div class="a-popupFormContent col-xs-24">
        <?= do_shortcode($formShortCode) ?>
      </div>
      <!-- .m-popupFormContent -->
    </div>
    <!-- .o-popupForm -->
  </div>
<?php
}
?>
