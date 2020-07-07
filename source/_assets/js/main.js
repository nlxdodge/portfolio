window.$ = window.jQuery = require("jquery");
require("slick-carousel");

function slickSlider() {
  $(".slick-slider").slick({
    lazyLoad: "ondemand",
    arrows: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 3500,
    infinite: true,
  });
}

function setDarkTheme() {
  localStorage.setItem("theme", "dark");
  $('.toggle-colors i').addClass('fa-sun');
  $('.toggle-colors i').removeClass('fa-moon');
  document.documentElement.style.setProperty("--template-color", "#202020");
  document.documentElement.style.setProperty(
    "--template-color-opposing",
    "#ececec"
  );
}

function setLightTheme() {
  localStorage.setItem("theme", "light");
  $('.toggle-colors i').removeClass('fa-sun');
  $('.toggle-colors i').addClass('fa-moon');
  document.documentElement.style.setProperty("--template-color", "#ececec");
  document.documentElement.style.setProperty(
    "--template-color-opposing",
    "#202020"
  );
}

function applyTheme() {
  if (localStorage.getItem("theme") == "dark") {
    setDarkTheme();
  } else {
    setLightTheme();
  }
}

$(document).ready(function() {
  slickSlider();
  applyTheme();

  $(".toggle-colors").click(function() {
    localStorage.setItem(
      "theme",
      localStorage.getItem("theme") == "dark" ? "light" : "dark"
    );
    applyTheme();
  });
});
