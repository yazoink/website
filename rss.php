<?php
require 'imports/variables.php';
require 'imports/functions.php';
date_default_timezone_set('Australia/Melbourne');
header("Content-Type: application/rss+xml; charset=UTF-8");
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
$url = $protocol . '://' . $_SERVER['HTTP_HOST'];
echo "<?xml version='1.0' encoding='UTF-8'?>
  <rss version='2.0'>";
if (array_key_exists("cat", $_GET)) { // if category
    $categories = getCategories($blogData);
    $category = $_GET["cat"];
    if (array_key_exists($category, $categories)) {
        echo "<channel>
          <title>$category</title>  
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
                    <link>$url?nav=blog&amp;entry=$entry</link>
                    <guid isPermaLink='true'>$url?nav=blog&amp;entry=$entry</guid>
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
      <title>Blog</title>  
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
              <link>$url?nav=blog&amp;entry=$entry</link>
              <guid isPermaLink='true'>$url?nav=blog&amp;entry=$entry</guid>
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
?>
