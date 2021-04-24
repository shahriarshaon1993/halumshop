/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/dashboard.js":
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
/***/ (() => {

eval("// Category Delete\n$(document).ready(function () {\n  $('.delete-category').click(function () {\n    var url = $(this).attr('data-url');\n    $(\"#deleteForm\").attr(\"action\", url);\n  });\n}); // Ajax Image loader\n\nfunction readURL(input) {\n  if (input.files && input.files[0]) {\n    var reader = new FileReader();\n\n    reader.onload = function (e) {\n      $('#one').attr('src', e.target.result).width(120).height(80);\n    };\n\n    reader.readAsDataURL(input.files[0]);\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGFzaGJvYXJkLmpzPzI0YjYiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJjbGljayIsInVybCIsImF0dHIiLCJyZWFkVVJMIiwiaW5wdXQiLCJmaWxlcyIsInJlYWRlciIsIkZpbGVSZWFkZXIiLCJvbmxvYWQiLCJlIiwidGFyZ2V0IiwicmVzdWx0Iiwid2lkdGgiLCJoZWlnaHQiLCJyZWFkQXNEYXRhVVJMIl0sIm1hcHBpbmdzIjoiQUFDQTtBQUNBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFDMUJGLEVBQUFBLENBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCRyxLQUF0QixDQUE0QixZQUFZO0FBQ3BDLFFBQUlDLEdBQUcsR0FBR0osQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRSyxJQUFSLENBQWEsVUFBYixDQUFWO0FBQ0FMLElBQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJLLElBQWpCLENBQXNCLFFBQXRCLEVBQWdDRCxHQUFoQztBQUNILEdBSEQ7QUFJSCxDQUxELEUsQ0FPQTs7QUFFQSxTQUFTRSxPQUFULENBQWlCQyxLQUFqQixFQUF3QjtBQUNwQixNQUFJQSxLQUFLLENBQUNDLEtBQU4sSUFBZUQsS0FBSyxDQUFDQyxLQUFOLENBQVksQ0FBWixDQUFuQixFQUFtQztBQUMvQixRQUFJQyxNQUFNLEdBQUcsSUFBSUMsVUFBSixFQUFiOztBQUNBRCxJQUFBQSxNQUFNLENBQUNFLE1BQVAsR0FBZ0IsVUFBVUMsQ0FBVixFQUFhO0FBQ3pCWixNQUFBQSxDQUFDLENBQUMsTUFBRCxDQUFELENBQ0tLLElBREwsQ0FDVSxLQURWLEVBQ2lCTyxDQUFDLENBQUNDLE1BQUYsQ0FBU0MsTUFEMUIsRUFFS0MsS0FGTCxDQUVXLEdBRlgsRUFHS0MsTUFITCxDQUdZLEVBSFo7QUFJSCxLQUxEOztBQU1BUCxJQUFBQSxNQUFNLENBQUNRLGFBQVAsQ0FBcUJWLEtBQUssQ0FBQ0MsS0FBTixDQUFZLENBQVosQ0FBckI7QUFDSDtBQUNKIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBDYXRlZ29yeSBEZWxldGVcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcbiAgICAkKCcuZGVsZXRlLWNhdGVnb3J5JykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgdXJsID0gJCh0aGlzKS5hdHRyKCdkYXRhLXVybCcpO1xuICAgICAgICAkKFwiI2RlbGV0ZUZvcm1cIikuYXR0cihcImFjdGlvblwiLCB1cmwpO1xuICAgIH0pO1xufSk7XG5cbi8vIEFqYXggSW1hZ2UgbG9hZGVyXG5cbmZ1bmN0aW9uIHJlYWRVUkwoaW5wdXQpIHtcbiAgICBpZiAoaW5wdXQuZmlsZXMgJiYgaW5wdXQuZmlsZXNbMF0pIHtcbiAgICAgICAgdmFyIHJlYWRlciA9IG5ldyBGaWxlUmVhZGVyKCk7XG4gICAgICAgIHJlYWRlci5vbmxvYWQgPSBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgJCgnI29uZScpXG4gICAgICAgICAgICAgICAgLmF0dHIoJ3NyYycsIGUudGFyZ2V0LnJlc3VsdClcbiAgICAgICAgICAgICAgICAud2lkdGgoMTIwKVxuICAgICAgICAgICAgICAgIC5oZWlnaHQoODApO1xuICAgICAgICB9O1xuICAgICAgICByZWFkZXIucmVhZEFzRGF0YVVSTChpbnB1dC5maWxlc1swXSk7XG4gICAgfVxufVxuXG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2Rhc2hib2FyZC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/dashboard.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/dashboard.js"]();
/******/ 	
/******/ })()
;