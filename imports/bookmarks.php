<h1>Bookmarks</h1>
<p>A (very badly managed) collection of sites I like. For when I get bored, mainly.</p>
<hr>
<br>
<?php
$randBookmarkCategoryIndex = array_rand($bookmarks);
$randBookmarkCategory = $bookmarks[$randBookmarkCategoryIndex];
foreach ($bookmarks as $category => $bookmarksCategory) {
  echo "<h2>" . $category . "</h2>";
  printUrlList($bookmarksCategory, true);
  echo "<br>";
}
?>