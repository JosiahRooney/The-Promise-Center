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

function socialIconSwap() {
  var socialIcons = document.querySelector('.body-social-icons');
  if (!socialIcons) return false;

  var headerSocialIcons = document.querySelector('.header-social-icons');
  var offset = socialIcons.getBoundingClientRect();
  if (offset.top <= 0) {
    headerSocialIcons.style.opacity = 1;
  }
  if (offset.top > 0) {
    headerSocialIcons.style.opacity = 0;
  }
}


// Event Listeners
window.addEventListener("scroll", function(e) {
  var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

  shrinkHeader(scrollTop, 200);
  socialIconSwap();
});











console.log("theme.js loaded!");
