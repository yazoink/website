<h1>Blog...</h1>
<p>Add my <a href='rss.php'>RSS feed</a>!</p>
<br />

<?php
$jsonStr = file_get_contents('json/blog.json');
$json = json_decode($jsonStr, true);

function getCategories($json) {
  $categories = array();
  foreach ($json as $blogEntry) {
    foreach ($blogEntry['categories'] as $category) {
      if (!in_array($category, $categories)) {
	$categories[$category] = "index.php?nav=Blog&cat=$category";
      }
    }
  }
  ksort($categories);
  return $categories;
}

if (array_key_exists('entry', $_GET)) { # if blog post specified
  echo "<p><a href='index.php?nav=Blog'>&#11184; <b>Back</b></a></p>";
  echo "<br />";
  $found = false;
  foreach ($json as $blogEntry) {
    if ($blogEntry['entry'] == $_GET['entry']) {
      $found = true;
      echo "<h2><a href='index.php?nav=Blog&entry=" . $blogEntry['entry'] . "'>" . $blogEntry['title'] . "</a></h2>";
      echo "<p><i>" . $blogEntry['date'] . "</i></p>";
      echo "<p><b>" . $blogEntry['subheading'] . "</b></p>";
      echo "<br />";
      foreach ($blogEntry['content'] as $paragraph) {
	echo "$paragraph";
      }
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
} else {
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
	$found = true;
	echo "<li><a href='index.php?nav=Blog&entry=" . $blogEntry['entry'] . "'><b>" . $blogEntry['title'] . "</b> - " . $blogEntry['date'] . "</a></li>";
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
      echo "<li><a href='index.php?nav=Blog&entry=" . $blogEntry['entry'] . "'><b>" . $blogEntry['title'] . "</b> - " . $blogEntry['date'] . "</a></li>";
    } 
    echo "</ul>";
    echo "<br />";
  }
}
?>

<p><img src='../images/shapes.webp' /></p>
