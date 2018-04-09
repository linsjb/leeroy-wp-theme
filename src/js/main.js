import headerBehaviour from './header';
import * as knowledgehub from './knowledgehub';
import * as utils from './utils';

window.onload = function () {
  headerBehaviour();
  utils.postAuthor();
  utils.indexCardCarousel();
  utils.showContactFormMessageField();
}

knowledgehub.cellHeight();
knowledgehub.grid();
knowledgehub.menu();
