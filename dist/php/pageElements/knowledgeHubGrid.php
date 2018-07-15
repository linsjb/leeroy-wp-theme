<?php
// Creates a grid of blog-posts.
// Function call need's to be inside the loop!
function knowledgeHubGrid($counter) {
  $postImage = new AcfImage;
  $postImage->setSize('large');
  $postImage->setObject('acfPageBackgroundImage');

  $postTitle = new WpContent;
  $postTitle->setContent('title');
  $postTitle->setElementType('h4');


  $postDate = new WpContent;
  $postDate->setContent('date');
  $postDate->setElementType('span');
  $postDate->setClasses('a-knowledgeHubCell__date');

  $postAuthor = new WpContent;
  $postAuthor->setContent('author');
  $postAuthor->setElementType('span');
  $postAuthor->setClasses('a-knowledgeHubCell__author');

  if(get_field('acfPageBackgroundType') == 'image') {
    // Image props to change the height (padding-top) of the cell with Javacript.
    $imageProps = ($postImage->getHeight() / $postImage->getWidth());
    $cellBackground = "background-image: url({$postImage->init()}); ";
    $titleSize = 'a-knowledgeHubCell__title--fontSize25';
  } else {
    // A static value to set a static height (padding-top) of the cell with JavaScript.
    $imageProps = 0;
    $backgroundColor = get_field('acfPageBackgroundColor');
    $cellBackground = "background-color: {$backgroundColor};";
    $titleSize = 'a-knowledgeHubCell__title--fontSize45';
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

  <a href="<?php the_permalink()?>">
    <div id="<?= $cellId ?>" class="o-knowledgeHubCell -dynamic" style="<?= $cellBackground ?>;" data-imgprops="<?= $imageProps ?>">
      <div class="m-knowledgeHubHoverContent">
        <img src="<?= get_template_directory_uri() . '/images/coffee-cup.svg' ?>" alt="" class="m-knowledgeHubHoverContent__icon">
        <p class="m-knowledgeHubHoverContent__text">Read now</p>
      </div>
      <?php
      if(get_field('acfPageBackgroundType') == 'image') {
        pageBackgroundTone();
      }
      ?>
      <div class="o-knowledgeHubCellContent col-xs-24">
        <?php $postTitle->init(); ?>
        <p class="m-knowledgehubCellInfo"><?php $postDate->init()?> by <?php $postAuthor->init() ?></p>
        <!-- .m-knowledgeHubCellContent -->
      </div>
    <!-- .o-knowledgeHubCell -->
    </div>
  </a>
<?php

}
?>
