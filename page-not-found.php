<?php
require "dynamic/variables.php";
require "dynamic/functions.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/404.css" />
    <title>&#128924; yazoink &#128924;</title>
  </head>

<h1>404 Page not found!</h1>
<h2>Go back <a href='index.php'>home</a>.</h2>

<?php
printRandomImage();
echo "<br />";
require "dynamic/footer.php";
?>
