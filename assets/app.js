import "./bootstrap.js";
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import "./styles/app.css";
import "../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js";

console.log("This log comes from assets/app.js - welcome to AssetMapper! 🎉");

const btn1 = document.querySelector("#btn-1");

btn1.addEventListener("click", () => {
  console.log("bouton cliqué !");
});
