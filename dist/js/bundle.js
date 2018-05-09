/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _header = __webpack_require__(1);

var _header2 = _interopRequireDefault(_header);

var _knowledgehub = __webpack_require__(3);

var knowledgehub = _interopRequireWildcard(_knowledgehub);

var _utils = __webpack_require__(4);

var utils = _interopRequireWildcard(_utils);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

window.onload = function () {
  (0, _header2.default)();
  utils.postFlexSlider();
  utils.indexCardCarousel();
};

knowledgehub.cellHeight();
knowledgehub.grid();
knowledgehub.menu();

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = headerBehaviour;

var _svgColor = __webpack_require__(2);

/*!
* trert
*/

var didScroll = void 0;
var lastScrollTop = 0;
var delta = 10;

function headerBehaviour() {
  (function ($) {
    var _this = this;

    var headerElement = void 0;
    var navigationElement = void 0;

    // Variable to control the behaviour of the logo.
    // This is needed because of the mobile header.
    var logoBehaviour = true;

    var mobileMenuVisible = false;

    var whiteColor = '#fdfdfd';
    var blackColor = '#2f2f2f';

    var mobileNavigationButton = document.getElementById('mobileNavBtn');
    var mobileMenu = document.getElementById('mobileHeaderMenu');

    // How far the user need's to scroll before magic happens.
    var scrolloffset = 200;

    var headerLogo = new _svgColor.SvgColor();

    var animationEnds = 'animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';

    /*
    * What is the width of the browser?
    * If the width if equal of greater than 768 (bootstrap col-sm), we will assign the variables the elements of the dektop header and menu.
    * If the width is less than 768 (bootstrap col-xs), we will assign the variables the elements of the mobile header and menu.
    */
    if (window.innerWidth >= 768) {
      headerElement = $('.o-header');
      navigationElement = $('.m-header__nav');
      headerLogo.setObject('desktopHeaderLogoObj');
    } else if (window.innerWidth < 768) {
      headerElement = $('.o-mobileHeader');
      navigationElement = $('.m-mobileHeader__nav');
      headerLogo.setObject('mobileHeaderLogoObj');
    }

    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor(whiteColor);

    mobileNavigationButton.addEventListener('click', function () {

      $('#mobileNavBtn').toggleClass('is-active');

      // Animate mobile menu to slide down/up
      switch (mobileMenuVisible) {
        case true:
          $('#mobileHeaderMenu').addClass('slideOutUp').removeClass('slideInDown').one(animationEnds, function () {
            $(_this).css('visibility', 'hidden');
          });
          break;

        case false:
          $('#mobileHeaderMenu').addClass('slideInDown').removeClass('slideOutUp').css('visibility', 'visible');
          break;
      }

      logoBehaviour = !logoBehaviour;
      headerLogo.setColor(whiteColor);
      mobileMenuVisible = !mobileMenuVisible;

      /*
      * Have the user scrolled down more than scroll offset?
      * If that's the case. The header background is going to be toggled.
      * Reason for this is simple. When the mobile menu is open we don't want the header to have a background
      */
      if (window.pageYOffset > scrolloffset) {
        headerElement.toggleClass('o-header--background');
        $('#mobileNavBtn').toggleClass('m-mobileHeaderMenuBtn--darkColor');
      }
      if (logoBehaviour) {
        if (window.pageYOffset < scrolloffset) {
          headerLogo.setColor(whiteColor);
        } else {
          headerLogo.setColor(blackColor);
        }
      }
    }); // Mobile menu button event listener


    /*
    * Set's the header background and dark text color
    * in case that the page is not at the top when it's loaded.
    */
    if (window.pageYOffset > scrolloffset) {
      navigationElement.addClass('m-header__nav--darkTextColor');
      headerElement.addClass('o-header--background');
      headerLogo.setColor(blackColor);
    }

    // Scroll listener
    window.addEventListener('scroll', function () {
      didScroll = true;

      setInterval(function () {
        if (didScroll) {
          hasScrolled();
          didScroll = false;
        }
      }, 250);

      // Control when the header background and color's should change.
      if ($(this).scrollTop() > scrolloffset) {
        if (logoBehaviour) {
          headerLogo.setColor(blackColor);
          headerElement.addClass('o-header--background');
          $('#mobileNavBtn').addClass('m-mobileHeaderMenuBtn--darkColor');
        }

        if (window.innerWidth >= 768) {
          navigationElement.addClass('m-header__nav--darkTextColor');
        }
      } else if ($(this).scrollTop() < scrolloffset) {
        if (logoBehaviour) {
          headerLogo.setColor(whiteColor);
          headerElement.removeClass('o-header--background');
          $('#mobileNavBtn').removeClass('m-mobileHeaderMenuBtn--darkColor');
        }

        if (window.innerWidth >= 768) {
          navigationElement.removeClass('m-header__nav--darkTextColor');
        }
      }
    });

    // TEST
    // TEST
    // TEST


    // TEST
    // TEST
    // TEST
  })(jQuery);
} // headerBahaviour

