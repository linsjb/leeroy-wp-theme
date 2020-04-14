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
}

if(get_sub_field('hasIndexHeroCopy')) {
  $indexHeroCopy = new Acftext;
  $indexHeroCopy->useSubfield();
  $indexHeroCopy->setObject('indexHeroCopy', 'content');
  $indexHeroCopy->setElementType('div');
  
  $indexHeroCopyTextColor = acfButtonGroup('textColor', 'indexHeroCopy', 'textColor', null, true);
  $indexHeroCopy->setClasses('col-xs-24 a-indexHeroCopy ' . $indexHeroCopyTextColor);
}
 
  echo '<div class="m-topIndexSection">';

    // The image does not fill the whole m-topIndexSection div.
    // The height of the image is being calculated with JS in utils.js
    echo '<div class="m-topIndexSection__image col-xs-24" style="background: url(' . $contentImage->init() . '); background-position: 50% 50%; background-repeat: no-repeat; background-size: cover;">';
      if(get_sub_field('acfIndSecTopContImg')['tintImage']) {
          echo '<div class="col-xs-24 a-elementTint ' . $sectionImageTintOpacity . ' ' . $sectionImageTintColor .'"></div>';
      }
    echo '</div>';
    
    echo '<div class="a-topIndexSectionContent col-xs-24">';
      echo '<div class="container">';

        if(get_sub_field('isOngoingCampaign')) {
            echo '<div class="col-xs-24 a-topIndexSectionCampaign">';
                $campaignDescription->init();
                echo '<a class="a-btn -btnPurple" href="' . $campaignButton->init() . '">Read more</a>';
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

        if(get_sub_field('hasIndexHeroCopy')) {
          $indexHeroCopy->init();
        }

        $overlappingImage->init();
     echo '</div>'; //.container
   echo '</div>';// .a-topIndexSectionContent
 echo '</div>';// .m-topIndexSection