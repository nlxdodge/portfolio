window.$ = window.jQuery = require("jquery");
require("slick-carousel");

function setDarkTheme() {
  localStorage.setItem("theme", "dark");
  $(".toggle-colors i").addClass("fa-sun");
  $(".toggle-colors i").removeClass("fa-moon");
  document.documentElement.style.setProperty("--template-color", "#202020");
  document.documentElement.style.setProperty(
    "--template-color-opposing",
    "#ececec"
  );
}

function setLightTheme() {
  localStorage.setItem("theme", "light");
  $(".toggle-colors i").removeClass("fa-sun");
  $(".toggle-colors i").addClass("fa-moon");
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

jQuery(function() {
  $(".slick-slider").slick({
    lazyLoad: "ondemand",
    arrows: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 3500,
    infinite: true,
  });
  
  applyTheme();

  $(".error-gif").each(function() {
    let gif = $(this);
    fetch(
      "https://api.giphy.com/v1/gifs/random?api_key=LXYWwiKGkGMeBqKyOlb6tRBKfzIhmH91&tag=technical%20difficulties&rating=PG-13",
      {
        method: "GET",
      }
    )
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        gif.attr("src", json.data.image_url);
      });
  });

  $(".toggle-colors").on('click', function() {
    localStorage.setItem(
      "theme",
      localStorage.getItem("theme") == "dark" ? "light" : "dark"
    );
    applyTheme();
  });
});
