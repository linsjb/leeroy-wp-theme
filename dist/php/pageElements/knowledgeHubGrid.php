<?php
// Creates a grid-card of blog-posts.
// Function call need's to be inside the loop!
// The function represent one card.
function knowledgeHubGrid($counter, $id = null) {

  $postImage = new AcfImage;

  $postDate = new WpContent;
  $postDate->setContent('date');
  $postDate->setClasses('a-knowledgeHubCell__date');

  $postAuthor = new WpContent;
  $postAuthor->setContent('author');
  $postAuthor->setClasses('a-knowledgeHubCell__author');

  // Post-specific language controls
  if(get_field('acfPostSecLang', $id)) {
    switch($_COOKIE['language']) {
      case 'en':
        $postTitle = new AcfText;
        $postTitle->setObject('acfSecLangtitle');
        break;

      case 'sv':
        $postTitle = new WpContent;
        $postTitle->setContent('title');
        break;

      default:
        $postTitle = new WpContent;
        $postTitle->setContent('title');
        break;
    }
  } else {
    $postTitle = new WpContent;
    $postTitle->setContent('title');
  }

  // Get the fields for the ID
  if($id != null) {
    $postTitle->SetId($id);
    $postDate->setId($id);
    $postAuthor->setId($id);
    $postImage->setId($id);
  }

  $postImage->setSize('large');
  $postImage->setObject('acfPageBackgroundImage');

  // general language controls for the card
  switch($_COOKIE['language']) {
    case 'en':
      $postInfo = '<p class="m-knowledgehubCellInfo">' . $postDate->init() . ' by ' . $postAuthor->init() . '</p>';
      $cardHoverText = 'Read now';
      break;

    case 'sv':
      $postInfo = '<p class="m-knowledgehubCellInfo">' . $postDate->init() . ' av ' . $postAuthor->init() . '</p>';
      $cardHoverText = 'Läs nu';
      break;

    default:
      $postInfo = '<p class="m-knowledgehubCellInfo">' . $postDate->init() . ' av ' . $postAuthor->init() . '</p>';
      $cardHoverText = 'Läs nu';
      break;
  }

  $postTitle->setElementType('h4');

  if(get_field('acfPageBackgroundType', $id) == 'image') {
    // Image props to change the height (padding-top) of the cell with Javacript.
    $imageProps = ($postImage->getHeight() / $postImage->getWidth());
    $cellBackgroundImg = "background-image: url({$postImage->init()}); ";
    $cellBackgroundColor = '';
    $titleSize = '-fontSize24';
  } else {
    // A static value to set a static height (padding-top) of the cell with JavaScript.
    $imageProps = 0;
    $cellBackgroundImg = '';
    $cellBackgroundColor = get_field('acfPageBackgroundColor', $id);
    $titleSize = '-fontSize45';
  }

  // Is the blogpost treated as a case or regular post?
  if(get_field('acfKnowHubPostCase')) {
    $postTitle->setClasses("a-knowledgeHubCell__caseTitle {$titleSize}");
  } else {
    $postTitle->setClasses("a-knowledgeHubCell__title {$titleSize}");
  }

  // We assign a unique ID for every cell-element to be able to set the height with JavaScript.
  $cellId = "cell-{$counter}";
?>

  <a href="<?php the_permalink($id)?>">
    <div id="<?= $cellId ?>" class="o-knowledgeHubCell -dynamic <?= $cellBackgroundColor ?>" style="<?= $cellBackgroundImg ?>;" data-imgprops="<?= $imageProps ?>">
      <div class="m-knowledgeHubHoverContent">
        <img src="<?= get_template_directory_uri() . '/images/coffee-cup.svg' ?>" alt="" class="m-knowledgeHubHoverContent__icon">
        <p class="m-knowledgeHubHoverContent__text"><?= $cardHoverText ?></p>
      </div>
      <?php
      if(get_field('acfPageBackgroundType', $id) == 'image') {
        pageBackgroundTone(null, $id);
      }
      ?>
      <div class="o-knowledgeHubCellContent col-xs-24">
        <?php
        $postTitle->init();
        echo $postInfo;
        ?>

        <!-- .m-knowledgeHubCellContent -->
      </div>
    <!-- .o-knowledgeHubCell -->
    </div>
  </a>
<?php

}
?>
