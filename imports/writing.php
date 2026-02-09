<?php
function printWritingCategory($category, $writingData) {
  echo("<h2>{$category}</h2><br>");
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
  echo "</ul><script src='js/copy-url.js' defer></script>";
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
  echo("<br>
    <div class='box'>
      <div class='box-heading left-right-container'>
        <div class='left-right-container-left'>
          <p>FEATURED</p>
        </div>
        <div class='left-right-container-right x-button'><p>X</p></div>
      </div>
      <div class='box-content'>
        <ul>");
  foreach ($featured as $piece) {
    $entry = str_replace(" ", "-", strtolower($piece["title"]));
    $entry = str_replace("'", "", $entry);
    echo("<li><a href='/?nav=writing&piece={$entry}'>{$piece["title"]}</a></li>");
  }
  echo("</ul></div></div><br>");
  $i = 0;
  $j = 0;
  $categoryNum = sizeof($categories);
  foreach ($categories as $category) {
    if ($i == 0) { // if left side
      $i = 1;
      if ($j == $categoryNum - 1 && $categoryNum % 2 != 0) { // if at end and odd number (no l-r container)
        printWritingCategory($category, $writingData);
      } else { // left side
        echo("<div class='left-right-container'>
          <div>");
        printWritingCategory($category, $writingData);
        echo("</div>");
      }
    } else { // if right side
      $i = 0;
      echo("<div>");
      printWritingCategory($category, $writingData);
      echo("</div></div>");
      if ($j % 2 != 0) {
        echo("<br>");
      }
    }
    $j += 1;
  }
}
?>
