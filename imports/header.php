<head>
  <meta charset='UTF-8'>
  <?php
    $page = basename($_SERVER['PHP_SELF']);
    if (!isset($_GET['nav'])) {
      echo "<script defer src='js/songs.js'></script>";
    }
    if ($page == "index.php") {
      echo "<link rel='stylesheet' href='style/layout.css'>";
      echo "<link rel='stylesheet' href='style/style.css'>";
    } else if ($page == "403.php" || $page == "404.php" || $page == "500.php") {
      echo "<link rel='stylesheet' href='style/error.css'>";
    } else if ($page == "fetch.php") {
      echo "<link rel='stylesheet' href='style/fetch.css'>";
    }
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="8-DfXBAoPKJYiUCQ3bt_r-fW2nfWHW89GkQTomLycuY">
  <meta name="keywords" content="blog, art, technology, linux, programming, hobbies, personal">
  <meta name="author" content="yazoink">
  <title>&#128924; yazoink &#128924;</title>
</head>
