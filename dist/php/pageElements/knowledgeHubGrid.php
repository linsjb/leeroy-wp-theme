<?php
function knowledgeHubGrid() {
  $postImage = new AcfImage;
  $postImage->setObject('acfKnowHubPostImage');
  $postImage->setSize('large');

  $postTitle = new WpContent;
  $postTitle->setContent('title');
  $postTitle->setElementType('h4');

  if(get_field('acfKnowHubPostCase')) {
    $postTitle->setClasses('a-knowledgeHubCell__caseTitle');
  } else {
    $postTitle->setClasses('a-knowledgeHubCell__title');
  }

  $postDate = new WpContent;
  $postDate->setContent('date');
  $postDate->setElementType('span');
  $postDate->setClasses('a-knowledgeHubCell__date');

  $postAuthor = new WpContent;
  $postAuthor->setContent('author');
  $postAuthor->setElementType('span');
  $postAuthor->setClasses('a-knowledgeHubCell__author');

  $cellHeight = ($postImage->getHeight() / $postImage->getWidth()) * 340;
?>
  <a href="<?php the_permalink()?>">
    <div class="m-knowledgeHubCell" style="background-image: url(<?= $postImage->init() ?>); height: <?= $cellHeight ?>px">
        <?php if(get_field('acfKnowHubCellTint')): ?>
          <div class="a-knowledgeHubCellTint" style="background-color: <?= get_field('acfKnowHubCellTintPref')['color'] ?>; opacity: <?= get_field('acfKnowHubCellTintPref')['opacity'] ?>"></div>
        <?php endif; ?>
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
