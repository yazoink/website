<?php
function printRecentBlogPosts($num, $json) {
  echo "<h3>Recent blog posts</h3>";
  echo "<ul>";
  $i = 0;
  foreach ($json as $blogEntry) {
    if ($i == $num) {
      break;
    }
    echo "<li><a href='index.php?nav=Blog&entry=" . $blogEntry['entry'] . "'>" . $blogEntry['title'] . "</a></li>";
    $i++;
  }
  echo "</ul>";
}

function printRandomImage() {
  $imageDir = "images/random-images";
  $images = scandir($imageDir);
  $images = array_slice($images, 2);
  echo "<p><img src='" . $imageDir . "/" . $images[array_rand($images)] . "' /></p>";
}

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

function printUrlListWithStatus($urlList, $openInNewTab) {
  echo "<ul>";
  foreach ($urlList as $title => $url) {
    if (siteIsUp($url)) {
      $statusIndicator = "&#10003;";
    } else {
      $statusIndicator = "&#10007;";
    }
    if ($openInNewTab == true) {
      echo "<li><a href='$url' target='_blank'>$title $statusIndicator</a></li>";
    } else {
      echo "<li><a href='$url'>$title $statusIndicator</a></li>";
    }
  }
  echo "</ul>";
}

function siteIsUp($url) {
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 5);
  curl_exec($ch);
  $ret = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  if ($ret == 200) {
    return true;
  } else {
    return false;
  }
}
?>
