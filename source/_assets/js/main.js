window.$ = window.jQuery = require("jquery");
require("slick-carousel");

$(document).ready(function() {
  console.log("page loaded");
  $(".slick-slider").slick({
    lazyLoad: "ondemand",
    arrows: false,
    fade: true,
  });
});
