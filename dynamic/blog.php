<?php
if (array_key_exists('entry', $_GET)) { # if blog post specified
  echo "<p>
    <a href='index.php?nav=Blog'>&#11184; <b>Back</b></a> | <a href='javascript:;' id='copy-url'><b>&#x2398; Copy URL</b></a> | <a href='rss.php'><b><img src='images/rss.webp' width='12px'></img> RSS</b></a>
  </p>";
  echo "<br />";
  $found = false;
  foreach ($json as $blogEntry) {
    $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
    if ($entry == $_GET['entry']){
      $found = true;
      echo "<h2>" . $blogEntry['title'] . "</h2>";
      echo "<h3>" . $blogEntry['subheading'] . "</h3>";
      echo "<p><i>" . $blogEntry['date'] . "</i></p>";
      echo "<br />";
      $content = file_get_contents("blog/entries/{$entry}.html");
      echo $content;
      echo "<br />";
      echo "<p><b>Categories</b>: ";
      foreach ($blogEntry['categories'] as $category) {
        echo "<a href='index.php?nav=Blog&cat=$category'>$category</a> ";
      }
      echo "</p>";
      echo "<br />";
    }
  }
  if ($found == false) {
    echo "<p><b>Entry not found :(</b></p>";
  }
  echo "<script src='js/copy-url.js'></script>";
} else {
  echo "<h1>Blog...</h1>";
  echo "<p><a href='rss.php'><b><img src='images/rss.webp' width='12px'></img> RSS</b></a></p>";
  echo "<br />";
  $categories = getCategories($json);
  echo "<p><b>Categories</b>: ";
  echo "<a href='index.php?nav=Blog'>All Entries</a> ";
  foreach ($categories as $category => $url) {
    echo "<a href='$url'>$category</a> ";
  }
  echo "</p>";
  echo "<br />";

  if (array_key_exists('cat', $_GET)){ # if category specified
    echo "<h2>" . $_GET['cat'] . "</h2>";
    echo "<ul>";
    $found = false;
    foreach ($json as $blogEntry) {
      if (in_array($_GET['cat'], $blogEntry['categories'])) {
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
	      $found = true;
	      echo "<li><a href='index.php?nav=Blog&entry=" . $entry . "'><b>" . $blogEntry['title'] . "</b> - " . $blogEntry['date'] . "</a></li>";
      }
    }
    echo "</ul>";
    echo "<br />";
    if ($found == false) {
      echo "<p><b>Category not found :(</b></p>";
    }
  } else {
    echo "<h2>All Entries</h2>";
    echo "<ul>";
    foreach ($json as $blogEntry) {
      $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
      echo "<li><a href='index.php?nav=Blog&entry=" . $entry . "'><b>" . $blogEntry['title'] . "</b> - " . $blogEntry['date'] . "</a></li>";
    } 
    echo "</ul>";
    echo "<br />";
  }
}
?>
