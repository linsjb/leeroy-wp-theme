import headerBehaviour from './header';
import language from './language';
import * as knowledgehub from './knowledgehub';
import * as utils from './utils';

window.onload = function() {
  headerBehaviour();
  // language();
  utils.postFlexSlider();
  utils.formPopup();
}

  knowledgehub.cellHeight();
  knowledgehub.grid();
  knowledgehub.menu();
