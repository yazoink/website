document.addEventListener('DOMContentLoaded', function() {
  var buttons = document.querySelectorAll('button[data-urls]');

  buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      var urls = JSON.parse(button.getAttribute('data-urls'));
      var randomUrl = urls[Math.floor(Math.random() * urls.length)];
      window.open(randomUrl, '_blank');
    });
  });
});
