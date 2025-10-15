function replaceLiCss(item) {
  console.log(item);
  item.style.backgroundPosition = "0 11px";
}

function replaceDivCss(item) {
  console.log(item);
  item.style.backgroundPosition = "bottom 13px left var(--padding-nav-ul)";
}

if (!!window.chrome == true) {
  console.log("chrome detected");
  document.querySelectorAll("li.nav-list-li").forEach(replaceLiCss);
  document.querySelectorAll("div.nav-list-1").forEach(replaceDivCss);
  document.querySelectorAll("div.nav-list-2").forEach(replaceDivCss);
}
