<?php
$fullImageDir = 'gallery/art/full';
$thumbnailDir = 'gallery/art/thumbnails';
$jsonStr = file_get_contents('gallery/gallery.json');
$galleryData = json_decode($jsonStr, true);
$imageNum = count($galleryData);
$maxImagesPerPage = 9;

if (array_key_exists("artwork", $_GET)) { // if artwork specified
    // $fileName = str_replace(" ", "-", $_GET["artwork"]);
    if (!is_numeric($_GET["artwork"])) {
        echo "<p>Artwork not found :(</p><br>";
    } else {
        $artwork = (int) $_GET["artwork"];
        if ($artwork >= $imageNum) {
            echo "<p>Artwork not found :(</p><br>";
        } else { // if artwork exists
            $page = ceil(($artwork + 1) / $maxImagesPerPage);
            echo "<p><a href='$baseUrl?nav=gallery&page=$page'>&#11184; <b>Back</b></a> | <a href='javascript:;' id='copy-url'>&#x2398; <b>Copy URL</b></a></p><hr><br>";
            echo "<h2>" . $galleryData[$artwork]["title"] . "</h2>";
            echo "<p><i>" . $galleryData[$artwork]["year"] . ", " . $galleryData[$artwork]["medium"] . "</i></p>";
            echo "<br><p><img src='$fullImageDir/" . $galleryData[$artwork]["file"] . "' class='full-artwork'><br>";
            echo "<a href='$fullImageDir/" . $galleryData[$artwork]["file"] . "' target='_blank'><b>Open in new tab</b></a> | <a href='download.php?url=$fullImageDir/" . $galleryData[$artwork]["file"] . "'><b>Download</b></a></p>";
            echo "<br>";
            $descriptionFile = "gallery/descriptions/" . str_replace(".webp", ".html", $galleryData[$artwork]["file"]);
            if (file_exists("$descriptionFile")) {
                include $descriptionFile;
            } else {
                echo "<p><i>No description.</i></p>";
            }
            echo "<script src='js/copy-url.js' defer></script>";
        }
    }
} else { // if artwork not specified
    echo "<h1>Art Gallery...</h1>";
    echo "<p>Please don't repost anything from here for commercial purposes or without proper credit.</p>";
    echo "<br><p>Click images for full view and more info.</p><hr>";
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
        echo "<a href='$baseUrl?nav=gallery&artwork=" . $i . "'><img class='square-img' src='" . $thumbnailDir . "/" . $galleryData[$i]["file"] . "' style='cursor:pointer' title=\"". $galleryData[$i]["title"] . " (" . $galleryData[$i]["medium"] . ", " . $galleryData[$i]["year"] . ")\" loading='lazy'></a>   ";
    }

    echo "<br>";
    echo "<hr>";
    echo "<p>";
    if ($currentPage > 1) {
        echo "<a href='$baseUrl?nav=gallery&page={$previousPage}'>&#8810; Previous</a> ";
    }

    for ($i = 1; $i <= $maxPages; $i++) {
        if ($i == $currentPage) {
            echo "{$i} ";
        } else {
            echo "<a href='$baseUrl?nav=gallery&page={$i}'>{$i}</a> ";
        }
    }

    if ($currentPage < $maxPages) {
        echo "<a href='$baseUrl?nav=gallery&page={$nextPage}'>Next &#8811;</a> ";
    }
    echo "</p>";
    echo "</div>";
}
?>
<br>
