import Swiper, {
  Navigation,
  Pagination,
  Lazy,
  Autoplay,
  EffectFade,
} from "swiper";
Swiper.use([Navigation, Pagination, Lazy, Autoplay, EffectFade]);
import "swiper/swiper-bundle.css";
import Prism from "prismjs";

function toggleTheme() {
  if (localStorage.getItem("theme") === "light") {
    setTheme("dark");
  } else {
    setTheme("light");
  }
}

function setTheme(theme = "dark") {
  if (theme == "light") {
    localStorage.setItem("theme", "light");
    document.body.classList.add("light");
  } else {
    localStorage.setItem("theme", "dark");
    document.body.classList.remove("light");
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
    autoplay: {
      delay: 5000,
    },
    loop: true,
    fadeEffect: {
      crossFade: true,
    },
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
  Array.from(gifs).forEach((gif) => {
    fetch(
      "https://api.giphy.com/v1/gifs/random?api_key=LXYWwiKGkGMeBqKyOlb6tRBKfzIhmH91&tag=error&rating=PG-13",
      {
        method: "GET",
      }
    )
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        gif.src = json.data.image_url;
      });
  });
})();
