function openInNewTab(url) {
  window.open(url, '_blank');
}

function setupRandomButton(buttonId, urls) {
  window['openInNewTab_' + buttonId] = function() {
    var randomUrl = urls[Math.floor(Math.random() * urls.length)];
    openInNewTab(randomUrl);
  };

  // Attach the click event to the button
  document.getElementById(buttonId).addEventListener('click', function() {
    window['openInNewTab_' + buttonId]();
  });
}
