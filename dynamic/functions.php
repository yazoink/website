<script>
function openInNewTab(url) {
  window.open(url, "_blank");
}
</script>

<?php
function printRandomSong($songList) {
  $song = array_rand($songList);
  $url = $songList[$song];
  echo "<p>&#129170; <a href='$url' target='_blank'>$song</a></p>";
}

function imFeelingLucky($bookmarks) {
  $randomCategoryIndex = array_rand($bookmarks);
  $randomCategory = $bookmarks[$randomCategoryIndex];
  $randomBookmarkIndex = array_rand($randomCategory);
  $randomBookmark = $randomCategory[$randomBookmarkIndex];
  echo "<p><button id='html-button' onclick=\"openInNewTab('$randomBookmark')\">";
  echo "I'm feeling lucky!";
  echo "</button></p>";
}

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
      $statusIndicator = "<span class='green'>&#10003;</span>";
    } else {
      $statusIndicator = "<span class='red'>&#10007;</span>";
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

function printServices($services) {
  echo "<table>";
  echo "<thead>";
  echo "<th>Service</th>";
  echo "<th>Status</th>";
  echo "</thead>";
  echo "<tbody>";
  foreach ($services as $description => $url) {
    echo "<tr>";
    echo "<td><a href='$url' target='_blank'>$description</a></td>";
    if (siteIsUp($url)) {
      $statusIndicator = "&#10003;";
    } else {
      $statusIndicator = "&#10007;";
    }
    echo "<td>$statusIndicator</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
}
?>
