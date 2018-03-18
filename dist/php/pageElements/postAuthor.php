<?php
function postAuthor() {
  $postAuthorId = get_the_author_meta('ID');
  $postAuthor = get_userdata($postAuthorId);
  $authorAvatar = get_avatar_url($postAuthorId, array('size' => 450));

  $postTags = new WpContent;
  $postTags->setContent('tags');
  $postTags->setElementType('a');
?>
  <div class="m-postAuthor col-xs-100">
    <img id="postAuthor" class="a-postAuthor__image col-xs-20 col-sm-20" src="<?= $authorAvatar ?>" alt="Author image">
    <div id="postAuthorContent" class="m-postAuthorInfo col-xs-80 col-sm-78 pull-right">
      <h3 class="a-postAuthor__author"><?= $postAuthor->display_name ?></h3>
      <p class="a-postAuthor__role"><?php the_field('acfUserAdditionalInfo', 'user_' . $postAuthorId)['position'] ?></p>
      <p class="a-postAuthor_description col-xs-100"><?= $postAuthor->description ?></p>
    </div>

  <!-- .m-postAuthor -->
  </div>
<?php
}
?>
