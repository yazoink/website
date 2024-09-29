<?php
require "dynamic/variables.php";
require "dynamic/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>&#128924; yazoink &#128924;</title>
    <style>
      <?php
      require "style/colors.css";
      require "style/fonts.css";
      ?>

      html {
          background-color: var(--bg);
          text-align: center;
      }

      body {
          font-family: redaction;
          font-size: 1em;
          color: var(--fg);
          word-wrap: break-word;
          margin: auto;
          min-width: 510px;
          max-width: 510px;
          max-height: 510px;
          min-height: 510px;
      }

      a {
        color: var(--fg);
      }

      h1, h2, h3, h4, ul, p {
          margin-top: 0;
          padding-top: 0;
          margin-bottom: 0;
          padding-bottom: 0;
      }
    </style>
  </head>

<h1>404 Page not found!</h1>
<h2>Go back <a href='index.php'>home</a>.</h2>

<?php
printRandomImage();
echo "<br />";
require "dynamic/footer.php";
?>
