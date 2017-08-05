"use strict";

console.log("theme.js loading...");

function shrinkHeader(verticalPos, breakpoint) {
  var header = document.querySelector(".primary-header");

  if (verticalPos >= breakpoint) {
    header.classList.add("shrink-header");
  } else {
    header.classList.remove("shrink-header");
  }
}


// Event Listeners
window.addEventListener("scroll", function(e) {
  var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

  shrinkHeader(scrollTop, 200);
});











console.log("theme.js loaded!");
