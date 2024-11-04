<h1>Art Gallery...</h1>
<p>Please don't repost anything from here for commercial purposes or without proper credit.</p>
<br>
<p>Click on images for full view.</p>
<hr>
<?php
$fullImageDir = 'images/art';
$thumbnailDir = 'images/art-thumbnails';
/* $images = scandir($fullImageDir);
array_splice($images, 0, 2); # remove . and ..
rsort($images); */

$imageNum = count($galleryImages);
$maxImagesPerPage = 9;
$maxPages = ceil($imageNum / $maxImagesPerPage);

if (array_key_exists('page', $_GET)) {
  $currentPage = (int) $_GET['page'];
  if (($currentPage < 1) || (!is_numeric($currentPage))) {
    $currentPage = 1;
  }
} else {
  $currentPage = 1;
}

$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;

$startIndex = $maxImagesPerPage * ($currentPage - 1);
if ($startIndex >= $imageNum) {
  if ($imageNum % $maxImagesPerPage == 0) {
    $startIndex = $maxImagesPerPage * ($imageNum / $maxImagesPerPage) - ($maxImagesPerPage * 2);
  } else {
    $startIndex = $maxImagesPerPage * ($imageNum / $maxImagesPerPage) - ($imageNum % $maxImagesPerPage);
  }
}


if ($imageNum - $startIndex < $maxImagesPerPage) {
  $endIndex = $startIndex + ($imageNum - $startIndex);
} else {
  $endIndex = $startIndex + $maxImagesPerPage;
}

#echo "<p>current page: {$currentPage}</p>";
#echo "<p>start index: {$startIndex}</p>";
#echo "<p>end index: {$endIndex}</p>";
#echo "<p>image num: {$imageNum}</p>";
#echo "<p>max pages: {$maxPages}</p>";

echo "<div class='gallery-div'>";
for ($i = $startIndex; $i < $endIndex; $i++) {
  echo "<a href='" . $fullImageDir . "/" . $galleryImages[$i] . "' target='_blank'><img class='gallery-img' src='" . $thumbnailDir . "/" . $galleryImages[$i] . "' loading='lazy'></a>   ";
}

echo "<br>";
echo "<hr>";
echo "<p>";
if ($currentPage > 1) {
  echo "<a href='index.php?nav=Gallery&page={$previousPage}'>&#8810; Previous</a> ";
}

for ($i = 1; $i <= $maxPages; $i++) {
  if ($i == $currentPage){
    echo "{$i} ";
  } else {
    echo "<a href='index.php?nav=Gallery&page={$i}'>{$i}</a> ";
  }
}

if ($currentPage < $maxPages) {
  echo "<a href='index.php?nav=Gallery&page={$nextPage}'>Next &#8811;</a> ";
}
echo "</p>";
echo "</div>";
?>
<br>
