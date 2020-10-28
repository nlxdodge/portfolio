import Swiper from "swiper/bundle";
import "swiper/swiper-bundle.css";
import Prism from "prismjs";

function toggleTheme() {
  console.log("toggle");
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

(function() {
  // set the default theme from storage on load
  setTheme(localStorage.getItem("theme"));

  // register toggle color button
  let buttons = document.getElementsByClassName("toggle-colors");
  Array.from(buttons).forEach((element) => {
    element.addEventListener("click", () => {
      toggleTheme();
    });
  });

  // highlight all code
  Prism.highlightAll();

  // register swiper
  new Swiper(".swiper-container", {
    loop: true,
    effect: "fade",
    preloadImages: false,
    lazy: true,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  // 404 error gif
  let gifs = document.getElementsByClassName("error-gif");
  Array.from(gifs).forEach((element) => {
    element.addEventListener("click", (gif) => {
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
})();
