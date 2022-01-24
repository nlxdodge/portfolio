import Prism from "prismjs";
import Swiper, {
  Autoplay,
  EffectFade, Lazy, Navigation,
  Pagination
} from "swiper";
Swiper.use([Navigation, Pagination, Lazy, Autoplay, EffectFade]);

const quotes = [
  '"You\'ve got to have a sense of humor to keep your sanity." – Lance Bass',
  '"Stand on the shoulders of giants." - Bernard of Chartres',
  '"Dream small or don\'t dream at all" - Lightning McQueen',
  '"All models are wrong, some are useful." - George Box',
  '"Never forget you are someone\'s reason to smile, because you are a joke." - Rimuru Tempest',
  '"Planning for failure is the worst type of planning" - Rick Sanchez',
  '"Words are about communicating" - Linus Sebastian',
  '"How can you move forward if you keep regretting the past?" - Edward Elric ',
  '"The worst battle is between what you know, and what you feel" - Voilet Evergarden',
  '"I know we said goodbye, but I didn\'t know. It was forever." - Voilet Evergarden',
];

function randomFromArray(inputArray) {
  return inputArray[Math.floor(Math.random() * inputArray.length)];
}

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

(function () {
  // check the default theme from the user
  const darkScheme = window.matchMedia("(prefers-color-scheme: dark)");
  darkScheme.addEventListener("change", () => {
    toggleTheme();
  });

  // set the default theme from storage on load
  setTheme(localStorage.getItem("theme"));

  // set error quote
  const quoteDiv = document.getElementById("error-quote");
  quoteDiv.innerHTML = randomFromArray(quotes);

  // register toggle color button
  const buttons = document.getElementsByClassName("toggle-colors");
  Array.from(buttons).forEach((element) => {
    element.addEventListener("click", () => {
      toggleTheme();
    });
  });

  // highlight all code
  Prism.highlightAll();

  // register swiper
  const swiper = new Swiper(".swiper-container", {
    autoplay: {
      delay: 5000,
    },
    loop: true,
    fadeEffect: {
      crossFade: true,
    },
    grabCursor: true,
    preloadImages: false,
    lazy: true,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });
})();
