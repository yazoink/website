<?php
require 'imports/variables.php';
require 'imports/functions.php';
date_default_timezone_set('Australia/Melbourne');
header("Content-Type: application/rss+xml; charset=UTF-8");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
$url = $protocol . '://' . $_SERVER['HTTP_HOST'];
echo "<?xml version='1.0' encoding='UTF-8'?>
  <rss version='2.0'>";
if (array_key_exists("status", $_GET)) {
    if ($_GET["status"] == true) {
        echo "<channel>
      <title>Status Updates</title>
      <link>$url</link>
      <description>yazo.ink - Status Updates</description>";
        foreach ($statusUpdates as $update) {
            $date = date(DATE_RSS, strtotime($update["date"]));
            echo "<item>
              <title>yazo.ink - Status Update $update[date]</title>
              <link>$url</link>
              <author>$email</author>
              <pubDate>$date</pubDate>
              <description><![CDATA[$update[status]]]></description>
              </item>";
        }
        echo "</channel></rss>";
    }
} else if (array_key_exists("changelog", $_GET)) {
    if ($_GET["changelog"] == true) {
        echo "<channel>
      <title>yazo.ink Site Changelog</title>
      <link>$url</link>
      <description>yazo.ink - Site Changelog</description>";
        foreach ($changelog as $date => $changes) {
            $rssDate = date(DATE_RSS, strtotime($date));
            echo "<item>
              <title>yazo.ink - Site Changelog $date</title>
              <link>$url</link>
              <author>$email</author>
              <pubDate>$rssDate</pubDate>
              <description><![CDATA[
                <ul>";
            foreach ($changes as $change) {
                echo "<li>$change</li>";
            }
            echo "</ul>
              ]]></description>
              </item>";
        }
        echo "</channel></rss>";
    }
} else {
    if (array_key_exists("cat", $_GET)) { // if category
        $categories = getCategories($blogData);
        $category = $_GET["cat"];
        if (array_key_exists($category, $categories)) {
            echo "<channel>
          <title>yazo.ink - $category</title>  
          <link>$url</link>
          <description>Posts tagged \"$category\"</description>";
            foreach ($blogData as $blogEntry) {
                if (in_array($category, $blogEntry["categories"])) {
                    $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
                    $content = file_get_contents("blog/entries/{$entry}.html");
                    $title = $blogEntry["title"];
                    $date = date(DATE_RSS, strtotime($blogEntry["date"]));
                    $subheading = $blogEntry["subheading"];
                    echo "<item>
                    <title>$title</title>
                    <link>$url/?nav=blog&amp;entry=$entry</link>
                    <guid isPermaLink='true'>$url/?nav=blog&amp;entry=$entry</guid>
                    <pubDate>$date</pubDate>
                    <author>$email</author>
                    <description>
                        <![CDATA[
                            <i>$subheading</i>
                            <br>
                            $content
                        ]]>
                    </description>
                  </item>";
                }
            }
            echo "</channel></rss>";
        }
    } else { // if all posts
        echo "<channel>
      <title>yazo.ink - Blog</title>  
      <link>$url?nav=blog</link>
      <description>All posts</description>";
        foreach ($blogData as $blogEntry) {
            $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
            $content = file_get_contents("blog/entries/{$entry}.html");
            // $content = str_replace("&", "&amp;", $content);
            // $content = str_replace("<", "&lt;", $content);
            // $content = str_replace(">", "&gt;", $content);
            $title = $blogEntry["title"];
            $date = date(DATE_RSS, strtotime($blogEntry["date"]));
            $subheading = $blogEntry["subheading"];
            echo "<item>
              <title>$title</title>
              <link>$url/?nav=blog&amp;entry=$entry</link>
              <guid isPermaLink='true'>$url/?nav=blog&amp;entry=$entry</guid>
              <pubDate>$date</pubDate>
              <author>$email</author>
              <description>
                  <![CDATA[
                      <i>$subheading</i>
                      <br>
                      $content
                  ]]>
              </description>
            </item>";
        }
        echo "</channel></rss>";
    }
}
?>
