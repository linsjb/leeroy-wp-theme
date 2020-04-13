<div class="container">
<?php
if(have_rows('acfIndSecCardsContent')) {
    $counter = 0;
    while(have_rows('acfIndSecCardsContent')) {
      the_row();

        $icon = new AcfImage;
        $icon->useSubfield();
        $icon->setObject('icon');
        $icon->setClasses('a-aboutPageCardIcon__img');
        $icon->setSize('small');
        $icon->useElement();

        $title = new AcfText;
        $title->useSubfield();
        $title->setObject('title');
        $title->setElementType('span');
        $title->setClasses('m-aboutPageCard__title ' . $textColor );

        $content = new AcfText;
        $content->useSubfield();
        $content->setObject('Content');
        $content->setElementType('div');
        $content->setClasses('m-aboutPageCard__content ' . $textColor );
        ?>

        
            <?php
            if($counter == 3) {
                $counter == 0;
                echo '<div class="col-xs-24"></div>';
            }
            ?>

            <div class="m-aboutPageCard col-xs-24 col-md-8">
                <div class="col-xs-24 a-aboutPageCardIcon">
                    <?php $icon->init(); ?>
                </div>

                <?php
                $title->init();
                $content->init();
                ?>
            </div>

            <?php $counter++; ?>

    <?php
    }

}
?>
</div>