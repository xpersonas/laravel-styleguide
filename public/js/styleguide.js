function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==_typeof(e)&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}([function(e,t,n){n(1),e.exports=n(2)},function(e,t){var n=document.querySelectorAll(".simple-styleguide--view-sourecode");[].forEach.call(n,function(e){e.addEventListener("click",function(){e.nextElementSibling.classList.toggle("active")})});var o=document.querySelectorAll(".calculate");[].forEach.call(o,function(e){var t=e.querySelector(".measure"),n=e.querySelector(".info"),o="<label>line-height:</label> ".concat(window.getComputedStyle(t).lineHeight),r="<label>font-size:</label> ".concat(window.getComputedStyle(t).fontSize),l="<label>margin:</label> ".concat(window.getComputedStyle(t).marginBottom,"\n        ").concat(window.getComputedStyle(t).marginRight," ").concat(window.getComputedStyle(t).marginBottom," ").concat(window.getComputedStyle(t).marginLeft);n.innerHTML="".concat(r,"<br/>").concat(o,"<br/>").concat(l)})},function(e,t){}]);
