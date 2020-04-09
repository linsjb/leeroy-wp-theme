<?php
echo '<div class="container">';
if(!$titleUsed) {
  $title->init();
}
$titleUsed = true;

echo '<div class="o-contactFormContent col-xs-24 col-sm-19">';
  echo do_shortcode(get_sub_field('acfIndSecContCode'));
echo '</div>'; // .o-contactFormContent

echo '<div class="o-contactFormIcon col-xs-24 col-sm-5">';
  $contactIcon = new AcfImage;
  $contactIcon->useSubfield();
  $contactIcon->setObject('acfIndSecContIcon');
  $contactIcon->useElement();
  $contactIcon->setClasses('a-contactForm__icon');
  $contactIcon->init();
echo '</div>'; // .o-contactFormIcon
echo '</div>'; // .container