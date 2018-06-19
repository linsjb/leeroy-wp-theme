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
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar _header = __webpack_require__(/*! ./header */ 1);\n\nvar _header2 = _interopRequireDefault(_header);\n\nvar _language = __webpack_require__(/*! ./language */ 3);\n\nvar _language2 = _interopRequireDefault(_language);\n\nvar _knowledgehub = __webpack_require__(/*! ./knowledgehub */ 4);\n\nvar knowledgehub = _interopRequireWildcard(_knowledgehub);\n\nvar _utils = __webpack_require__(/*! ./utils */ 5);\n\nvar utils = _interopRequireWildcard(_utils);\n\nfunction _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\nwindow.onload = function () {\n  (0, _header2.default)();\n  // language();\n  utils.postFlexSlider();\n  utils.formPopup();\n};\n\nknowledgehub.cellHeight();\nknowledgehub.grid();\nknowledgehub.menu();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMvbWFpbi5qcz82OTFmIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBoZWFkZXJCZWhhdmlvdXIgZnJvbSAnLi9oZWFkZXInO1xuaW1wb3J0IGxhbmd1YWdlIGZyb20gJy4vbGFuZ3VhZ2UnO1xuaW1wb3J0ICogYXMga25vd2xlZGdlaHViIGZyb20gJy4va25vd2xlZGdlaHViJztcbmltcG9ydCAqIGFzIHV0aWxzIGZyb20gJy4vdXRpbHMnO1xuXG53aW5kb3cub25sb2FkID0gZnVuY3Rpb24oKSB7XG4gIGhlYWRlckJlaGF2aW91cigpO1xuICAvLyBsYW5ndWFnZSgpO1xuICB1dGlscy5wb3N0RmxleFNsaWRlcigpO1xuICB1dGlscy5mb3JtUG9wdXAoKTtcbn1cblxuICBrbm93bGVkZ2VodWIuY2VsbEhlaWdodCgpO1xuICBrbm93bGVkZ2VodWIuZ3JpZCgpO1xuICBrbm93bGVkZ2VodWIubWVudSgpO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHNyYy9qcy9tYWluLmpzIl0sIm1hcHBpbmdzIjoiOztBQUFBO0FBQ0E7OztBQUFBO0FBQ0E7OztBQUFBO0FBQ0E7QUFEQTtBQUNBO0FBQUE7QUFDQTtBQURBO0FBQ0E7Ozs7O0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///0\n");

/***/ }),
/* 1 */
/*!**************************!*\
  !*** ./src/js/header.js ***!
  \**************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\nexports.default = headerBehaviour;\n\nvar _svgColor = __webpack_require__(/*! ./classes/svgColor */ 2);\n\nvar didScroll = void 0;\nvar lastScrollTop = 0;\nvar delta = 10;\nvar headerElement = void 0;\n\nfunction headerBehaviour() {\n  (function ($) {\n    var _this = this;\n\n    var navigationElement = void 0;\n\n    // Variable to control the behaviour of the logo.\n    // This is needed because of the mobile header.\n    var logoBehaviour = true;\n\n    var mobileMenuVisible = false;\n\n    var whiteColor = '#fdfdfd';\n    var blackColor = '#2f2f2f';\n\n    var mobileNavigationButton = document.getElementById('mobileNavBtn');\n    var mobileMenu = document.getElementById('mobileHeaderMenu');\n\n    // How far the user need's to scroll before magic happens.\n    var scrolloffset = 200;\n\n    var headerLogo = new _svgColor.SvgColor();\n\n    var animationEnds = 'animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';\n\n    /*\n    * What is the width of the browser?\n    * If the width if equal of greater than 768 (bootstrap col-sm), we will assign the variables the elements of the dektop header and menu.\n    * If the width is less than 768 (bootstrap col-xs), we will assign the variables the elements of the mobile header and menu.\n    */\n    if (window.innerWidth >= 768) {\n      headerElement = $('.o-header');\n      navigationElement = $('.m-header__nav');\n      headerLogo.setObject('desktopHeaderLogoObj');\n    } else if (window.innerWidth < 768) {\n      headerElement = $('.o-mobileHeader');\n      navigationElement = $('.m-mobileHeader__nav');\n      headerLogo.setObject('mobileHeaderLogoObj');\n    }\n\n    headerLogo.setSvgItems('a-leeroyLogo');\n    headerLogo.setColor(whiteColor);\n\n    // Mobile menu button click\n    mobileNavigationButton.addEventListener('click', function () {\n\n      $('#mobileNavBtn').toggleClass('is-active');\n\n      // Animate mobile menu to slide down/up\n      switch (mobileMenuVisible) {\n        case true:\n          $('#mobileHeaderMenu').addClass('slideOutUp').removeClass('slideInDown').one(animationEnds, function () {\n            $(_this).css('visibility', 'hidden');\n          });\n          break;\n\n        case false:\n          $('#mobileHeaderMenu').addClass('slideInDown').removeClass('slideOutUp').css('visibility', 'visible');\n          break;\n      }\n\n      logoBehaviour = !logoBehaviour;\n      headerLogo.setColor(whiteColor);\n      mobileMenuVisible = !mobileMenuVisible;\n\n      /*\n      * Have the user scrolled down more than scroll offset?\n      * If that's the case. The header background is going to be toggled.\n      * Reason for this is simple. When the mobile menu is open we don't want the header to have a background\n      */\n      if (window.pageYOffset > scrolloffset) {\n        headerElement.toggleClass('o-header--background');\n        $('#mobileNavBtn').toggleClass('m-mobileHeaderMenuBtn--darkColor');\n      }\n      if (logoBehaviour) {\n        if (window.pageYOffset < scrolloffset) {\n          headerLogo.setColor(whiteColor);\n        } else {\n          headerLogo.setColor(blackColor);\n        }\n      }\n    }); // Mobile menu button event listener\n\n\n    /*\n    * Set's the header background and dark text color\n    * in case that the page is not at the top when it's loaded.\n    * And only if the page width is > 768 px (bootstrap col-sm).\n    */\n    if (window.innerWidth >= 768) {\n      if (window.pageYOffset > scrolloffset) {\n        navigationElement.addClass('m-header__nav--darkTextColor');\n        headerElement.addClass('o-header--background');\n        headerLogo.setColor(blackColor);\n      }\n    }\n\n    // Scroll listener\n    window.addEventListener('scroll', function () {\n\n      didScroll = true;\n      setInterval(function () {\n        if (didScroll) {\n          if ($(this).scrollTop() > 500) {\n            hasScrolled();\n            didScroll = false;\n          }\n        }\n      }, 250);\n\n      // Has the user scrolled over the scroll offset?\n      if ($(this).scrollTop() > scrolloffset) {\n\n        if (logoBehaviour) {\n          headerLogo.setColor(blackColor);\n          headerElement.addClass('o-header--background');\n          $('#mobileNavBtn').addClass('m-mobileHeaderMenuBtn--darkColor');\n        }\n\n        if (window.innerWidth >= 768) {\n          navigationElement.addClass('m-header__nav--darkTextColor');\n        }\n      } else if ($(this).scrollTop() < scrolloffset) {\n        if (logoBehaviour) {\n          headerLogo.setColor(whiteColor);\n          headerElement.removeClass('o-header--background');\n          $('#mobileNavBtn').removeClass('m-mobileHeaderMenuBtn--darkColor');\n        }\n\n        if (window.innerWidth >= 768) {\n          navigationElement.removeClass('m-header__nav--darkTextColor');\n        }\n      }\n    });\n  })(jQuery);\n} // headerBahaviour\n\n\nfunction hasScrolled() {\n  (function ($) {\n    var st = $(window).scrollTop();\n    if (Math.abs(lastScrollTop - st) <= delta) {\n      return;\n    }\n\n    if (st > lastScrollTop && st > 20) {\n      // Scrolling down\n      headerElement.removeClass('fadeIn').addClass('animated').addClass('fadeOut');\n\n      // Handle the language selector popup when header disapears, if it's open.\n      // $('.o-languageSelector').removeClass('slideOutUp').removeClass('slideInDown').addClass('slideOutUp');\n      // document.getElementById('languageSelectorBlanket').style.visibility = 'hidden';\n    } else {\n      // Scrolling upp\n      headerElement.removeClass('fadeOut').addClass('fadeIn');\n    }\n\n    lastScrollTop = st;\n  })(jQuery);\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMS5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMvaGVhZGVyLmpzPzJmMTUiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHsgU3ZnQ29sb3IgfSBmcm9tICcuL2NsYXNzZXMvc3ZnQ29sb3InO1xuXG5sZXQgZGlkU2Nyb2xsO1xubGV0IGxhc3RTY3JvbGxUb3AgPSAwO1xubGV0IGRlbHRhID0gMTA7XG5sZXQgaGVhZGVyRWxlbWVudDtcblxuZXhwb3J0IGRlZmF1bHQgZnVuY3Rpb24gaGVhZGVyQmVoYXZpb3VyKCkge1xuICAoZnVuY3Rpb24gKCQpIHtcbiAgICBsZXQgbmF2aWdhdGlvbkVsZW1lbnQ7XG5cbiAgICAvLyBWYXJpYWJsZSB0byBjb250cm9sIHRoZSBiZWhhdmlvdXIgb2YgdGhlIGxvZ28uXG4gICAgLy8gVGhpcyBpcyBuZWVkZWQgYmVjYXVzZSBvZiB0aGUgbW9iaWxlIGhlYWRlci5cbiAgICBsZXQgbG9nb0JlaGF2aW91ciA9IHRydWU7XG5cbiAgICBsZXQgbW9iaWxlTWVudVZpc2libGUgPSBmYWxzZTtcblxuICAgIGxldCB3aGl0ZUNvbG9yID0gJyNmZGZkZmQnO1xuICAgIGxldCBibGFja0NvbG9yID0gJyMyZjJmMmYnO1xuXG4gICAgbGV0IG1vYmlsZU5hdmlnYXRpb25CdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbW9iaWxlTmF2QnRuJyk7XG4gICAgbGV0IG1vYmlsZU1lbnUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbW9iaWxlSGVhZGVyTWVudScpO1xuXG4gICAgLy8gSG93IGZhciB0aGUgdXNlciBuZWVkJ3MgdG8gc2Nyb2xsIGJlZm9yZSBtYWdpYyBoYXBwZW5zLlxuICAgIGxldCBzY3JvbGxvZmZzZXQgPSAyMDA7XG5cbiAgICBsZXQgaGVhZGVyTG9nbyA9IG5ldyBTdmdDb2xvcigpO1xuXG4gICAgbGV0IGFuaW1hdGlvbkVuZHMgPSAnYW5pbWF0aW9uZW5kIG9BbmltYXRpb25FbmQgbW96QW5pbWF0aW9uRW5kIHdlYmtpdEFuaW1hdGlvbkVuZCc7XG5cbiAgICAvKlxuICAgICogV2hhdCBpcyB0aGUgd2lkdGggb2YgdGhlIGJyb3dzZXI/XG4gICAgKiBJZiB0aGUgd2lkdGggaWYgZXF1YWwgb2YgZ3JlYXRlciB0aGFuIDc2OCAoYm9vdHN0cmFwIGNvbC1zbSksIHdlIHdpbGwgYXNzaWduIHRoZSB2YXJpYWJsZXMgdGhlIGVsZW1lbnRzIG9mIHRoZSBkZWt0b3AgaGVhZGVyIGFuZCBtZW51LlxuICAgICogSWYgdGhlIHdpZHRoIGlzIGxlc3MgdGhhbiA3NjggKGJvb3RzdHJhcCBjb2wteHMpLCB3ZSB3aWxsIGFzc2lnbiB0aGUgdmFyaWFibGVzIHRoZSBlbGVtZW50cyBvZiB0aGUgbW9iaWxlIGhlYWRlciBhbmQgbWVudS5cbiAgICAqL1xuICAgIGlmKHdpbmRvdy5pbm5lcldpZHRoID49IDc2OCkge1xuICAgICAgaGVhZGVyRWxlbWVudCA9ICQoJy5vLWhlYWRlcicpO1xuICAgICAgbmF2aWdhdGlvbkVsZW1lbnQgPSAkKCcubS1oZWFkZXJfX25hdicpO1xuICAgICAgaGVhZGVyTG9nby5zZXRPYmplY3QoJ2Rlc2t0b3BIZWFkZXJMb2dvT2JqJyk7XG4gICAgfSBlbHNlIGlmKHdpbmRvdy5pbm5lcldpZHRoIDwgNzY4KSB7XG4gICAgICBoZWFkZXJFbGVtZW50ID0gJCgnLm8tbW9iaWxlSGVhZGVyJyk7XG4gICAgICBuYXZpZ2F0aW9uRWxlbWVudCA9ICQoJy5tLW1vYmlsZUhlYWRlcl9fbmF2Jyk7XG4gICAgICBoZWFkZXJMb2dvLnNldE9iamVjdCgnbW9iaWxlSGVhZGVyTG9nb09iaicpO1xuICAgIH1cblxuICAgIGhlYWRlckxvZ28uc2V0U3ZnSXRlbXMoJ2EtbGVlcm95TG9nbycpO1xuICAgIGhlYWRlckxvZ28uc2V0Q29sb3Iod2hpdGVDb2xvcik7XG5cbiAgICAvLyBNb2JpbGUgbWVudSBidXR0b24gY2xpY2tcbiAgICBtb2JpbGVOYXZpZ2F0aW9uQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuXG4gICAgICAkKCcjbW9iaWxlTmF2QnRuJykudG9nZ2xlQ2xhc3MoJ2lzLWFjdGl2ZScpO1xuXG4gICAgICAvLyBBbmltYXRlIG1vYmlsZSBtZW51IHRvIHNsaWRlIGRvd24vdXBcbiAgICAgIHN3aXRjaChtb2JpbGVNZW51VmlzaWJsZSkge1xuICAgICAgICBjYXNlIHRydWU6XG4gICAgICAgICAgJCgnI21vYmlsZUhlYWRlck1lbnUnKS5hZGRDbGFzcygnc2xpZGVPdXRVcCcpLnJlbW92ZUNsYXNzKCdzbGlkZUluRG93bicpLm9uZShhbmltYXRpb25FbmRzLCAoKSA9PntcbiAgICAgICAgICAgICQodGhpcykuY3NzKCd2aXNpYmlsaXR5JywgJ2hpZGRlbicpO1xuICAgICAgICAgIH0pO1xuICAgICAgICAgIGJyZWFrO1xuXG4gICAgICAgIGNhc2UgZmFsc2U6XG4gICAgICAgICAgJCgnI21vYmlsZUhlYWRlck1lbnUnKS5hZGRDbGFzcygnc2xpZGVJbkRvd24nKS5yZW1vdmVDbGFzcygnc2xpZGVPdXRVcCcpLmNzcygndmlzaWJpbGl0eScsICd2aXNpYmxlJyk7XG4gICAgICAgICAgYnJlYWs7XG4gICAgICB9XG5cbiAgICAgIGxvZ29CZWhhdmlvdXIgPSAhbG9nb0JlaGF2aW91cjtcbiAgICAgIGhlYWRlckxvZ28uc2V0Q29sb3Iod2hpdGVDb2xvcik7XG4gICAgICBtb2JpbGVNZW51VmlzaWJsZSA9ICFtb2JpbGVNZW51VmlzaWJsZTtcblxuICAgICAgLypcbiAgICAgICogSGF2ZSB0aGUgdXNlciBzY3JvbGxlZCBkb3duIG1vcmUgdGhhbiBzY3JvbGwgb2Zmc2V0P1xuICAgICAgKiBJZiB0aGF0J3MgdGhlIGNhc2UuIFRoZSBoZWFkZXIgYmFja2dyb3VuZCBpcyBnb2luZyB0byBiZSB0b2dnbGVkLlxuICAgICAgKiBSZWFzb24gZm9yIHRoaXMgaXMgc2ltcGxlLiBXaGVuIHRoZSBtb2JpbGUgbWVudSBpcyBvcGVuIHdlIGRvbid0IHdhbnQgdGhlIGhlYWRlciB0byBoYXZlIGEgYmFja2dyb3VuZFxuICAgICAgKi9cbiAgICAgIGlmKHdpbmRvdy5wYWdlWU9mZnNldCA+IHNjcm9sbG9mZnNldCkge1xuICAgICAgICBoZWFkZXJFbGVtZW50LnRvZ2dsZUNsYXNzKCdvLWhlYWRlci0tYmFja2dyb3VuZCcpO1xuICAgICAgICAkKCcjbW9iaWxlTmF2QnRuJykudG9nZ2xlQ2xhc3MoJ20tbW9iaWxlSGVhZGVyTWVudUJ0bi0tZGFya0NvbG9yJyk7XG4gICAgICB9XG4gICAgICBpZihsb2dvQmVoYXZpb3VyKSB7XG4gICAgICAgIGlmKHdpbmRvdy5wYWdlWU9mZnNldCA8IHNjcm9sbG9mZnNldCkge1xuICAgICAgICAgIGhlYWRlckxvZ28uc2V0Q29sb3Iod2hpdGVDb2xvcik7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgaGVhZGVyTG9nby5zZXRDb2xvcihibGFja0NvbG9yKTtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH0pOyAvLyBNb2JpbGUgbWVudSBidXR0b24gZXZlbnQgbGlzdGVuZXJcblxuXG4gICAgLypcbiAgICAqIFNldCdzIHRoZSBoZWFkZXIgYmFja2dyb3VuZCBhbmQgZGFyayB0ZXh0IGNvbG9yXG4gICAgKiBpbiBjYXNlIHRoYXQgdGhlIHBhZ2UgaXMgbm90IGF0IHRoZSB0b3Agd2hlbiBpdCdzIGxvYWRlZC5cbiAgICAqIEFuZCBvbmx5IGlmIHRoZSBwYWdlIHdpZHRoIGlzID4gNzY4IHB4IChib290c3RyYXAgY29sLXNtKS5cbiAgICAqL1xuICAgIGlmKHdpbmRvdy5pbm5lcldpZHRoID49IDc2OCkge1xuICAgICAgaWYod2luZG93LnBhZ2VZT2Zmc2V0ID4gc2Nyb2xsb2Zmc2V0KSB7XG4gICAgICAgIG5hdmlnYXRpb25FbGVtZW50LmFkZENsYXNzKCdtLWhlYWRlcl9fbmF2LS1kYXJrVGV4dENvbG9yJyk7XG4gICAgICAgIGhlYWRlckVsZW1lbnQuYWRkQ2xhc3MoJ28taGVhZGVyLS1iYWNrZ3JvdW5kJyk7XG4gICAgICAgIGhlYWRlckxvZ28uc2V0Q29sb3IoYmxhY2tDb2xvcik7XG4gICAgICB9XG4gICAgfVxuXG5cbiAgICAvLyBTY3JvbGwgbGlzdGVuZXJcbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24gKCkge1xuXG4gICAgICAgIGRpZFNjcm9sbCA9IHRydWU7XG4gICAgICAgIHNldEludGVydmFsKGZ1bmN0aW9uKCkge1xuICAgICAgICAgIGlmKGRpZFNjcm9sbCkge1xuICAgICAgICAgICAgaWYoJCh0aGlzKS5zY3JvbGxUb3AoKSA+IDUwMCkge1xuICAgICAgICAgICAgICBoYXNTY3JvbGxlZCgpO1xuICAgICAgICAgICAgICBkaWRTY3JvbGwgPSBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICB9XG4gICAgICAgIH0sIDI1MCk7XG5cbiAgICAgIC8vIEhhcyB0aGUgdXNlciBzY3JvbGxlZCBvdmVyIHRoZSBzY3JvbGwgb2Zmc2V0P1xuICAgICAgaWYgKCQodGhpcykuc2Nyb2xsVG9wKCkgPiBzY3JvbGxvZmZzZXQpIHtcblxuICAgICAgICBpZihsb2dvQmVoYXZpb3VyKSB7XG4gICAgICAgICAgaGVhZGVyTG9nby5zZXRDb2xvcihibGFja0NvbG9yKTtcbiAgICAgICAgICBoZWFkZXJFbGVtZW50LmFkZENsYXNzKCdvLWhlYWRlci0tYmFja2dyb3VuZCcpO1xuICAgICAgICAgICQoJyNtb2JpbGVOYXZCdG4nKS5hZGRDbGFzcygnbS1tb2JpbGVIZWFkZXJNZW51QnRuLS1kYXJrQ29sb3InKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmKHdpbmRvdy5pbm5lcldpZHRoID49IDc2OCkge1xuICAgICAgICAgIG5hdmlnYXRpb25FbGVtZW50LmFkZENsYXNzKCdtLWhlYWRlcl9fbmF2LS1kYXJrVGV4dENvbG9yJyk7XG4gICAgICAgIH1cbiAgICAgIH0gZWxzZSBpZiAoJCh0aGlzKS5zY3JvbGxUb3AoKSA8IHNjcm9sbG9mZnNldCkge1xuICAgICAgICBpZihsb2dvQmVoYXZpb3VyKSB7XG4gICAgICAgICAgaGVhZGVyTG9nby5zZXRDb2xvcih3aGl0ZUNvbG9yKTtcbiAgICAgICAgICBoZWFkZXJFbGVtZW50LnJlbW92ZUNsYXNzKCdvLWhlYWRlci0tYmFja2dyb3VuZCcpO1xuICAgICAgICAgICQoJyNtb2JpbGVOYXZCdG4nKS5yZW1vdmVDbGFzcygnbS1tb2JpbGVIZWFkZXJNZW51QnRuLS1kYXJrQ29sb3InKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmKHdpbmRvdy5pbm5lcldpZHRoID49IDc2OCkge1xuICAgICAgICAgIG5hdmlnYXRpb25FbGVtZW50LnJlbW92ZUNsYXNzKCdtLWhlYWRlcl9fbmF2LS1kYXJrVGV4dENvbG9yJyk7XG4gICAgICAgIH1cbiAgICAgIH1cbiAgICB9KTtcbiAgfSkoalF1ZXJ5KTtcbn0gLy8gaGVhZGVyQmFoYXZpb3VyXG5cblxuZnVuY3Rpb24gaGFzU2Nyb2xsZWQoKSB7XG4gIChmdW5jdGlvbiAoJCkge1xuICAgIGxldCBzdCA9ICQod2luZG93KS5zY3JvbGxUb3AoKTtcbiAgICBpZihNYXRoLmFicyhsYXN0U2Nyb2xsVG9wIC0gc3QpIDw9ZGVsdGEpIHtcbiAgICAgIHJldHVybjtcbiAgICB9XG5cbiAgICBpZihzdCA+IGxhc3RTY3JvbGxUb3AgJiYgc3QgPiAyMCkge1xuICAgICAgLy8gU2Nyb2xsaW5nIGRvd25cbiAgICAgIGhlYWRlckVsZW1lbnQucmVtb3ZlQ2xhc3MoJ2ZhZGVJbicpLmFkZENsYXNzKCdhbmltYXRlZCcpLmFkZENsYXNzKCdmYWRlT3V0Jyk7XG5cbiAgICAgIC8vIEhhbmRsZSB0aGUgbGFuZ3VhZ2Ugc2VsZWN0b3IgcG9wdXAgd2hlbiBoZWFkZXIgZGlzYXBlYXJzLCBpZiBpdCdzIG9wZW4uXG4gICAgICAvLyAkKCcuby1sYW5ndWFnZVNlbGVjdG9yJykucmVtb3ZlQ2xhc3MoJ3NsaWRlT3V0VXAnKS5yZW1vdmVDbGFzcygnc2xpZGVJbkRvd24nKS5hZGRDbGFzcygnc2xpZGVPdXRVcCcpO1xuICAgICAgLy8gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xhbmd1YWdlU2VsZWN0b3JCbGFua2V0Jykuc3R5bGUudmlzaWJpbGl0eSA9ICdoaWRkZW4nO1xuICAgIH0gZWxzZSB7XG4gICAgICAvLyBTY3JvbGxpbmcgdXBwXG4gICAgICBoZWFkZXJFbGVtZW50LnJlbW92ZUNsYXNzKCdmYWRlT3V0JykuYWRkQ2xhc3MoJ2ZhZGVJbicpO1xuICAgIH1cblxuICAgIGxhc3RTY3JvbGxUb3AgPSBzdDtcbiAgfSkoalF1ZXJ5KTtcbn1cblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyBzcmMvanMvaGVhZGVyLmpzIl0sIm1hcHBpbmdzIjoiOzs7OztBQU9BO0FBQ0E7QUFSQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Ozs7O0FBS0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQVRBO0FBQ0E7QUFXQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7OztBQUtBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7Ozs7QUFLQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///1\n");

/***/ }),
/* 2 */
/*!************************************!*\
  !*** ./src/js/classes/svgColor.js ***!
  \************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nvar SvgColor = exports.SvgColor = function () {\n  function SvgColor() {\n    _classCallCheck(this, SvgColor);\n\n    this.state = {\n      object: '',\n      svgItems: '',\n      onLoad: false,\n      color: ''\n    };\n  }\n\n  _createClass(SvgColor, [{\n    key: 'setObject',\n    value: function setObject(setObj) {\n      this.state.object = document.getElementById(setObj);\n    }\n  }, {\n    key: 'setSvgItems',\n    value: function setSvgItems(setSvgItm) {\n      this.state.svgItems = this.state.object.contentDocument.getElementsByClassName(setSvgItm);\n    }\n  }, {\n    key: 'setColor',\n    value: function setColor(setClr) {\n      this.state.color = setClr;\n      for (var i = 0; i < this.state.svgItems.length; i++) {\n        this.state.svgItems[i].style.fill = this.state.color;\n      }\n    }\n  }, {\n    key: 'onLoad',\n    value: function onLoad(setLoad) {\n      this.state.onLoad = setLoad;\n    }\n  }]);\n\n  return SvgColor;\n}();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMi5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMvY2xhc3Nlcy9zdmdDb2xvci5qcz9kNThkIl0sInNvdXJjZXNDb250ZW50IjpbImV4cG9ydCBjbGFzcyBTdmdDb2xvciB7XG4gIGNvbnN0cnVjdG9yICgpIHtcbiAgICB0aGlzLnN0YXRlID0ge1xuICAgICAgb2JqZWN0OiAnJyxcbiAgICAgIHN2Z0l0ZW1zOiAnJyxcbiAgICAgIG9uTG9hZDogZmFsc2UsXG4gICAgICBjb2xvcjogJydcbiAgICB9O1xuICB9XG5cbiAgc2V0T2JqZWN0IChzZXRPYmopIHtcbiAgICB0aGlzLnN0YXRlLm9iamVjdCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHNldE9iaik7XG4gIH1cblxuICBzZXRTdmdJdGVtcyAoc2V0U3ZnSXRtKSB7XG4gICAgdGhpcy5zdGF0ZS5zdmdJdGVtcyA9IHRoaXMuc3RhdGUub2JqZWN0LmNvbnRlbnREb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHNldFN2Z0l0bSk7XG4gIH1cblxuICBzZXRDb2xvciAoc2V0Q2xyKSB7XG4gICAgdGhpcy5zdGF0ZS5jb2xvciA9IHNldENscjtcbiAgICBmb3IgKGxldCBpID0gMDsgaSA8IHRoaXMuc3RhdGUuc3ZnSXRlbXMubGVuZ3RoOyBpKyspIHtcbiAgICAgIHRoaXMuc3RhdGUuc3ZnSXRlbXNbaV0uc3R5bGUuZmlsbCA9IHRoaXMuc3RhdGUuY29sb3I7XG4gICAgfVxuICB9XG5cbiAgb25Mb2FkIChzZXRMb2FkKSB7XG4gICAgdGhpcy5zdGF0ZS5vbkxvYWQgPSBzZXRMb2FkO1xuICB9XG59XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gc3JjL2pzL2NsYXNzZXMvc3ZnQ29sb3IuanMiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBQUE7QUFDQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFKQTtBQU1BO0FBQ0E7OztBQUNBO0FBQ0E7QUFDQTs7O0FBRUE7QUFDQTtBQUNBOzs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUVBO0FBQ0E7QUFDQTs7OztBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///2\n");

/***/ }),
/* 3 */
/*!****************************!*\
  !*** ./src/js/language.js ***!
  \****************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\nexports.default = language;\nfunction language() {\n  (function ($) {\n    var languageButton = document.getElementsByClassName('m-headerLanguage')[0];\n\n    popupOffset(languageButton);\n\n    var selectorVisiblity = false;\n    var languageSelector = $('.o-languageSelector');\n    var blanket = document.getElementById('languageSelectorBlanket');\n\n    languageButton.addEventListener('click', function () {\n      blanket.style.visibility = 'visible';\n\n      languageSelector.removeClass('visibilityHidden').addClass('visibilityVisible');\n      languageSelector.addClass('animated').removeClass('slideOutUp').addClass('slideInDown');\n\n      blanket.addEventListener('click', function () {\n        blanket.style.visibility = 'hidden';\n        languageSelector.addClass('slideOutUp').removeClass('slideInDown');\n      });\n    });\n  })(jQuery);\n}\n\n// Keeps track of the popup offset from the right edge\nfunction popupOffset(languageButton) {\n  var buttonPosition = languageButton.getBoundingClientRect();\n  var popupElement = document.getElementsByClassName('o-languageSelector')[0];\n  popupElement.style.left = Math.floor(buttonPosition.left + languageButton.offsetWidth / 2 - popupElement.offsetWidth / 2) + 'px';\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMvbGFuZ3VhZ2UuanM/OGYwNyJdLCJzb3VyY2VzQ29udGVudCI6WyJleHBvcnQgZGVmYXVsdCBmdW5jdGlvbiBsYW5ndWFnZSgpIHtcbiAgICAoZnVuY3Rpb24gKCQpIHtcbiAgICAgIGxldCBsYW5ndWFnZUJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ20taGVhZGVyTGFuZ3VhZ2UnKVswXTtcblxuICAgICAgcG9wdXBPZmZzZXQobGFuZ3VhZ2VCdXR0b24pO1xuXG4gICAgICBsZXQgc2VsZWN0b3JWaXNpYmxpdHkgPSBmYWxzZTtcbiAgICAgIGxldCBsYW5ndWFnZVNlbGVjdG9yID0gJCgnLm8tbGFuZ3VhZ2VTZWxlY3RvcicpO1xuICAgICAgbGV0IGJsYW5rZXQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbGFuZ3VhZ2VTZWxlY3RvckJsYW5rZXQnKTtcblxuXG4gICAgICBsYW5ndWFnZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgICAgICBibGFua2V0LnN0eWxlLnZpc2liaWxpdHkgPSAndmlzaWJsZSc7XG5cbiAgICAgICAgbGFuZ3VhZ2VTZWxlY3Rvci5yZW1vdmVDbGFzcygndmlzaWJpbGl0eUhpZGRlbicpLmFkZENsYXNzKCd2aXNpYmlsaXR5VmlzaWJsZScpO1xuICAgICAgICBsYW5ndWFnZVNlbGVjdG9yLmFkZENsYXNzKCdhbmltYXRlZCcpLnJlbW92ZUNsYXNzKCdzbGlkZU91dFVwJykuYWRkQ2xhc3MoJ3NsaWRlSW5Eb3duJyk7XG5cbiAgICAgICAgYmxhbmtldC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgICAgICAgIGJsYW5rZXQuc3R5bGUudmlzaWJpbGl0eSA9ICdoaWRkZW4nO1xuICAgICAgICAgIGxhbmd1YWdlU2VsZWN0b3IuYWRkQ2xhc3MoJ3NsaWRlT3V0VXAnKS5yZW1vdmVDbGFzcygnc2xpZGVJbkRvd24nKTtcbiAgICAgICAgfSk7XG4gICAgICB9KTtcbiAgICB9KShqUXVlcnkpO1xufVxuXG4vLyBLZWVwcyB0cmFjayBvZiB0aGUgcG9wdXAgb2Zmc2V0IGZyb20gdGhlIHJpZ2h0IGVkZ2VcbmZ1bmN0aW9uIHBvcHVwT2Zmc2V0KGxhbmd1YWdlQnV0dG9uKSB7XG4gIGxldCBidXR0b25Qb3NpdGlvbiA9IGxhbmd1YWdlQnV0dG9uLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuICBsZXQgcG9wdXBFbGVtZW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnby1sYW5ndWFnZVNlbGVjdG9yJylbMF07XG4gIHBvcHVwRWxlbWVudC5zdHlsZS5sZWZ0ID0gTWF0aC5mbG9vcihidXR0b25Qb3NpdGlvbi5sZWZ0ICsgKGxhbmd1YWdlQnV0dG9uLm9mZnNldFdpZHRoLzIpIC0gKHBvcHVwRWxlbWVudC5vZmZzZXRXaWR0aC8yKSkgKyAncHgnO1xufVxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHNyYy9qcy9sYW5ndWFnZS5qcyJdLCJtYXBwaW5ncyI6Ijs7Ozs7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///3\n");

/***/ }),
/* 4 */
/*!********************************!*\
  !*** ./src/js/knowledgehub.js ***!
  \********************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\nexports.grid = grid;\nexports.cellHeight = cellHeight;\nexports.menu = menu;\nfunction grid() {\n  (function ($) {\n    $('.o-knowledgeHubGrid').masonry({\n      itemSelector: '.o-knowledgeHubCell',\n      percentPosition: true,\n      horizontalOrder: true,\n      gutter: 15\n    });\n  })(jQuery);\n}\n\nfunction cellHeight() {\n  var knowledgeHubCells = document.getElementsByClassName('o-knowledgeHubCell');\n\n  for (var i = 0; i < knowledgeHubCells.length; i++) {\n    var knowledgeHubCell = document.getElementById('cell-' + i);\n    if (knowledgeHubCell.getAttribute('data-imgprops') == 0) {\n      knowledgeHubCell.style.minHeight = '200px';\n    } else if (knowledgeHubCell.getAttribute('data-imgprops') == -1) {\n      knowledgeHubCell.style.height = knowledgeHubCell.offsetWidth + 'px';\n    } else {\n      knowledgeHubCell.style.height = knowledgeHubCell.getAttribute('data-imgprops') * knowledgeHubCell.offsetWidth + 'px';\n    }\n  }\n}\n\nfunction menu() {\n  var buttons = Array.from(document.getElementsByClassName('a-knowledgeHubMenuList__item'));\n  var dropdowns = document.getElementsByClassName('o-knowledgeHubMenuDropdown');\n\n  buttons.map(function (button, index) {\n    button.addEventListener('click', function () {\n      for (var i = 0; i < buttons.length; i++) {\n        if (i != index) {\n          dropdowns[i].classList.remove('display');\n          buttons[i].classList.remove('activeKnowHubMenu');\n        }\n      }\n\n      button.classList.toggle('activeKnowHubMenu');\n      dropdowns[index].classList.toggle('display');\n    });\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiNC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMva25vd2xlZGdlaHViLmpzP2I0YzEiXSwic291cmNlc0NvbnRlbnQiOlsiZXhwb3J0IGZ1bmN0aW9uIGdyaWQoKSB7XG4gIChmdW5jdGlvbiAoJCkge1xuICAgICQoJy5vLWtub3dsZWRnZUh1YkdyaWQnKS5tYXNvbnJ5KHtcbiAgICAgIGl0ZW1TZWxlY3RvcjogJy5vLWtub3dsZWRnZUh1YkNlbGwnLFxuICAgICAgcGVyY2VudFBvc2l0aW9uOiAgdHJ1ZSxcbiAgICAgIGhvcml6b250YWxPcmRlcjogIHRydWUsXG4gICAgICBndXR0ZXI6ICAgICAgICAgICAxNSxcbiAgICB9KTtcbiAgfSkoalF1ZXJ5KTtcbn1cblxuZXhwb3J0IGZ1bmN0aW9uIGNlbGxIZWlnaHQoKSB7XG4gIGxldCBrbm93bGVkZ2VIdWJDZWxscyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ28ta25vd2xlZGdlSHViQ2VsbCcpO1xuXG4gIGZvciAodmFyIGkgPSAwOyBpIDwga25vd2xlZGdlSHViQ2VsbHMubGVuZ3RoOyBpKyspIHtcbiAgICBsZXQga25vd2xlZGdlSHViQ2VsbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjZWxsLScgKyBpKTtcbiAgICBpZiAoa25vd2xlZGdlSHViQ2VsbC5nZXRBdHRyaWJ1dGUoJ2RhdGEtaW1ncHJvcHMnKSA9PSAwKSB7XG4gICAgICBrbm93bGVkZ2VIdWJDZWxsLnN0eWxlLm1pbkhlaWdodCA9ICcyMDBweCc7XG4gICAgfSBlbHNlIGlmKGtub3dsZWRnZUh1YkNlbGwuZ2V0QXR0cmlidXRlKCdkYXRhLWltZ3Byb3BzJykgPT0gLTEpIHtcbiAgICAgIGtub3dsZWRnZUh1YkNlbGwuc3R5bGUuaGVpZ2h0ID0ga25vd2xlZGdlSHViQ2VsbC5vZmZzZXRXaWR0aCArICdweCc7XG4gICAgfVxuICAgIGVsc2Uge1xuICAgICAga25vd2xlZGdlSHViQ2VsbC5zdHlsZS5oZWlnaHQgPSBrbm93bGVkZ2VIdWJDZWxsLmdldEF0dHJpYnV0ZSgnZGF0YS1pbWdwcm9wcycpICoga25vd2xlZGdlSHViQ2VsbC5vZmZzZXRXaWR0aCArICdweCc7XG4gICAgfVxuICB9XG59XG5cbmV4cG9ydCBmdW5jdGlvbiBtZW51KCkge1xuICBsZXQgYnV0dG9ucyA9IEFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnYS1rbm93bGVkZ2VIdWJNZW51TGlzdF9faXRlbScpKTtcbiAgbGV0IGRyb3Bkb3ducyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ28ta25vd2xlZGdlSHViTWVudURyb3Bkb3duJyk7XG5cbiAgYnV0dG9ucy5tYXAoKGJ1dHRvbiwgaW5kZXgpID0+IHtcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XG4gICAgICBmb3IgKHZhciBpID0gMDsgaSA8IGJ1dHRvbnMubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgaWYoaSAhPSBpbmRleCkge1xuICAgICAgICAgIGRyb3Bkb3duc1tpXS5jbGFzc0xpc3QucmVtb3ZlKCdkaXNwbGF5Jyk7XG4gICAgICAgICAgYnV0dG9uc1tpXS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmVLbm93SHViTWVudScpO1xuICAgICAgICB9XG4gICAgICB9XG5cbiAgICAgIGJ1dHRvbi5jbGFzc0xpc3QudG9nZ2xlKCdhY3RpdmVLbm93SHViTWVudScpO1xuICAgICAgZHJvcGRvd25zW2luZGV4XS5jbGFzc0xpc3QudG9nZ2xlKCdkaXNwbGF5Jyk7XG4gICAgfSk7XG4gIH0pO1xufVxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHNyYy9qcy9rbm93bGVkZ2VodWIuanMiXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUE7QUFXQTtBQWdCQTtBQTNCQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUpBO0FBTUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///4\n");

/***/ }),
/* 5 */
/*!*************************!*\
  !*** ./src/js/utils.js ***!
  \*************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\nexports.postFlexSlider = postFlexSlider;\nexports.formPopup = formPopup;\n// import Underscore from 'underscore';\n\n\nfunction postFlexSlider() {\n  (function ($) {\n    $('#slider').flexslider({\n      animation: \"slide\",\n      animationLoop: false,\n      slideshow: false,\n      smoothHeight: true\n    });\n  })(jQuery);\n}\n\nfunction formPopup() {\n  var closeButton = document.getElementsByClassName('a-popupFormContent__close')[0];\n  var openButtons = Array.from(document.getElementsByClassName('a-twoColumnsProductPage__button'));\n\n  openButtons.map(function (button) {\n    button.addEventListener('click', function () {\n      document.getElementsByClassName('o-popupForm')[0].style.display = 'block';\n      document.getElementsByClassName('o-formPopupCover')[0].style.display = 'block';\n    });\n  });\n\n  closeButton.addEventListener('click', function () {\n    document.getElementsByClassName('o-popupForm')[0].style.display = 'none';\n    document.getElementsByClassName('o-formPopupCover')[0].style.display = 'none';\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiNS5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMvdXRpbHMuanM/M2M5MCJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBpbXBvcnQgVW5kZXJzY29yZSBmcm9tICd1bmRlcnNjb3JlJztcblxuXG5cbmV4cG9ydCBmdW5jdGlvbiBwb3N0RmxleFNsaWRlcigpIHsoZnVuY3Rpb24gKCQpIHtcbiAgJCgnI3NsaWRlcicpLmZsZXhzbGlkZXIoe1xuICAgIGFuaW1hdGlvbjogXCJzbGlkZVwiLFxuICAgIGFuaW1hdGlvbkxvb3A6IGZhbHNlLFxuICAgIHNsaWRlc2hvdzogZmFsc2UsXG4gICAgc21vb3RoSGVpZ2h0OiB0cnVlLFxuICB9KTtcbn0pKGpRdWVyeSk7fVxuXG5leHBvcnQgZnVuY3Rpb24gZm9ybVBvcHVwKCkge1xuICBsZXQgY2xvc2VCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdhLXBvcHVwRm9ybUNvbnRlbnRfX2Nsb3NlJylbMF07XG4gIGxldCBvcGVuQnV0dG9ucyA9IEFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnYS10d29Db2x1bW5zUHJvZHVjdFBhZ2VfX2J1dHRvbicpKTtcblxuICBvcGVuQnV0dG9ucy5tYXAoKGJ1dHRvbikgPT4ge1xuICAgIGJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnby1wb3B1cEZvcm0nKVswXS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcbiAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ28tZm9ybVBvcHVwQ292ZXInKVswXS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcblxuICAgIH0pO1xuICB9KTtcblxuICBjbG9zZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgIGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ28tcG9wdXBGb3JtJylbMF0uc3R5bGUuZGlzcGxheSA9ICdub25lJztcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdvLWZvcm1Qb3B1cENvdmVyJylbMF0uc3R5bGUuZGlzcGxheSA9ICdub25lJztcbiAgfSk7XG59XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gc3JjL2pzL3V0aWxzLmpzIl0sIm1hcHBpbmdzIjoiOzs7OztBQUlBO0FBU0E7QUFiQTtBQUNBO0FBQ0E7QUFFQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUpBO0FBTUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///5\n");

/***/ })
/******/ ]);