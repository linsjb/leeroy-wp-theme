<?php
if(get_sub_field('acfAboutChildPagesPref')['title']) {
    $childPagesTitle = new AcfText;
    $childPagesTitle->useSubfield();
    $childPagesTitle->setObject('acfAboutChildPagesPref', 'title');
    $childPagesTitle->setElementType('h3');
}

$args = array(
    'post_type' => 'page',
    'posts_per_page' => -1,
    'post_parent' => $post->ID
);

$parent = new WP_Query($args);

$sectionBackgroundColor = acfButtonGroup('backgroundColor', 'acfAboutChildPagesPref', 'backgroundColor', null, true);


if($parent->have_posts()):?>

<div class="o-aboutPage col-xs-24 <?= $sectionBackgroundColor ?>">
    <div class="container">
        <?php
        if(get_sub_field('acfAboutChildPagesPref')['title']) {
            $childPagesTitle->init();
        }

        while($parent->have_posts()) : $parent->the_post();
        $image = new AcfImage;
        $image->setId($id);
        $image->setObject('acfPageBackgroundImage');

        $title = new WpContent;
        $title->setId($id);
        $title->setContent('title');
        $title->setElementType('h4');
        $title->setClasses('a-childPageCardContainer__title');
        
        ?>
            <div class="col-xs-24 col-sm-12 col-md-8 m-childPageCard">
                <a href="<?php the_permalink($id); ?>">
                    <div
                        class="col-xs-24 a-childPageCardContainer"
                        style="
                            background: url(<?= $image->init(); ?>);
                            background-position: 50% 50%;
                            background-repeat: no-repeat;
                            background-size: cover;
                            height: 200px;"
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
<?php endif; wp_reset_postdata(); ?>