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
        <a href='index.php'><img src='images/graphics/gruvbox/logo.webp' /></a>
      </header>
      <main class="content">
        <div class="content-inside">
          <?php
            if (array_key_exists('nav', $_GET)) {
              if ($_GET['nav'] == 'About Me') {
                require "imports/about-me.html";
              } elseif ($_GET['nav'] == 'Bookmarks') {
                require "imports/bookmarks.php";
              } elseif ($_GET['nav'] == 'Technology') {
                require "imports/technology.html";
              } elseif ($_GET['nav'] == 'Blog') {
                require "imports/blog.php";
              } elseif ($_GET['nav'] == 'Services') {
                require "imports/services.php";
              } elseif ($_GET['nav'] == 'Gallery') {
                require "imports/gallery.php";
              } else {
                echo "<h2>Page not found.</h2>";
              }
            } else {
              require "imports/home.html";
            }
            printRandomImage();
          ?>
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
        <p>yazoink 2022-2025 &#128924; <a href='mailto:<?php echo "$email"; ?>'><?php echo "$email"; ?></a></p>
      </footer>
    </div>
  </body>
</html>
