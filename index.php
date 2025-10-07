<!DOCTYPE html>
<html lang="en">
  <?php
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
            ?>
          <br>
        </div>
      </main>
      <nav class="sidebar-left">
        <img class="sidebar-img" src="images/graphics/gruvbox/face.webp">
        <h2>Navigation</h2>
        <?php printUrlList($navbarLinks, false); ?>
        <br>
        <h2>Find Me</h2>
        <?php printUrlList($socialLinks, true); ?>
      </nav>
      <aside class="sidebar-right">
        <img class="sidebar-img" src="images/graphics/gruvbox/sketches2.webp">
      </aside>
      <footer class="footer">
        <p>yazoink 2022-2025 | <a href='mailto:<?php echo "$email"; ?>'><?php echo "$email"; ?></a></p>
      </footer>
    </div>
  </body>
</html>
