<?php
function printWritingCategory($category, $writingData) {
  echo("<p>{$category}</p><br>");
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
      $content = "";
      $file = "writing/pieces/{$entry}.html";
      if (file_exists($file)) {
      } else {
        $file = "writing/pieces/{$entry}.php";
      }
      echo("<br><br><p class='date'><i>{$piece["date"]}</i></p>");
      echo("<h2 class='title'>{$piece["title"]}</h2>");
      if (array_key_exists("subheading", $piece)) {
        echo("<h5 class='subheading'>{$piece["subheading"]}</h5>");
      }
      echo("<br>");
      include $file;
    }
  }
  if ($found == false) {
    xNotFound("Post");
  }
  echo "</ul><script src='js/copy-url.js' defer></script>";
} else { // piece not specified
  echo("<h1>Writing...</h1>");
  echo("<br><p>I like to write as a hobby -- please do not expect this to be good. Publishers please hmu</p><br>");
  echo("<p>Feedback and inquiries: <a href='mailto:yazoink@firemail.cc'>yazoink@firemail.cc</a></p>");

  // separate box for featured
  /*echo("<br>
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
  echo("</ul></div></div><br>");*/

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
  //categories box
  $i = 0;
  $categoryNum = sizeof($categories);
  $col1 = round($categoryNum / 2);

  echo("<div class='box'>");
  echo("<div class='box-heading left-right-container'>");
  echo("<div class='left-right-container-left'>");
  echo("PIECES");
  echo("</div>");
  echo("<div class='left-right-container-right x-button'><p>X</p></div>");
  echo("</div>");
  echo("<div class='box-content'>");
  echo("<div class='left-right-container'><div>");
  echo("<p>Featured</p><br><ul>");
  foreach ($featured as $piece) {
    $entry = str_replace(" ", "-", strtolower($piece["title"]));
    $entry = str_replace("'", "", $entry);
    echo("<li><a href='/?nav=writing&piece={$entry}'>{$piece["title"]}</a></li>");
  }
  echo("</ul><br>");
  $i += 1;
  foreach ($categories as $category) {
    printWritingCategory($category, $writingData);
    if ($i == $col1 - 1) {
      echo("</div><div>");
    } else {
      echo("<br>");
    }
    $i += 1;
  }
  echo("</div></div></div></div>");
}
?>
