<h1>Art Gallery...</h1>
<p>Click on images for full view.</p>
<br />
<section class='gallery'>
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
</section>
