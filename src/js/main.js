import headerBehaviour from "./header";
import language from "./language";
import * as knowledgehub from "./knowledgehub";
import * as utils from "./utils";
import * as products from "./products";

window.onload = function () {
  headerBehaviour();
  language();
  // utils.indexTopContent();
  utils.test();
  utils.postFlexSlider();
  products.formPopup();
};

knowledgehub.cellHeight();
knowledgehub.grid();
knowledgehub.menu();
