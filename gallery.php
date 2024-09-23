<?php
require "dynamic/variables.php";
require "static/header.html";
?>
<div class='gallery-container' />
<a href="index.php"><img align="right" src="images/logo.webp" /></a>
<p><a href="index.php">&#11184; <b>Back</b></a></p>
<p>Click on images for full view</p>
<br />

<div class="gallery">
<?php
$fullImageDir = 'images/art';
$thumbnailDir = 'images/art-thumbnails';
$fullImages = scandir($fullImageDir);
$thumbnails = scandir($thumbnailDir);
$imageNum = count($thumbnails);

for ($i = 2; $i < $imageNum; $i++) {
  echo "<a href='images/art/" . $fullImages[$i] . "' target='_blank'><img class='gallery-img' src='images/art-thumbnails/" . $thumbnails[$i] . "' /></a>   ";
}
?>
<br />
<br />
</div>

<?php
require "dynamic/footer.php";
?>
