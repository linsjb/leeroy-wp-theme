<?php
$query = new WP_Query('page_id=31');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();
    $title = new wpContent;
    $title->title();
    $title->setElementType('h2');
    $title->setClasses('m-indexSectionTwoTop__header' . bootstrapGridWidth(100));

    $numOfValues = 3;
    $numOfObjects = 3;
    $values = array(
      array("acfValueOneIcon", "acfValueOneTitle", "acfValueOneContent"),
      array("acfValueTwoIcon", "acfValueTwoTitle", "acfValueTwoContent"),
      array("acfValueThreeIcon", "acfValueThreeTitle", "acfValueThreeContent")
    );

    $valueObjects = array();

    for($i = 0; $i < $numOfValues; $i++) {
      for($j = 0; $j < $numOfObjects; $j++) {
        switch($j) {
          // Icon
          case 0:
          $valueObjects[$i][$j] = new AcfImage;
          $valueObjects[$i][$j]->setObject($values[$i][$j]);
          $valueObjects[$i][$j]->useElement();
          $valueObjects[$i][$j]->setClasses('a-indexSectionTwoValues__icon' . bootstrapGridWidth(30, true, true));
          break;

          // Title
          case 1:
            $valueObjects[$i][$j] = new AcfText;
            $valueObjects[$i][$j]->setObject($values[$i][$j]);
            $valueObjects[$i][$j]->setElementType('h5');
            $valueObjects[$i][$j]->setClasses('a-indexSectionTwoValues__title' . bootstrapGridWidth(100));
            break;


          // Content
          case 2:
            $valueObjects[$i][$j] = new AcfText;
            $valueObjects[$i][$j]->setObject($values[$i][$j]);
            $valueObjects[$i][$j]->setElementType('p');
            $valueObjects[$i][$j]->setClasses('a-indexSectionTwoValues__content' . bootstrapGridWidth(100));
            break;
        }
      }
    }

    $bottomHeader = new AcfText;
    $bottomHeader->setObject('acfBottomTitle');
    $bottomHeader->setElementType('h2');
    $bottomHeader->setClasses('m-indexSectionTwoBottom__header');
    $bottomHeader->breakPoint();

    $bottomImage = new AcfImage;
    $bottomImage->setObject('acfBottomImage');
    $bottomImage->useElement();
    $bottomImage->setClasses('m-indexSectionTwoBottom__image' . bootstrapGridWidth(80, true, true));
?>

    <div class="o-indexSectionTwo">
      <div class="m-indexSectionTwoTop<?= bootstrapGridWidth(100); ?>">
        <div class="container m-indexSectionTwoTopContent">

          <?php
          $title->init();
          ?>

          <?php for($i = 0; $i < $numOfValues; $i++):?>
            <div class="<?= bootstrapGridWidth(33, false, true); ?>">
              <?php for($j = 0; $j < $numOfObjects; $j++): ?>
                    <?php
                    $valueObjects[$i][$j]->init();
                    ?>
              <?php endfor; ?>
            </div>
          <?php endfor; ?>

        <!-- .m-indexSectionTwoTopContent -->
        </div>
      <!-- .m-indexSectionTwoTop -->
      </div>

      <div class="m-indexSectionTwoBottom<?= bootstrapGridWidth(100); ?>">
        <div class="container m-indexSectionTwoBottomContent">
          <?php
            $bottomHeader->init();
            $bottomImage->init();
          ?>
        <!-- .m-indexSectionTwoBottomContent -->
        </div>
      <!-- .m-indexSectionTwoBottom -->
      </div>
    <!-- .o-indexSectionTwo -->
    </div>

<?php
  endwhile;
endif;
wp_reset_postdata();
?>
