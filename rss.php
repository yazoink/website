<?php
require 'imports/variables.php';
date_default_timezone_set('Australia/Melbourne');
header("Content-Type: application/rss+xml; charset=UTF-8");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<rss version='2.0'>";
echo "<channel>";
echo "<title>yazoink</title>";
echo "<link>$baseUrl</link>";
echo "<description>yazoink's blog</description>";
foreach ($blogData as $blogEntry) {
    $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
    $content = file_get_contents("blog/entries/{$entry}.html");
    $content = str_replace("&", "&amp;", $content);
    $content = str_replace("<", "&lt;", $content);
    $content = str_replace(">", "&gt;", $content);
    echo "<item>";
    echo "<title>" . $blogEntry['title'] . "</title>";
    echo "<link>$/?nav=Blog&amp;entry=" . $entry . "</link>";
    echo "<description>";
    echo $blogEntry['subheading'];
    echo "&lt;br&gt;";
    echo $content;
    echo "</description>";
    echo "<pubDate>" . date(DATE_RSS, strtotime($blogEntry['date'])) . "</pubDate>";
    echo "</item>";
}
echo "</channel>";
echo "</rss>";
?>
