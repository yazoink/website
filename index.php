<!DOCTYPE html>
<html lang="en">
  <?php
  require "imports/variables.php";
  require "imports/functions.php";
  require "imports/header.php";
  ?>
  <body>
    <div class="container">
      <?php require "imports/title.html"; ?>
      <main class="content">
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
          } else {
            echo "<h2>Page not found.</h2>";
          }
        } else {
          require "imports/home.php";
        }
        printRandomImage();
        ?>
      </main>
      <?php
      require "imports/sidebar-left.php";
        //require "dynamic/sidebar-right.php";
      echo "<img class=\"sidebar-img\" src=\"images/sketches2.webp\">";
      require "imports/footer.php"; 
      ?>
    </div>
  </body>
</html>
