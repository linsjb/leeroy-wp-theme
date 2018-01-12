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

__webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_svgColor__ = __webpack_require__(2);
/* global jQuery */


window.onload = function () {
  (function ($) {
    let headerLogo = new __WEBPACK_IMPORTED_MODULE_0__classes_svgColor__["a" /* SvgColor */]();
    headerLogo.setObject('headerLogoObj');
    headerLogo.setSvgItems('a-leeroyLogo');
    headerLogo.setColor('white');

    let previous = window.scrollY;
    let indexSectionOneHeight = $('.o-indexSectionOne').height();
    let headerElement = $('.o-header');
    let headerHeight = headerElement.height();

    let headerNavElement = $('.m-header__nav');

    window.addEventListener('scroll', function () {
      if ($(window).scrollTop() > indexSectionOneHeight + 30) {
        if (window.scrollY > previous) { // Scrolling up
          headerElement.addClass('slideOutUp').removeClass('slideInDown');
        } else { // Scrolling down
          headerElement.addClass('slideInDown').removeClass('slideOutUp');
        }
        previous = window.scrollY;
      }
      // Show/hide header background
      if ($(this).scrollTop() > (indexSectionOneHeight / 2) - headerHeight) {
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
};


/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
class SvgColor {
  constructor () {
    this.state = {
      object: '',
      svgItems: '',
      onLoad: false,
      color: ''
    };
  }

  setObject (setObj) {
    this.state.object = document.getElementById(setObj);
  }

  setSvgItems (setSvgItm) {
    this.state.svgItems = this.state.object.contentDocument.getElementsByClassName(setSvgItm);
  }

  setColor (setClr) {
    this.state.color = setClr;
    for (let i = 0; i < this.state.svgItems.length; i++) {
      this.state.svgItems[i].style.fill = this.state.color;
    }
  }

  onLoad (setLoad) {
    this.state.onLoad = setLoad;
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = SvgColor;



/***/ })
/******/ ]);