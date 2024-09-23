<?php
function printUrlList($urlList, $openInNewTab) {
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
?>
