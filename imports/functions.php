<?php
function randomFromArrayLink($array, $text)
{
    $song = array_rand($array);
    echo "<a href='{$array[$song]}' target='_blank'><span>$text</span></a>";
}

function printRecentBlogPosts($num, $json)
{
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>Recent blog posts</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    $i = 0;
    foreach ($json as $blogEntry) {
        if ($i == $num) {
            break;
        }
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        echo "<tr><td><a href='?nav=Blog&entry=" . $entry . "'>" . $blogEntry['title'] . "</a></td><td class='right'>" . $blogEntry['date'] . "</td></tr>";
        $i++;
    }
    echo "</tbody>";
    echo "</table>";
}

function getCategories($json)
{
    $categories = array();
    foreach ($json as $blogEntry) {
        foreach ($blogEntry['categories'] as $category) {
            if (!in_array($category, $categories)) {
                $categories[$category] = "?nav=Blog&cat=$category";
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

function siteIsUp($url)
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
}

function printServices($services)
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
}
?>
