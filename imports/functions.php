<?php
function randomFromArrayLink($array, $text)
{
    $song = array_rand($array);
    echo "<a href='{$array[$song]}' target='_blank'><span>$text</span></a>";
}

function printCategories($categories, $showByDefault)
{
    echo "<h1>Blog...</h1>";
    if ($showByDefault == true) {
        echo "<a href='javascript:;' id='categories-button'>
        <b>Categories</b> <img src='images/graphics/gruvbox/up.webp'>
        </a><br>
        <div id='categories-list' class='categories-list' style='display:block;'>
        <a href='/?nav=blog'>All Posts</a> ";
    } else {
        echo "<a href='javascript:;' id='categories-button'>
        <b>Categories</b> <img src='images/graphics/gruvbox/down.webp'>
        </a><br>
        <div id='categories-list' class='hidden'>
        <a href='/?nav=blog'>All Posts</a> ";
    }
    foreach ($categories as $category => $url) {
        echo "<a href='$url'>$category</a> ";
    }
    echo "</div><br>";
}

function printBackCopyRssButtons($backUrl, $printCopyUrl, $printRss)
{
    echo "<p>
  <a href='$backUrl'><img src='images/graphics/gruvbox/back.webp'> <b>Back</b></a>";
    if ($printCopyUrl == true) {
        echo " | <a href='javascript:;' id='copy-url'><img src='images/graphics/gruvbox/copy.webp'> <b>Copy URL</b></a>";
    }
    if ($printRss == true) {
        echo " | <a href='rss.php'><img src='images/graphics/gruvbox/rss2.webp'> <b>RSS</b></a>";
    }
    echo "</p><hr><br>";
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

function printRecentBlogPosts($num, $blogData)
{
    echo "<pre><code><p>### RECENT BLOG POSTS [<a href='/rss.php'>RSS</a>] ###</p><br>";
    echo "<ul>";
    $i = 0;
    foreach ($blogData as $blogEntry) {
        if ($i == $num) {
            break;
        }
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        echo "<li><a href='/?nav=blog&entry=$entry'>" . $blogEntry['title'] . " [" . $blogEntry["date"] . "]</a></li>";
        $i++;
    }
    echo "</ul>";
    echo "<br><p>Click <a href='/?nav=blog'>here</a> for more...</p>";
    echo "</code></pre>";
}

function getCategories($json)
{
    $categories = array();
    foreach ($json as $blogEntry) {
        foreach ($blogEntry['categories'] as $category) {
            if (!in_array($category, $categories)) {
                $categories[$category] = "/?nav=blog&cat=$category";
            }
        }
    }
    ksort($categories);
    return $categories;
}

function printRandomImage()
{
    $imageDir = "images/random-images/gruvbox";
    $images = scandir($imageDir);
    $images = array_slice($images, 2);
    echo "<p><img loading='lazy' class='center' src='" . $imageDir . "/" . $images[array_rand($images)] . "'></p>";
}

function printUrlList($urlList, $openInNewTab)
{
    echo "<ul>";
    foreach($urlList as $title => $url) {
        if ($openInNewTab == true) {
            echo "<li><a href='$url' target='_blank'>$title</a></li>";
        } else {
            echo "<li><a href='$url'>$title</a></li>";
        }
    }
    echo "</ul>";
}

function printStatusUpdates($statusUpdates)
{
    echo "<div class='status-updates'><code><p>### STATUS UPDATES [<a href='/rss.php?status=true'>RSS</a>] ###</p>";
    foreach ($statusUpdates as $update) {
        echo "<br><p>$update[status]</p><br><p>~ $update[date]</p></li>";
    }
    echo "</code></div>";
}

function printChangelog($changelog)
{
    echo "<div class='changelog'><code><p>### SITE CHANGELOG [<a href='/rss.php?changelog=true'>RSS</a>] ###</p>";
    foreach ($changelog as $date => $changes) {
        echo "<br><p>$date</p><ul>";
        foreach ($changes as $change) {
            echo "<li>$change</li>";
        }
        echo "</ul>";
    }
    echo "</code></div>";
}

function printServices($services)
{
    echo "<pre><code>";
    echo "<p>### SERVICES ###</p><br>";
    echo "<ul>";
    foreach ($services as $description => $url) {
        echo "<li><a href='$url' target='_blank'>$description</a></li>";
    }
    echo "</ul><br>";
    echo "<p>(don't rely on them being too stable lol)</p>";
    echo "</code></pre>";
}
?>
