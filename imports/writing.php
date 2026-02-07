<?php
if (array_key_exists('piece', $_GET)) { // if piece specified
  printBackCopyRssButtons("/?nav=writing", true, false);
  $found = false;
  foreach ($writingData as $piece) {
    $entry = str_replace(" ", "-", strtolower($piece["title"]));
    $entry = str_replace("'", "", $entry);
    if ($entry == $_GET["piece"]) {
      $found = true;
      $content = file_get_contents("writing/pieces/{$entry}.html");
      echo("<br><p><i>{$piece["date"]}</i></p>");
      echo("<h2>{$piece["title"]}</h2>");
      if (array_key_exists("note", $piece)) {
        echo("<p><i>{$piece["note"]}</i></p>");
      }
      echo("<hr><br>{$content}");
    }
  }
  if ($found == false) {
    xNotFound("Post");
  }
} else { // piece not specified
  echo("<h1>Writing...</h1>");
  echo("<br><p>I like to write as a hobby -- please do not expect this to be good. Publishers please hmu</p>");
  // get categories
  $categories = array();
  $featured = array();
  foreach ($writingData as $piece) {
    if (!in_array($piece["category"], $categories)) {
      array_push($categories, $piece["category"]);
    }
    if ($piece["featured"] == true) {
      array_push($featured, $piece);
    }
  }
  // print links
  echo("<br><h2>Featured</h2><br><ul>");
  foreach ($featured as $piece) {
    $entry = str_replace(" ", "-", strtolower($piece["title"]));
    $entry = str_replace("'", "", $entry);
    echo("<li><a href='/?nav=writing&piece={$entry}'>{$piece["title"]}</a></li>");
  }
  echo("</ul>");
  foreach ($categories as $category) {
    echo("<br><h2>{$category}</h2><br>");
    foreach ($writingData as $piece) {
      echo("<ul>");
      if ($piece["category"] == $category) {
        $entry = str_replace(" ", "-", strtolower($piece["title"]));
        $entry = str_replace("'", "", $entry);
        echo("<li><a href='/?nav=writing&piece={$entry}'>{$piece["title"]}</a></li>");
      }
      echo("</ul>");
    }
  }
}
?>
