var rishiExports;!function(){"use strict";var e={};function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function r(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function n(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function o(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?n(Object(r),!0).forEach((function(t){i(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):n(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function i(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}(function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(e);var a=function(e,t){return"string"!=typeof e?e:e.replace(/\s\s+/g," ").trim().split(" ").reduce((function(e,r){return o(o({},e),{},i({},r,t))}),{})},c=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),i(this,"_events",{})}var n,c;return n=e,c=[{key:"on",value:function(e,r){var n=this,c=a(e,r);return Object.keys(c).map((function(e){return n._events=o(o({},n._events),{},i({},e,[].concat(function(e){if(Array.isArray(e))return t(e)}(r=n._events[e]||[])||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(r)||function(e,r){if(e){if("string"==typeof e)return t(e,r);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?t(e,r):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),[c[e]])));var r})),this}},{key:"off",value:function(e,t){var r=this,n=a(e,t);return Object.keys(n).map((function(e){r._events[e]&&(n[e]?r._events[e].splice(r._events[e].indexOf(t)>>>0,1):r._events[e]=[])})),this}},{key:"trigger",value:function(e,t){var r=this;console.debug({eventName:e,data:t});var n=a(e),o=function(e){return e&&e.call(window,t)};return Object.keys(n).map((function(e){try{(r._events[e]||[]).map(o),(r._events.all||[]).map(o)}catch(e){if(console.log("%c [Events] Exception raised.","color: red; font-weight: bold;"),"undefined"==typeof console)throw e;console.error(e)}})),this}}],c&&r(n.prototype,c),Object.defineProperty(n,"prototype",{writable:!1}),e}(),u=new c;window.rtEvents=u,e.default=u,(rishiExports=void 0===rishiExports?{}:rishiExports).events=e}();