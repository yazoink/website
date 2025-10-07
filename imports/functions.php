<?php
function randomFromArrayLink($array, $text)
{
    $song = array_rand($array);
    echo "<a href='{$array[$song]}' target='_blank'><span>$text</span></a>";
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
    echo "<pre><code><p>### RECENT BLOG POSTS ###</p><br>";
    echo "<ul>";
    $i = 0;
    foreach ($blogData as $blogEntry) {
        if ($i == $num) {
            break;
        }
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        echo "<li><a href='/?nav=blog&entry=$entry'>" . $blogEntry['title'] . " (" . $blogEntry["date"] . ")</a></li>";
        $i++;
    }
    echo "</ul>";
    echo "<br><p>Click <a href='/?nav=blog'>here</a> for more...</p>";
    echo "</code></pre>";
}

/* function printRecentBlogPosts($num, $json, $baseUrl) */
/* { */
/*     echo "<table>"; */
/*     echo "<thead>"; */
/*     echo "<tr><th>Recent blog posts</th></tr>"; */
/*     echo "</thead>"; */
/*     echo "<tbody>"; */
/*     $i = 0; */
/*     foreach ($json as $blogEntry) { */
/*         if ($i == $num) { */
/*             break; */
/*         } */
/*         $entry = str_replace(" ", "-", strtolower($blogEntry['title'])); */
/*         echo "<tr><td><a href='$baseUrl?nav=Blog&entry=" . $entry . "'>" . $blogEntry['title'] . "</a></td><td class='right'>" . $blogEntry['date'] . "</td></tr>"; */
/*         $i++; */
/*     } */
/*     echo "</tbody>"; */
/*     echo "</table>"; */
/* } */

/* function cipher($ch, $key)
{
    if (!ctype_alpha($ch)) {
        return $ch;
    }
    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function encryptString($plainText, $key)
{
    $encryptedString = "";
    $inputArr = str_split($plainText);
    foreach ($inputArr as $ch) {
        $encryptedString .= cipher($ch, $key);
    }
    return $encryptedString;
}

function decryptString($encryptedString, $key)
{
    return encryptString($encryptedString, 26 - $key);
} */

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

/* function siteIsUp($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_exec($ch);
    $ret = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($ret == 200 || $ret == 302) {
        return true;
    } else {
        return false;
    }
} */

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

/* function printServices($services)
{
    echo "<table>";
    echo "<thead>";
    echo "<th>Service</th>";
    echo "<th class='right'>Status</th>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($services as $description => $url) {
        echo "<tr>";
        echo "<td><a href='$url' target='_blank'>$description</a></td>";
        if (siteIsUp($url)) {
            $statusIndicator = "&#10003;";
        } else {
            $statusIndicator = "&#10007;";
        }
        echo "<td class='right'>$statusIndicator</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} */
?>
