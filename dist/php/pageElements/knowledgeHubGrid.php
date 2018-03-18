<?php
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

  if(get_field('acfKnowHubPostCase')) {
    $postTitle->setClasses('a-knowledgeHubCell__caseTitle');
  } else {
    $postTitle->setClasses('a-knowledgeHubCell__title');
  }

  if(get_field('acfPageBackgroundType') == 'image') {
    $imageProps = ($postImage->getHeight() / $postImage->getWidth());
    $xsCellHeight = ($postImage->getHeight() / $postImage->getWidth()) * 100;
    $cellBackground = 'background-image: url(' . $postImage->init() .'); ';
  } else {
    switch(get_field('acfPageBackgroundColor')) {
      case 'black':
        $cellBackgroundColor = '#2F2F2F';
        break;

      case 'purple':
        $cellBackgroundColor = '#442D5E';
        break;

      case 'white':
        $cellBackgroundColor = '#FDFDFD';
        break;

      case 'blue':
        $cellBackgroundColor = '#0B4F6C';
        break;

      case 'gold':
        $cellBackgroundColor = '#C9AD74';
        break;

      default:
        $cellBackgroundColor = '#2F2F2F';
        break;
    }
    $imageProps = 300;
    $cellBackground = 'background-color: ' . $cellBackgroundColor . '; ';
  }
  $cellId = "cell-{$counter}";
?>


  <a href="<?php the_permalink()?>">
    <div id="<?= $cellId ?>" class="m-knowledgeHubCell col-xs-100 col-sm-49 col-md-32" style="<?= $cellBackground ?>;" data-imgprops="<?= $imageProps ?>">

      <?php
      if(get_field('acfPageBackgroundType') == 'image') {
        pageBackgroundTone();
      }
      ?>
    <div class="o-knowledgeHubCellContent col-xs-100">
      <?php
      $postTitle->init();
      ?>
      <p class="m-knowledgehubCellInfo"><?php $postDate->init()?> by <?php $postAuthor->init() ?></p>
    <!-- .m-knowledgeHubCellContent -->
    </div>
    <!-- .m-knowledgeHubCell -->
    </div>
  </a>
<?php
}
?>
