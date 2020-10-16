window.$ = window.jQuery = require("jquery");
require("slick-carousel");

function toggleTheme() {
  if (localStorage.getItem("theme") === "light") {
    setTheme("dark");
  } else {
    setTheme("light");
  }
}

function setTheme(theme) {
  if (theme == "dark") {
    localStorage.setItem("theme", "dark");
    document.body.classList.remove("light");
  } else {
    localStorage.setItem("theme", "light");
    document.body.classList.add("light");
  }
}

jQuery(function() {
  setTheme(localStorage.getItem("theme"));

  $(".toggle-colors").on("click", function() {
    toggleTheme();
  });

  $(".slick-slider").slick({
    lazyLoad: "ondemand",
    arrows: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 3500,
    infinite: true,
  });

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
});
