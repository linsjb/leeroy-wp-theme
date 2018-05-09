<?php
function postAuthor() {
  $postAuthorId = get_the_author_meta('ID');
  $postAuthor = get_userdata($postAuthorId);
  $authorAvatar = get_avatar_url($postAuthorId, array('size' => 450));

  $postTags = new WpContent;
  $postTags->setContent('tags');
  $postTags->setElementType('a');
?>
  <div class="m-postAuthor col-xs-24">
    <img id="postAuthor" class="a-postAuthor__image col-xs-10 col-sm-7 col-md-5" src="<?= $authorAvatar ?>" alt="Author image">

    <div class="m-postAuthorInfo col-xs-14 col-sm-17 col-md-19">
      <h3 class="a-postAuthor__author"><?= $postAuthor->display_name ?></h3>
      <p class="a-postAuthor__role"><?php the_field('acfUserAdditionalInfo', 'user_' . $postAuthorId)['position'] ?></p>
      <p class="a-postAuthor_description hidden-xs"><?= $postAuthor->description ?></p>
    </div>

  <!-- .m-postAuthor -->
  </div>
  <p class="a-postAuthor_description col-xs-24 hidden-sm hidden-md hidden-lg"><?= $postAuthor->description ?></p>
<?php
}
?>
