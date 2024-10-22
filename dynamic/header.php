<head>
  <meta charset='utf-8' />
  <link rel="stylesheet" href="style/style.css" />
  <?php
    if (basename($_SERVER['PHP_SELF']) == "index.php") {
      echo "<link rel='stylesheet' href='style/layout.css' />";
    } else if (basename($_SERVER['PHP_SELF']) == "gallery.php") {
      echo "<link rel='stylesheet' href='style/gallery-layout.css' />";
    }
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-site-verification" content="8-DfXBAoPKJYiUCQ3bt_r-fW2nfWHW89GkQTomLycuY" />
  <title>&#128924; yazoink &#128924;</title>
  <script src="js/random-button.js" defer></script>
</head>
