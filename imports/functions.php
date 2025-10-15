<?php

function randomFromArrayLink($array, $text)
{
    $song = array_rand($array);
    echo "<a href='{$array[$song]}' target='_blank'><span>$text</span></a>";
}

function printCategories($categories, $showByDefault)
{
    if ($showByDefault == true) {
        echo "<div id='categories-list' class='box box-content categories-list' style='display:block;'>
        <a href='/?nav=blog'>All Posts</a> ";
    } else {
        echo "<div id='categories-list' class='hidden'>
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
    echo "<div class='box recent-blog-posts-box' id='recent-blog-posts'>
      <div class='left-right-container box-heading'>
          <div class='left-right-container-left'>
              <p>RECENT BLOG POSTS [<a href='/rss.php'>RSS</a>]</p>
          </div>
          <div class='left-right-container-right'><p>X</p></div>
      </div>
      <div class='box-content recent-blog-posts'>";
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
    echo "</div></div>";
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

function printStatusUpdates($statusUpdates)
{
    echo "<div class='box status-updates-box' id='status-updates'>
        <div class='left-right-container box-heading'>
            <div class='left-right-container-left'>
                <p>STATUS UPDATES [<a href='/rss.php?status=true'>RSS</a>]</p>
            </div>
            <div class='left-right-container-right'><p>X</p></div>
        </div>
        <div class='box-content status-updates'>";
    $updateNum = count($statusUpdates);
    $i = 0;
    foreach ($statusUpdates as $update) {
        $i++;
        if ($i > 1) {
            echo "<br>";
        }
        echo "<p>$update[date]</p>
        <div class='box-content-indent'><p>$update[status]</p></div>";
        //if ($i < $updateNum) {
        //    echo "<hr>";
        //}
    }
    echo "</div></div>";
}

function printChangelog($changelog)
{
    echo "<div class='box changelog-box' id='changelog'>
        <div class='left-right-container box-heading'>
            <div class='left-right-container-left'>
                <p>SITE CHANGELOG [<a href='/rss.php?changelog=true'>RSS</a>]</p>
            </div>
            <div class='left-right-container-right'><p>X</p></div>
        </div>
        <div class='box-content changelog'>";
    $dateNum = count($changelog);
    $i = 0;
    foreach ($changelog as $date => $changes) {
        echo "<p>$date</p><br><ul>";
        foreach ($changes as $change) {
            echo "<li>$change</li>";
        }
        echo "</ul><br>";
        $i++;
        if ($i < $dateNum) {
            echo "<hr><br>";
        }
    }
    echo "</div></div>";
}

function printServices($services)
{
    echo "<div class='box'>
        <div class='left-right-container box-heading'>
            <div class='left-right-container-left'>
                <p>SERVICES</p>
            </div>
            <div class='left-right-container-right'><p>X</p></div>
        </div>
        <div class='box-content services'>
        <ul>";
    foreach ($services as $description => $url) {
        echo "<li><a href='$url' target='_blank'>$description</a></li>";
    }
    echo "</ul><br>";
    echo "<p>(don't rely on them being too stable lol)</p>";
    echo "</div></div>";
}
