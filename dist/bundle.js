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


__webpack_require__(1);

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _svgColor = __webpack_require__(2);

window.onload = function () {
  (function ($) {
    var headerLogo = new _svgColor.SvgColor();
    headerLogo.setObject('headerLogoObj');
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('white');

    var previous = window.scrollY;
    var indexSectionOneHeight = $('.o-indexSectionOne').height();
    var headerElement = $('.o-header');
    var headerHeight = headerElement.height();

    var headerNavElement = $('.m-header__nav');

    window.addEventListener('scroll', function () {
      if ($(window).scrollTop() > indexSectionOneHeight + 30) {
        if (window.scrollY > previous) {
          // Scrolling up
          headerElement.addClass('slideOutUp').removeClass('slideInDown');
        } else {
          // Scrolling down
          headerElement.addClass('slideInDown').removeClass('slideOutUp');
        }
        previous = window.scrollY;
      }
      // Show/hide header background
      if ($(this).scrollTop() > indexSectionOneHeight / 3 - headerHeight) {
        headerLogo.setColor('black');
        headerElement.removeClass('o-header--extendedHeight').addClass('o-header--background o-header--compressedHeight');
        headerNavElement.removeClass('m-header__nav--extendedTextColor').addClass('m-header__nav--compressedTextColor');
      } else {
        headerLogo.setColor('white');
        headerElement.addClass('o-header--extendedHeight').removeClass('o-header--background o-header--compressedHeight');
        headerNavElement.addClass('m-header__nav--extendedTextColor').removeClass('m-header__nav--compressedTextColor');
      }
    });
  })(jQuery);
}; /* global jQuery */

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

/***/ })
/******/ ]);