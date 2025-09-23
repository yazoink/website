<?php
require "imports/variables.php";
require "imports/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <?php require "imports/header.php"; ?>
  <body>
    <h1>404 Page not found...</h1>
    <h2>Go back <a href='<?php echo $_SERVER["SERVER_NAME"]; ?>'>home</a>.</h2>

    <?php
      printRandomImage();
      echo "<br>";
    ?>

    <div class="footer">
    <p>yazoink 2022-2024 &#128924; <a href='mailto:<?php echo $email; ?>'><?php echo $email; ?></a></p>
    </div>
  </body>
</html>


