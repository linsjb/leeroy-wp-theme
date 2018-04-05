import headerBehaviour from './header';
import * as knowledgehub from './knowledgehub';
import * as utils from './utils';

window.onload = function () {
  headerBehaviour();
  utils.postAuthor();
  utils.indexCardCarousel();
}

knowledgehub.grid();
knowledgehub.cellHeight();
knowledgehub.menu();
