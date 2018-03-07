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
    <img class="a-postAuthor__image col-xs-25" src="<?= $authorAvatar ?>" alt="Author image">
    <div class="m-postAuthorContent col-xs-70 pull-right">
      <h3 class="a-postAuthor__author"><?= $postAuthor->display_name ?></h3>
      <p class="a-postAuthor__role"><?php the_field('acfUserTitle', 'user_' . $postAuthorId) ?></p>
      <p class="a-postAuthor_description"><?= $postAuthor->description ?></p>
    <!-- .m-postAuthorContent -->
    </div>
  <!-- .m-postAuthor -->
  </div>
<?php
}
?>
