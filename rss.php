<?php
require 'dynamic/variables.php';
date_default_timezone_set('Australia/Melbourne');
header("Content-Type: application/rss+xml; charset=UTF-8");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<rss version='2.0'>";
echo "<channel>";
echo "<title>yazoink</title>";
echo "<link>https://$domain</link>";
echo "<description>yazoink's blog</description>";
foreach ($json as $blogEntry) {
  $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
  echo "<item>";
  echo "<title>" . $blogEntry['title'] . "</title>";
  echo "<link>https://$domain/index.php?nav=Blog&amp;entry=" . $entry . "</link>";
  echo "<description>" . $blogEntry['subheading'] . "</description>";
  echo "<pubDate>" . date(DATE_RSS, strtotime($blogEntry['date'])) . "</pubDate>";
  echo "</item>";
}
echo "</channel>";
echo "</rss>";
?>
