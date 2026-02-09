<?php
function randomFromArrayLink($array, $text)
{
    $song = array_rand($array);
    echo "<a href='{$array[$song]}' target='_blank'><span>$text</span></a>";
}

function printDoubleList($list)
{
    $itemNum = count($list);
    $column1Len = 0;
    $column2Len = 0;
    if ($itemNum % 2 == 0) {
        $column1Len = $itemNum / 2;
        $column2Len = $column1Len;
    } else {
        $column1Len = ceil($itemNum / 2);
        $column2Len = floor($itemNum / 2);
    }
    echo "<div class='left-right-container'>
    <div class='left-right-container-left'><ul>";
    for ($i = 0; $i < $column1Len; $i++) {
        echo "<li>{$list[$i]}</li>";
    }
    echo "</ul></div>";
    echo "<div class='left-right-container-right'><ul>";
    for ($i = $column1Len; $i < $itemNum; $i++) {
        echo "<li>{$list[$i]}</li>";
    }
    echo "</ul></div></div>";
}

function printBackCopyRssButtons($backUrl, $printCopyUrl, $printRss)
{
    echo "<p class='back-copy-rss-buttons'>
  <a href='$backUrl'><img src='images/graphics/gruvbox/back.webp'> <b>Back</b></a>";
    if ($printCopyUrl == true) {
        echo " | <a href='javascript:;' id='copy-url'><img src='images/graphics/gruvbox/copy.webp'> <b>Copy URL</b></a>";
    }
    if ($printRss == true) {
        echo " | <a href='rss.php'><img src='images/graphics/gruvbox/rss2.webp'> <b>RSS</b></a>";
    }
    echo "</p>";
}

function xNotFound($x)
{
    echo "<img src='images/graphics/gruvbox/face2.webp'>
    <p>$x not found :(</p>";
}

function printImageGallery($imageDir, $imageArray, $isSquare)
{
    $imageClass = "square-img";
    if ($isSquare == false) {
        $imageClass = "portrait-img";
    }
    echo "<div class='gallery-div'><p>";
    foreach ($imageArray as $name => $url) {
        echo "<a href='$url' target='_blank'><img class='$imageClass' src=\"$imageDir/$name.webp\" style='cursor:pointer' title=\"$name\" loading=lazy></a>";
    }
    echo "</p></div>";
}

function printRandomImage()
{
    $imageDir = "images/random-images/gruvbox";
    $images = scandir($imageDir);
    $images = array_slice($images, 2);
    echo "<p><img loading='lazy' class='center' src='" . $imageDir . "/" . $images[array_rand($images)] . "'></p>";
}

function printUrlList($urlList, $openInNewTab, $class = "")
{
    echo "<ul>";
    foreach ($urlList as $title => $url) {
        if ($openInNewTab == true) {
            echo "<li class='$class'><a href='$url' target='_blank'>$title</a></li>";
        } else {
            echo "<li class='$class'><a href='$url'>$title</a></li>";
        }
    }
    echo "</ul>";
}
