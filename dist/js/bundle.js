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


var _svgColor = __webpack_require__(1);

window.onload = function () {
  (function ($) {

    var headerLogo = new _svgColor.SvgColor();
    var headerElement = void 0;
    var headerNavElement = void 0;

    if (window.innerWidth > 768) {
      console.log('not xs');
      headerElement = $('.o-header');
      headerNavElement = $('.m-header__nav');
      headerLogo.setObject('desktopHeaderLogoObj');
    } else if (window.innerWidth < 768) {
      headerLogo.setObject('mobileHeaderLogoObj');
      headerElement = $('.o-mobileHeader');
      headerNavElement = $('.m-mobileHeader__nav');
      // let headerNavElement = $('.m-mobileHeader__nav');
    }
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('#FDFDFD');

    // Mobile menu
    var mobileHeaderNavigation = document.getElementById('mobileNav');
    var mobileMenu = document.getElementById('mobileHeaderMenu');

    var testa = true;

    mobileHeaderNavigation.addEventListener('click', function () {
      mobileMenu.classList.toggle('visible');
      testa = !testa;

      if (window.pageYOffset > 200) {
        headerElement.toggleClass('o-header--background');
      }
      headerLogo.setColor('#FDFDFD');
      if (testa) {
        if (window.pageYOffset < 200) {
          headerLogo.setColor('#FDFDFD');
        } else {
          headerLogo.setColor('#2F2F2F');
        }
      }
    });

    // Menu behaviour withing the scroll
    window.addEventListener('scroll', function () {
      if ($(this).scrollTop() > 200) {
        if (testa) {
          headerLogo.setColor('#2F2F2F');
          headerElement.addClass('o-header--background');
        }
        if (window.innerWidth >= 768) {
          headerNavElement.removeClass('m-header__nav--lightTextColour').addClass('m-header__nav--darkTextColor');
        }
      } else if ($(this).scrollTop() < 200) {
        if (testa) {
          headerLogo.setColor('#FDFDFD');
          headerElement.removeClass('o-header--background');
        }
        if (window.innerWidth >= 768) {
          headerNavElement.addClass('m-header__nav--lightTextColour').removeClass('m-header__nav--darkTextColor');
        }
      }
    });

    // Knowledge hub menu
    var test = document.getElementsByClassName('test');
    var testArray = [];
    for (var i = 0; i < test.length; i++) {
      testArray.push(test[i]);
    }

    var dropdown = document.getElementById('knowledgeHubDropdown');
    var assignedId = void 0;

    testArray.map(function (arr) {
      arr.addEventListener('click', function () {
        dropdown.classList.toggle('visible');
      });
    });
  })(jQuery);
}; /* global jQuery */


jQuery(document).ready(function () {
  jQuery(".owl-carousel").owlCarousel({
    items: 1,
    autoHeight: true
  });

  jQuery('.o-knowledgeHubGrid').masonry({
    itemSelector: '.m-knowledgeHubCell',
    percentPosition: true,
    horizontalOrder: true,
    gutter: 10
  });
});

/***/ }),
/* 1 */
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

/***/ })
/******/ ]);