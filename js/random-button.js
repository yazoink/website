document.addEventListener('DOMContentLoaded', function() {
  // Select all buttons with a data-urls attribute
  var buttons = document.querySelectorAll('button[data-urls]');

  buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      // Parse the URLs from the data attribute
      var urls = JSON.parse(button.getAttribute('data-urls'));
      // Select a random URL
      var randomUrl = urls[Math.floor(Math.random() * urls.length)];
      // Open the URL in a new tab
      window.open(randomUrl, '_blank');
    });
  });
});
