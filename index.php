<!DOCTYPE html>
<html lang="en">
  <?php
  $webRoot = $_SERVER["DOCUMENT_ROOT"];
  require "imports/variables.php";
  require "imports/functions.php";
  require "imports/header.php";
    ?>
  <body>
    <div class="container">
      <header class='title'>
      <a href='<?php echo $baseUrl; ?>'><img src='/images/graphics/gruvbox/logo.webp' /></a>
      </header>
      <main class="content">
        <div class="content-inside">
          <?php
            if (str_starts_with($_SERVER["REQUEST_URI"], "/about")) {
                include "imports/about-me.php";
            } elseif (str_starts_with($_SERVER["REQUEST_URI"], "/bookmarks")) {
                include "imports/bookmarks.php";
            } elseif (str_starts_with($_SERVER["REQUEST_URI"], "/technology")) {
                include "imports/technology.php";
            } elseif (str_starts_with($_SERVER["REQUEST_URI"], "/blog")) {
                include "imports/blog.php";
            } elseif (str_starts_with($_SERVER["REQUEST_URI"], "/services")) {
                include "imports/services.php";
            } elseif (str_starts_with($_SERVER["REQUEST_URI"], "/gallery")) {
                include "imports/gallery.php";
            } else {
                if ($_SERVER["REQUEST_URI"] == "/") {
                    include "imports/home.php";
                } else {
                    echo "<h2>Page not found.</h2>";
                }
            }
            $imageDir = "/images/random-images/gruvbox";
            $images = scandir($_SERVER["DOCUMENT_ROOT"] . $imageDir);
            $images = array_slice($images, 2);
            echo "<p><img loading='lazy' class='center' src='$imageDir/" . $images[array_rand($images)] . "'></p>";
            ?>
        </div>
      </main>
      <nav class="sidebar-left">
        <img class="sidebar-img" src="/images/graphics/gruvbox/face.webp">
        <h2>Navigation</h2>
        <?php printUrlList($navbarLinks, false); ?>
        <br>
        <h2>Find Me</h2>
        <?php printUrlList($socialLinks, true); ?>
      </nav>
      <aside class="sidebar-right">
        <img class="sidebar-img" src="/images/graphics/gruvbox/sketches2.webp">
      </aside>
      <footer class="footer">
        <p>yazoink 2022-2025 &#128924; <a href='mailto:<?php echo "$email"; ?>'><?php echo "$email"; ?></a></p>
      </footer>
    </div>
  </body>
</html>
