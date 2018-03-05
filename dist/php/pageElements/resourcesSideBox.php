
<?php
function resourcesSideBox () {
?>
  <div class="m-contentRightBox col-xs-100 col-sm-45 col-md-100 col-lg-100 pull-right">
    <h5 class="a-contentRightBox__title">Resources</h5>
    <?php
    $args = array(
      'post_type' => 'sm_resources'
    );
    $query = new WP_Query($args);

    if($query->have_posts()) {
      $resources = new RecentPosts;
      $resources->setItemsNumber(5);
      $resources->setPostType('sm_resources');
      $resources->setContainerClasses('a-singlePostRightBox__list');
      $resources->setElementClasses('a-singlePostRightBox__item');
      $resources->init();
    }
    ?>
  <!-- .m-contentRightBox -->
  </div>
<?php
}
?>
