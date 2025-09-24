<?php
$fullImageDir = 'gallery/art/full';
$thumbnailDir = 'gallery/art/thumbnails';
$jsonStr = file_get_contents('gallery/gallery.json');
$galleryData = json_decode($jsonStr, true);
$imageNum = count($galleryData);

if (array_key_exists("Artwork", $_GET)) { // if artwork specified
    // $fileName = str_replace(" ", "-", $_GET["artwork"]);
    if (!is_numeric($_GET["Artwork"])) {
        echo "<p>Artwork not found :(</p><br>";
    } else {
        if ($_GET["Artwork"] >= $imageNum) {
            echo "<p>Artwork not found :(</p><br>";
        } else { // if artwork exists
            if (array_key_exists("page", $_GET)) {
                $page = $_GET["page"];
            } else {
                $page = 1;
            }
            echo "<p><a href='$baseUrl?nav=Gallery&page=$page'>&#11184; <b>Back</b></a> | <a href='javascript:;' id='copy-url'>&#x2398; <b>Copy URL</b></a></p><hr><br>";
            echo "<h2>" . $galleryData[$_GET["Artwork"]]["title"] . "</h2>";
            echo "<p><i>" . $galleryData[$_GET["Artwork"]]["year"] . ", " . $galleryData[$_GET["Artwork"]]["medium"] . "</i></p>";
            echo "<br><p><img src='$fullImageDir/" . $galleryData[$_GET["Artwork"]]["file"] . "' class='full-artwork'><br>";
            echo "<a href='$fullImageDir/" . $galleryData[$_GET["Artwork"]]["file"] . "' target='_blank'><b>Open in new tab</b></a> | <a href='download.php?url=$fullImageDir/" . $galleryData[$_GET["Artwork"]]["file"] . "'><b>Download</b></a></p>";
            echo "<br>";
            $descriptionFile = "gallery/descriptions/" . str_replace(".webp", ".html", $galleryData[$_GET["Artwork"]]["file"]);
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

    $maxImagesPerPage = 9;
    $maxPages = ceil($imageNum / $maxImagesPerPage);

    if (array_key_exists('Page', $_GET)) {
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
        echo "<a href='$baseUrl?nav=Gallery&page=$currentPage&Artwork=" . $i . "'><img class='square-img' src='" . $thumbnailDir . "/" . $galleryData[$i]["file"] . "' style='cursor:pointer' title=\"". $galleryData[$i]["title"] . " (" . $galleryData[$i]["medium"] . ", " . $galleryData[$i]["year"] . ")\" loading='lazy'></a>   ";
    }

    echo "<br>";
    echo "<hr>";
    echo "<p>";
    if ($currentPage > 1) {
        echo "<a href='$baseUrl?nav=Gallery&page={$previousPage}'>&#8810; Previous</a> ";
    }

    for ($i = 1; $i <= $maxPages; $i++) {
        if ($i == $currentPage) {
            echo "{$i} ";
        } else {
            echo "<a href='$baseUrl?nav=Gallery&page={$i}'>{$i}</a> ";
        }
    }

    if ($currentPage < $maxPages) {
        echo "<a href='$baseUrl?nav=Gallery&page={$nextPage}'>Next &#8811;</a> ";
    }
    echo "</p>";
    echo "</div>";
}
?>
<br>
