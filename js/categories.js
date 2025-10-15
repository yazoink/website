var categoriesList = document.getElementById("categories-list");
var categoriesButton = document.getElementById("categories-button");

function toggleCategories() {
  var categoriesList = document.getElementById("categories-list");
  var categoriesButton = document.getElementById("categories-button");
  if (window.getComputedStyle(categoriesList).display == "none") {
    categoriesList.style.display = "block";
    categoriesList.className = "box box-content categories-list";
    categoriesButton.innerHTML =
      "<b>Categories</b> <img src='images/graphics/gruvbox/up.webp'>";
  } else {
    categoriesList.style.display = "none";
    categoriesList.className = "hidden";
    categoriesButton.innerHTML =
      "<b>Categories</b> <img src='images/graphics/gruvbox/down.webp'>";
  }
}

categoriesButton.addEventListener("click", toggleCategories);
