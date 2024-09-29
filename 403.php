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
      @import url("style/colors.css");
      @import url("style/fonts.css");

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
  <body>
    <h1>403 lolnicetry</h1>
    <h2>Go back <a href='index.php'>home</a>.</h2>

  <?php
  printRandomImage();
  echo "<br />";
  ?>

  <div class="footer">
    <p>yazoink 2022-2024 &#128924; <a href='mailto:yoinky@cock.li'>yoinky@cock.li</a></p>
  </div>
</body>
</html>


