<?php
/*
 * Template Name: With child
 * Description: Page template for pages with childs.
 */
get_header();

?>
<script type="text/javascript">
  let pageLocation = 'about';
</script>

<?php
$args = array (
  'post_type' => 'page',
  'posts_per_page' => -1,
  'post_parent' => $post->ID
);

$parent = new WP_Query($args);

$test = get_pages($parent);

if($parent->have_posts()):
  informationPageTop(); ?>
  <div class="col-xs-24 o-conditionPage">
    <div class="container">
      <?php while($parent->have_posts()): $parent->the_post();

        $image = new AcfImage;
        $image->setId($id);
        $image->setObject('acfPageBackgroundImage');

        $title = new WpContent;
        $title->setId($id);
        $title->setContent('title');
        $title->setElementType('h3');
        $title->setClasses('a-childPageCardContainer__title');?>

        <div class="col-xs-24 col-sm-12 m-childPageCard">
          <a href="<?php the_permalink($id) ?>">
            <div
              class="col-xs-24 a-childPageCardContainer"
              style="
                background: url(<?= $image->init(); ?>);
                background-position: 50% 50%;
                background-repeat: no-repeat;
                background-size: cover;
                height: 300px;"
            >
              <?php
              pageBackgroundTone();
              $title->init();
              ?>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; wp_reset_postdata();
get_footer();?>
