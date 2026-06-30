<?php
function makeBox($title, $content, $class = "", $id = "") {
  if ($class != "") {
    $class = " {$class}";
  }
  if ($id != "") {
    $id = " id='{$id}'";
  }
  $box = "
  <div class='box{$class}'{$id}>
    <div class='two-column-grid-container box-heading'>
      <div class='two-column-grid-container-left'>
        <p>{$title}</p>
      </div>
      <div class='two-column-grid-container-right x-button'><p>X</p></div>
    </div>
    <div class='box-content'>
      {$content}
    </div>
  </div>
  ";
  return $box;
}


function randomFromArrayLink($array, $text)
{
    $song = array_rand($array);
    echo "<a href='{$array[$song]}' target='_blank'><span>$text</span></a>";
}

function makeDoubleList($list)
{
    $r = "";
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
    $r .= "<div class='two-column-grid-container'>
    <div class='two-column-grid-container-left'><ul>";
    for ($i = 0; $i < $column1Len; $i++) {
        $r .= "<li>{$list[$i]}</li>";
    }
    $r .= "</ul></div>";
    $r .= "<div class='two-column-grid-container-right'><ul>";
    for ($i = $column1Len; $i < $itemNum; $i++) {
        $r .= "<li>{$list[$i]}</li>";
    }
    $r .= "</ul></div></div>";
    return $r;
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
    echo "
    <div class='box-container'>
      <div class='image-gallery image-gallery-padding'>
    ";
    foreach ($imageArray as $name => $url) {
        echo "<a href='$url' target='_blank'><img class='$imageClass' src=\"$imageDir/$name.webp\" style='cursor:pointer' title=\"$name\" loading=lazy></a>";
    }
    echo "</div></div>";
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
