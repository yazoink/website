const delay = ms => new Promise(res => setTimeout(res, ms));
const copyURL = async () => {
  var url = window.location.href;
  console.log(url);
  navigator.clipboard.writeText(url);
  document.getElementById("copy-url").innerHTML = "<b>&#x2398; Copied!</b>"; 
  await delay(1000);
  document.getElementById("copy-url").innerHTML = "<b>&#x2398; Copy URL</b>"; 
}

document.getElementById("copy-url").addEventListener("click", copyURL);
