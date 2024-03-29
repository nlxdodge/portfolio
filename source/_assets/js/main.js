import Glide from '@glidejs/glide';
import Prism from "prismjs";

Prism.manual = true;

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

/**
 * Get a random object from the given array
 * @param {Any} inputArray 
 * @returns {Any} outputItem
 */
function randomFromArray(inputArray) {
  return inputArray[Math.floor(Math.random() * inputArray.length)];
}

/**
 * Toggles the current theme state
 */
function toggleTheme() {
  if (localStorage.getItem("theme") === "light") {
    setTheme("dark");
  } else {
    setTheme("light");
  }
}

/**
 * Switch the theme by saving the state to localstorage and switching a global CSS class
 * @param {string} theme 
 */
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
  const quoteDiv = document.getElementsByClassName("error-quote");
  Array.from(quoteDiv).forEach((element) => {
    element.innerHTML = randomFromArray(quotes);
  });

  // register toggle color button
  const buttons = document.getElementsByClassName("toggle-colors");
  Array.from(buttons).forEach((element) => {
    element.addEventListener("click", () => {
      toggleTheme();
    });
  });

  // register glider
  const found = document.getElementsByClassName("glide");
  if(found.length == 1) {
    new Glide('.glide', {
      type: 'carousel',
      perView: 1,
      autoplay: 5000,
      hoverpause: true
    }).mount()
  }

  // highlight all code
  Prism.highlightAll();
})();
