<?php
require "dynamic/variables.php";

$navbarLinks = array(
  "Home" => "index.php",
  "About Me" => "index.php?nav=About+Me",
  "Bookmarks" => "index.php?nav=Bookmarks",
  "Technology" => "index.php?nav=Technology",
  "Blog" => "index.php?nav=Blog",
  "Art Gallery" => "gallery.php"
);

$socialLinks = array(
  "Twitter" => "https://twitter.com/yazoink",
  "Github" => "https://github.com/yazoink",
  "Scratch" => "https://scratch.mit.edu/users/yazoink",
  "Odysee" => "https://odysee.com/@yazoink:c"
);

$randomSongs = array(
  "The Main Thing - Roxy Music" => "$invidiousUrl/watch?v=Ir1v6alVA7c",
  "betelgeus - gjallarhornit" => "$invidiousUrl/watch?v=ffTm2Q6LFsE",
  "Same Old Scene - Roxy Music" => "$invidiousUrl/watch?v=vXOgQN1a7bE",
  "Clap Hands - Tom Waits" => "$invidiousUrl/watch?v=krjxyEme5vM",
  "Hate Street Dialogue - Rodriguez" => "$invidiousUrl/watch?v=vyCnOhW_-2c"
);

require "dynamic/functions.php";
require "static/header.html";

function printRandomImage() {
  $imageDir = "images/random-images";
  $images = scandir($imageDir);
  $images = array_slice($images, 2);
  echo "<p><img src='" . $imageDir . "/" . $images[array_rand($images)] . "' /></p>";
}

function printRandomSong($songList) {
  $song = array_rand($songList);
  $url = $songList[$song];
  echo "<p>&#129170; <a href='$url' target='_blank'>$song</a></p>";
}
?>

<body>
  <div class='container'>

    <?php require "static/title.html"; ?>

    <div class="content">
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
	} else {
	  echo "<h2>Page not found.</h2>";
	}
      } else {
	require "static/home.html";
      }
      printRandomImage();
      ?>
    </div>

    <?php
    require "dynamic/sidebar-left.php";
    require "dynamic/sidebar-right.php";
    ?>

<?php require "dynamic/footer.php"; ?>
