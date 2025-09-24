<head>
  <meta charset='UTF-8'>
  <?php
    $page = basename($_SERVER['PHP_SELF']);
    if ($page == "403.php" || $page == "404.php" || $page == "500.php") {
      echo "<link rel='preload' href='style/error.css' as='style'>";
      echo "<link rel='stylesheet' href='style/error.css'>";
    } else {
      echo "<link rel='preload' href='style/layout.css' as='style'>";
      echo "<link rel='stylesheet' href='style/layout.css'>";
      echo "<link rel='preload' href='style/style.css' as='style'>";
      echo "<link rel='stylesheet' href='style/style.css'>";
    }
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="8-DfXBAoPKJYiUCQ3bt_r-fW2nfWHW89GkQTomLycuY">
  <meta name="keywords" content="blog, art, technology, linux, programming, hobbies, personal">
  <meta name="author" content="yazoink">
  <title>&#128924; yazoink &#128924;</title>
</head>