function hasScrolled() {
  (function ($) {

    var st = $(window).scrollTop();
    console.log(st);
    if (Math.abs(lastScrollTop - st) <= delta) {
      return;
    }

    if (st > lastScrollTop && st > 20) {
      console.log('Scrolling down');
    } else {
      console.log('Scrolling up');
    }

    lastScrollTop = st;
  })(jQuery);
}

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var SvgColor = exports.SvgColor = function () {
  function SvgColor() {
    _classCallCheck(this, SvgColor);

    this.state = {
      object: '',
      svgItems: '',
      onLoad: false,
      color: ''
    };
  }

  _createClass(SvgColor, [{
    key: 'setObject',
    value: function setObject(setObj) {
      this.state.object = document.getElementById(setObj);
    }
  }, {
    key: 'setSvgItems',
    value: function setSvgItems(setSvgItm) {
      this.state.svgItems = this.state.object.contentDocument.getElementsByClassName(setSvgItm);
    }
  }, {
    key: 'setColor',
    value: function setColor(setClr) {
      this.state.color = setClr;
      for (var i = 0; i < this.state.svgItems.length; i++) {
        this.state.svgItems[i].style.fill = this.state.color;
      }
    }
  }, {
    key: 'onLoad',
    value: function onLoad(setLoad) {
      this.state.onLoad = setLoad;
    }
  }]);

  return SvgColor;
}();

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.grid = grid;
exports.cellHeight = cellHeight;
exports.menu = menu;
function grid() {
  (function ($) {
    $('.o-knowledgeHubGrid').masonry({
      itemSelector: '.o-knowledgeHubCell',
      percentPosition: true,
      horizontalOrder: true,
      gutter: 15
    });
  })(jQuery);
}

function cellHeight() {
  var knowledgeHubCells = document.getElementsByClassName('o-knowledgeHubCell');

  for (var i = 0; i < knowledgeHubCells.length; i++) {
    var knowledgeHubCell = document.getElementById('cell-' + i);
    if (knowledgeHubCell.getAttribute('data-imgprops') == 0) {
      knowledgeHubCell.style.minHeight = '200px';
    } else {
      knowledgeHubCell.style.height = knowledgeHubCell.getAttribute('data-imgprops') * knowledgeHubCell.offsetWidth + 'px';
    }
  }
}

function menu() {
  var buttons = Array.from(document.getElementsByClassName('a-knowledgeHubMenuList__item'));
  var dropdowns = document.getElementsByClassName('o-knowledgeHubMenuDropdown');

  buttons.map(function (button, index) {
    button.addEventListener('click', function () {
      for (var i = 0; i < buttons.length; i++) {
        if (i != index) {
          dropdowns[i].classList.remove('display');
          buttons[i].classList.remove('activeKnowHubMenu');
        }
      }

      button.classList.toggle('activeKnowHubMenu');
      dropdowns[index].classList.toggle('display');
    });
  });
}

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.indexCardCarousel = indexCardCarousel;
exports.postFlexSlider = postFlexSlider;
function indexCardCarousel() {
  (function ($) {
    $(".owl-carousel").owlCarousel({
      items: 1,
      autoHeight: true
    });
  })(jQuery);
}

function postFlexSlider() {
  (function ($) {
    $('#slider').flexslider({
      animation: "slide",
      animationLoop: false,
      slideshow: false,
      smoothHeight: true
    });
  })(jQuery);
}

/***/ })
/******/ ]);