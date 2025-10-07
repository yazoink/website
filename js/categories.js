var categoriesList = document.getElementById("categories-list");
var categoriesButton = document.getElementById("categories-button");

function toggleCategories() {
  var categoriesList = document.getElementById("categories-list");
  var categoriesButton = document.getElementById("categories-button");
  if (window.getComputedStyle(categoriesList).display == "none") {
    categoriesList.style.display = "block";
    categoriesButton.innerHTML =
      "<b>Categories</b> <img src='images/graphics/gruvbox/up.webp'>";
  } else {
    categoriesList.style.display = "none";
    categoriesButton.innerHTML =
      "<b>Categories</b> <img src='images/graphics/gruvbox/down.webp'>";
  }
}

categoriesButton.addEventListener("click", toggleCategories);
