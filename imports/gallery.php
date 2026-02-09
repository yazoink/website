<?php

$fullImageDir = 'gallery/art/full';
$thumbnailDir = 'gallery/art/thumbnails';
$jsonStr = file_get_contents('gallery/gallery.json');
$galleryData = json_decode($jsonStr, true);
$imageNum = count($galleryData);
$maxImagesPerPage = 9;

if (array_key_exists("artwork", $_GET)) { // if artwork specified
    // $fileName = str_replace(" ", "-", $_GET["artwork"]);
    $artworkNum = -1;
    $artwork = $_GET["artwork"];
    for ($i = 0; $i < $imageNum; $i++) {
        $target = preg_replace("/.webp$/i", "", $galleryData[$i]["file"]);
        if ($target == $artwork) {
            $artworkNum = $i;
        }
    }
    if ($artworkNum == -1) { // artwork doesn't exist
        printBackCopyRssButtons("/?nav=gallery", false, false);
        echo "<hr><br>";
        xNotFound("Artwork");
    } else { // if artwork exists
        $page = ceil(($artworkNum + 1) / $maxImagesPerPage);
        printBackCopyRssButtons("/?nav=gallery&page=$page", true, false);
        echo "<hr><br>";
        $title = $galleryData[$artworkNum]["title"];
        $year = $galleryData[$artworkNum]["year"];
        $medium = $galleryData[$artworkNum]["medium"];
        $file = $galleryData[$artworkNum]["file"];
        echo "<h2>$title</h2>
          <p><i>$year</i>, $medium</p><br>
          <p><img src='$fullImageDir/$file' class='full-artwork'></p>
          <a href='$fullImageDir/$file' target='_blank'><b>Open in new tab</b></a> |
          <a href='download.php?url=$fullImageDir/$file'><b>Download</b></a><br><br>";
        $descriptionFile = "gallery/descriptions/" . str_replace(".webp", ".html", $galleryData[$artworkNum]["file"]);
        if (file_exists("$descriptionFile")) {
            include $descriptionFile;
        } else {
            echo "<p><i>No description.</i></p>";
        }
        echo "<script src='js/copy-url.js' defer></script>";
    }
} else { // if artwork not specified
    echo "<h1>Art Gallery...</h1><br>
      <p>Please don't repost anything from here for commercial purposes or without proper credit.</p><br>
      <p>Click images for full view and more info.</p><br><hr>";
    /* $images = scandir($fullImageDir);
    array_splice($images, 0, 2); # remove . and ..
    rsort($images); */

    $maxPages = ceil($imageNum / $maxImagesPerPage);

    if (array_key_exists('page', $_GET)) {
        $currentPage = (int) $_GET['page'];
        if (($currentPage < 1) || (!is_numeric($currentPage)) || ($currentPage > $maxPages)) {
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

    // echo "<p>current page: {$currentPage}</p>";
    // echo "<p>start index: {$startIndex}</p>";
    // echo "<p>end index: {$endIndex}</p>";
    // echo "<p>image num: {$imageNum}</p>";
    // echo "<p>max pages: {$maxPages}</p>";

    echo "<div class='gallery-div'>";
    for ($i = $startIndex; $i < $endIndex; $i++) {
        $file = $galleryData[$i]["file"];
        $title = $galleryData[$i]["title"];
        $medium = $galleryData[$i]["medium"];
        $year = $galleryData[$i]["year"];
        $artworkGetVar = preg_replace("/.webp$/i", "", $file);
        echo "<a href='/?nav=gallery&artwork=$artworkGetVar'>
          <img 
            class='square-img' src='$thumbnailDir/$file' 
            style='cursor:pointer'
            title=\"$title ($medium, $year)\"
            loading='lazy'></a>   ";
    }

    echo "<br><hr><p><b>";
    if ($currentPage > 1) {
        echo "<a href='/?nav=gallery&page={$previousPage}' style='text-decoration:none'></b>&#8810;<b></a>&ensp;";
    }

    for ($i = 1; $i <= $maxPages; $i++) {
        if ($i == $currentPage) {
            echo "{$i}&ensp;";
        } else {
            echo "<a href='/?nav=gallery&page={$i}'>{$i}</a>&ensp;";
        }
    }

    if ($currentPage < $maxPages) {
        echo "<a href='/?nav=gallery&page={$nextPage}' style='text-decoration:none'></b>&#8811;<b></a> ";
    }
    echo "</p></b></div>";
}
