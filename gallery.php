<?php
require "dynamic/variables.php";
require "dynamic/header.php";
?>
<div class='gallery-container' />
  <div class='gallery-description'>
    <p><a href="index.php">&#11184; <b>Back</b></a></p>
    <p>Click on images for full view</p>
  </div>
  <header class='gallery-title'>
    <a href="index.php"><img src="images/logo.webp" /></a></p>
  </header>
  <br />

  <div class="gallery">
    <?php
    $fullImageDir = 'images/art';
    $thumbnailDir = 'images/art-thumbnails';
    $images = scandir($fullImageDir);
    array_splice($images, 0, 2); # remove . and ..
    rsort($images);

    $imageNum = count($images);
    $maxImagesPerPage = 14;
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

    for ($i = $startIndex; $i < $endIndex; $i++) {
      echo "<a href='" . $fullImageDir . "/" . $images[$i] . "' target='_blank'><img class='gallery-img' src='" . $thumbnailDir . "/" . $images[$i] . "' /></a>   ";
    }

    echo "<br />";
    echo "<p>";
    if ($currentPage > 1) {
      echo "<a href='gallery.php?page={$previousPage}'>&#8810; Previous</a> ";
    }

    for ($i = 1; $i <= $maxPages; $i++) {
      if ($i == $currentPage){
        echo "{$i} ";
      } else {
        echo "<a href='gallery.php?page={$i}'>{$i}</a> ";
      }
    }

    if ($currentPage < $maxPages) {
      echo "<a href='gallery.php?page={$nextPage}'>Next &#8811;</a> ";
    }
    echo "</p>";
    ?>
  <br />
</div>

<?php
require "dynamic/footer.php";
?>
