<!DOCTYPE html>
<html lang="en">
  <?php
  date_default_timezone_set("Australia/Melbourne");
  require "imports/variables.php";
  require "imports/functions.php";
  require "imports/header.php";
    ?>
  <body>
    <div class="container">
      <header class='title'>
      <a href='/'><img src='images/graphics/gruvbox/logo.webp' /></a>
      </header>
      <main class="content">
        <div class="content-inside">
          <?php
            if (array_key_exists('nav', $_GET)) {
                $nav = str_replace(" ", "-", strtolower($_GET["nav"]));
                if ($nav == 'about-me') {
                    include "imports/about-me.php";
                } elseif ($nav == 'bookmarks') {
                    include "imports/bookmarks.php";
                } elseif ($nav == 'technology') {
                    include "imports/technology.php";
                } elseif ($nav == 'blog') {
                    include "imports/blog.php";
                } elseif ($nav == 'services') {
                    include "imports/services.php";
                } elseif ($nav == 'gallery') {
                    include "imports/gallery.php";
                } else {
                    xNotFound("Page");
                }
            } else {
                include "imports/home.php";
            }
            // printRandomImage();
            echo "<br>";
            ?>
          <p class='center'>
            <img src="images/graphics/gruvbox/diamond.webp"><img src="images/graphics/gruvbox/diamond.webp"><img src="images/graphics/gruvbox/diamond.webp"></p>
          <br>
        </div>
      </main>
      <nav class="sidebar-left">
        <img class="sidebar-img" src="images/graphics/gruvbox/face.webp">
        <h4>Index</h4>
        <div class="nav-list-1">
          <?php printUrlList($navbarLinks, false, "nav-list-li"); ?>
        </div>
        <br>
        <h4>Links</h4>
        <div class="nav-list-2">
          <?php printUrlList($socialLinks, true, "nav-list-li"); ?>
        </div>
      </nav>
      <aside class="sidebar-right">
        <img class="sidebar-img" src="images/graphics/gruvbox/sketches2.webp">
      </aside>
      <footer class="footer">
        <p>Created by <a href='mailto:<?php echo "$email"; ?>'><?php echo $email; ?></a></p>
      </footer>
    </div>
    <script defer src='js/chrome-fix.js'></script>
  </body>
</html>
