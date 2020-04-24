<?php
/*
 * Template Name: About page
 * Description: Page template for about page.
 */
get_header();

?>
<script type="text/javascript">
  let pageLocation = 'about';
</script>

<?php
if(have_posts()) {
  if(get_field('acfAboutTopChoice') == 'hero') {
    informationPageTop();
  } else {

    $formSectionTitleBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutImgPref', 'backgroundColor', null, false);
    $formSectionTextColor = acfButtonGroup('textColor', 'acfAboutImgPref', 'textColor', null, false);
    $title = new wpContent;
    $title->setContent('title');
    $title->setElementType('h1');
    $title->setClasses('a-informationPage__title ' . $formSectionTextColor);

    $slogan = new AcfText;
    $slogan->setObject('acfAboutImgPref', 'slogan');
    $slogan->setElementType('p');
    $slogan->setClasses('a-informationPage__slogan ' . $formSectionTextColor);

    $topImage = new AcfImage;
    $topImage->setObject('acfAboutImgPref', 'image');
    $topImage->setSize('medium');
    $topImage->useElement();
    $topImage->setClasses('a-informationPageTopImageContent_img');
    ?>
      <div id="topElement" class="o-informationPageImageTop col-xs-24 <?= $formSectionTitleBackgroundColor ?>">
        <div class="container m-informationPageImageTopContainer">
          <div class="a-informationPageTopImage col-xs-24">
            <?php
              $topImage->init();
            ?>
          </div>
          
          <div class="a-informationPageTopImageContent col-xs-24">
            <?php
              $title->init();
              $slogan->init();
            ?>
          </div>
        </div>
      </div>
    <?php
  }

  if(have_rows('acfAboutFlexContent')) {
    while(have_rows('acfAboutFlexContent')) {
      the_row();
      switch(get_row_layout()) {

        // Text content
        // -------------------------------------------------
        // -------------------------------------------------
        case 'acfAboutText':
          include 'aboutTemplateSections/textSection.php';
          break; // case - acfAboutText

        case 'acfAboutOffices':
          include 'aboutTemplateSections/officesSection.php';
          break;

        case 'acfAboutImage':
          include 'aboutTemplateSections/imageSection.php';
          break; // case - acfAboutImage
        
        case 'acfAboutForm':
          include 'aboutTemplateSections/formSection.php';
          break; // case - acfAboutContact
        
        case 'acfAboutDynCells':
          include 'aboutTemplateSections/dynamicCellsSection.php';
        break;
        
        case 'acfAboutCards':
          include 'aboutTemplateSections/cardsSection.php';
          break;
        
        case 'acfAboutList':
          include 'aboutTemplateSections/listSection.php';
          break;
      }
    }
  }
}

get_footer();
?>
