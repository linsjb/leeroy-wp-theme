import headerBehaviour from './header';
import * as knowledgehub from './knowledgehub';
import * as utils from './utils';

window.onload = function () {
  headerBehaviour();
  utils.postFlexSlider();
  utils.indexCardCarousel();
}

knowledgehub.cellHeight();
knowledgehub.grid();
knowledgehub.menu();
