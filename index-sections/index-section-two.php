<?php
$query = new WP_Query('page_id=31');
if($query->have_posts()):
  while ($query->have_posts()):
    $query->the_post();
    $title = new wpContent;
    $title->title();
    $title->setElementType('h2');
    $title->setClasses('m-indexSectionTwo__header' . bootstrapGridWidth(100));

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
?>

    <div class="o-indexSectionTwo <?= bootstrapGridWidth(100); ?>">
      <?php
      $title->init();
      ?>

      <div class="m-IndexSectionTwoContent <?= bootstrapGridWidth(80, true, true);?>">
        <?php for($i = 0; $i < $numOfValues; $i++):?>
          <div class="m-indexSectionTwoValues<?= bootstrapGridWidth(30, false, true); echo bootstrapGridOffset(3)?>">
            <?php for($j = 0; $j < $numOfObjects; $j++): ?>
                  <?php
                  $valueObjects[$i][$j]->init();
                  ?>
            <?php endfor; ?>
          </div>
        <?php endfor; ?>

      <!-- .m-IndexSectionTwoContent -->
      </div>
    <!-- .o-indexSectionTwo -->
    </div>

<?php 
  endwhile;
endif;
wp_reset_postdata();
?>
