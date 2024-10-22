<!DOCTYPE html>
<html>
  <?php
  require "dynamic/variables.php";
  require "dynamic/functions.php";
  require "dynamic/header.php";
  ?>
  <body>
    <div class='container'>
      <?php require "static/title.html"; ?>
      <main class="content">
        <?php
        if (array_key_exists('nav', $_GET)) {
          if ($_GET['nav'] == 'About Me') {
            require "static/about-me.html";
          } elseif ($_GET['nav'] == 'Bookmarks') {
            require "dynamic/bookmarks.php";
          } elseif ($_GET['nav'] == 'Technology') {
            require "dynamic/technology.php";
          } elseif ($_GET['nav'] == 'Blog') {
            require "dynamic/blog.php";
          } elseif ($_GET['nav'] == 'Services') {
            require "dynamic/services.php";
          } else {
            echo "<h2>Page not found.</h2>";
          }
        } else {
          require "dynamic/home.php";
        }
        printRandomImage();
        ?>
      </main>
      <?php
      require "dynamic/sidebar-left.php";
      require "dynamic/sidebar-right.php";
      require "dynamic/footer.php"; 
      ?>
    </div>
  </body>
</html>
