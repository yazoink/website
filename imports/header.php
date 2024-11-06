<head>
  <meta charset='UTF-8'>
  <?php
    $page = basename($_SERVER['PHP_SELF']);
    
    if ($page == "index.php") {
      echo "<link rel='preload' href='style/layout.css' as='style'>";
      echo "<link rel='stylesheet' href='style/layout.css'>";
      echo "<link rel='preload' href='style/style.css' as='style'>";
      echo "<link rel='stylesheet' href='style/style.css'>";
    } else if ($page == "403.php" || $page == "404.php" || $page == "500.php") {
      echo "<link rel='preload' href='style/error.css' as='image'>";
      echo "<link rel='stylesheet' href='style/error.css'>";
    } else if ($page == "fetch.php") {
      echo "<link rel='preload' href='style/fetch.css' as='image'>";
      echo "<link rel='stylesheet' href='style/fetch.css'>";
    }
  ?>
  <link rel="preload" href="style/variables.css" as="style">
  <link rel="preload" href="style/fonts.css" as="style">
  <link rel="preload" href="fonts/redaction/webfonts/Redaction_35-Regular.woff2" as="font" type="font/woff2">
  <link rel="preload" href="fonts/redaction/webfonts/Redaction_35-Bold.woff2" as="font" type="font/woff2">
  <link rel="preload" href="fonts/redaction/webfonts/Redaction_35-Italic.woff2" as="font" type="font/woff2">
  <link rel="preload" href="fonts/terminus/ttf/TerminusTTF-4.49.3.ttf" as="font" type="font/ttf">
  <link rel="preload" href="fonts/terminus/ttf/TerminusTTF-Bold-4.49.3.ttf" as="font" type="font/ttf">
  <link rel="preload" href="fonts/terminus/ttf/TerminusTTF-Italic-4.49.3.ttf" as="font" type="font/ttf">
  <link rel="preload" href="fonts/terminus/ttf/TerminusTTF-Bold-Italic-4.49.3.ttf" as="font" type="font/ttf">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="8-DfXBAoPKJYiUCQ3bt_r-fW2nfWHW89GkQTomLycuY">
  <meta name="keywords" content="blog, art, technology, linux, programming, hobbies, personal">
  <meta name="author" content="yazoink">
  <title>&#128924; yazoink &#128924;</title>
</head>
