window.$ = window.jQuery = require("jquery");
require("slick-carousel");

$(document).ready(function() {
  $(".slick-slider").slick({
    lazyLoad: "ondemand",
    arrows: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 3500,
    infinite: true,
  });
});
