<?php
$contactIcon = new AcfImage;
$contactIcon->useSubfield();
$contactIcon->setObject('acfIndSecContactForm', 'icon');
$contactIcon->useElement();
$contactIcon->setClasses('a-contactForm__icon');

if(get_sub_field('acfIndSecContactForm', 'addContent')) {
  $textContent = new AcfText;
  $textContent->useSubfield();
  $textContent->setObject('acfIndSecContactForm', 'content');
  $textContent->setElementType('div');
  $textContent->setClasses('m-indexContactFormTextContent');
}

echo '<div class="container" id="contactUs">';
  if(!$titleUsed) {
    $title->init();
  }
  $titleUsed = true;

  echo '<div class="o-contactFormContent col-xs-24 col-sm-19">';

    if(get_sub_field('acfIndSecContactForm', 'addContent')) {
      $textContent->init();
    }
    
    echo do_shortcode(get_sub_field('acfIndSecContactForm')['shortCode']);
  echo '</div>'; // .o-contactFormContent

  echo '<div class="o-contactFormIcon col-xs-24 col-sm-5">';
    $contactIcon->init();
  echo '</div>'; // .o-contactFormIcon
echo '</div>'; // .container