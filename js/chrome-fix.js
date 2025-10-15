function replaceCss(item) {
  console.log(item);
  item.style.backgroundPosition = "0 9px";
}

if (!!window.chrome == true) {
  console.log("chrome detected");
  document.querySelectorAll("li#question-text").forEach(replaceCss);
}
