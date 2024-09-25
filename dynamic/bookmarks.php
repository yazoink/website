<h1>Bookmarks</h1>
<p>A (very badly managed) collection of sites I like. For when I get bored, mainly.</p>
<br />

<?php
$categoryNum = count($bookmarkCategories);
for ($i = 0; $i < $categoryNum; $i++) {
  echo "<h2>$bookmarkCategories[$i]</h2>";
  printUrlList($bookmarks[$i], true);
  echo "<br />";
}
?>
