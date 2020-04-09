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
  informationPageTop();

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
