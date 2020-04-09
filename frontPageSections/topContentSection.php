<?php
 $contentImage = new AcfImage;
 $contentImage->useSubfield();
 $contentImage->setObject('acfIndSecTopContImg', 'image');
 $contentImage->setSize('large');

 $overlappingImage = new AcfImage;
 $overlappingImage->useSubfield();
 $overlappingImage->setObject('acfIndSecTopContOverImg', 'image');
 $overlappingImage->setSize('large');
 $overlappingImage->useElement();
 $overlappingImage->setClasses('m-indexSectionTopContent__image col-xs-24 col-sm-20 col-sm-offset-2');

 $sectionImageTintOpacity = acfButtonGroup('opacity', 'acfIndSecTopContImg', 'tintOpacity', null, true);
 $sectionImageTintColor = acfButtonGroup('backgroundColor', 'acfIndSecTopContImg', 'tintColor', null, true);

 if(get_sub_field('isOngoingCampaign')) {
    $campaignDescription = new AcfText;
    $campaignDescription->useSubfield();
    $campaignDescription->setObject('acfIndSecTopContCampaign','description');
    $campaignDescription->setElementType('div');
    $campaignDescription->setClasses('');

    $campaignButton = new AcfText;
    $campaignButton->useSubfield();
    $campaignButton->setObject('acfIndSecTopContCampaign','link');

    $campaignTextColor = acfButtonGroup('textColor', 'acfIndSecTopContCampaign', 'textColor', null, true);
    $campaignAlignment = acfButtonGroup('textAlignment', 'acfIndSecTopContCampaign', 'alignment', null, true);
}
 
 echo '<div class="m-topIndexSection">';
 echo '<div class="blue m-topIndexSection__image col-xs-24" style="background: url(' . $contentImage->init() . '); background-position: 50% 50%; background-repeat: no-repeat; background-size: cover;">';
 if(get_sub_field('acfIndSecTopContImg')['tintImage']) {
     echo '<div class="col-xs-24 a-elementTint ' . $sectionImageTintOpacity . ' ' . $sectionImageTintColor .'"></div>';
    }
    echo '</div>'; // .m-topIndexSection__image
    
    // Overlaping element
    echo '<div class="a-topIndexSectionContent col-xs-24">';
    echo '<div class="container">';

        if(get_sub_field('isOngoingCampaign')) {
            echo '<div class="a-topIndexSectionCampaign ' . $campaignTextColor . ' ' . $campaignAlignment . '">';
                $campaignDescription->init();
                echo '<a class="a-btn -btnGold" href="' . $campaignButton->init() . '">Read more</a>';
            echo '</div>';
        }

       if(!$titleUsed) {
         $title->init();
       }
       $titleUsed = true;

       if(get_sub_field('acfIndSecTopContTag')['useTagline']) {
         $taglineAlignment = acfButtonGroup('textAlignment', 'acfIndSecTopContTag', 'alignment', null, true);
         $taglineColor = acfButtonGroup('textColor', 'acfIndSecTopContTag', 'color', null, true);

         echo '<h3 class="a-indexSectionTopContent__tagline ' . $taglineAlignment . ' ' . $taglineColor . '">';
           echo get_bloginfo('description');
         echo '</h3>';
       }

       $overlappingImage->init();
     echo '</div>'; //.container
   echo '</div>';// .a-topIndexSectionContent
 echo '</div>';// .m-topIndexSection