<?php
function getCategories($json)
{
    $categories = array();
    foreach ($json as $blogEntry) {
        foreach ($blogEntry['categories'] as $category) {
            if (!in_array($category, $categories)) {
                $categories[$category] = "/?nav=blog&cat=$category";
            }
        }
    }
    ksort($categories);
    return $categories;
}

function getCategoriesHtml($categories, $showByDefault)
{
    $html = "";
    if ($showByDefault == true) {
        $html .= "<div id='categories-list' class='categories-list' style='display:block;'>";
    } else {
        $html .= "<div id='categories-list' class='hidden'>";
    }
  /* echo("<div class='content-indent'><p><a href='/?nav=blog'><b>All Posts</b></a> "); */
  $html .= "<div><p>";
    foreach ($categories as $category => $url) {
        $html .= "<a href='{$url}'>{$category}</a> ";
    }
    $html .= "</p></div></div>";
  return $html;
}


/* $jsonStr = file_get_contents('blog/blog.json'); */
/* $json = json_decode($jsonStr, true); */
if (array_key_exists('entry', $_GET)) { // if blog post specified
    $found = false;
    foreach ($blogData as $blogEntry) {
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        if ($entry == $_GET['entry']) {
            $found = true;
            $content = file_get_contents("blog/entries/{$entry}.html");
            if (array_key_exists("cat", $_GET)) {
                printBackCopyRssButtons("/?nav=blog&cat=" . $_GET["cat"], true, true);
            } else {
                printBackCopyRssButtons("/?nav=blog", true, true);
            }
            echo "
              <hr><br><h6 class='date'><i>" . $blogEntry['date'] . "</i></h6>
              <h2>" . $blogEntry['title'] . "</h2>
              <h5 class='subheading'>" . $blogEntry['subheading'] . "</h5><hr><br>
              $content<br>
              <hr><p><b>Categories</b>: ";
            foreach ($blogEntry['categories'] as $category) {
                echo "<a href='/?nav=blog&cat=$category'><b>$category</b></a> ";
            }
            echo "</p><script src='js/copy-url.js' defer></script>";
            break;
        }
    }
    if ($found == false) {
        printBackCopyRssButtons("/?nav=blog", false, true);
        xNotFound("Post");
    }
} else { // post not specified
    echo "
    <h1>Blog...</h1><br>
    <p>This is going to be a complete mixed bag of topics so bear with me lol</p>
    ";
    $categories = getCategories($blogData);
    $getCatUrlQuestionMark = "";
    $getCatUrlAmpersand = "";
    $allPosts = "";
    if (array_key_exists("cat", $_GET)) { // category specified
        $found = false;
        foreach ($blogData as $blogEntry) {
            if (in_array($_GET["cat"], $blogEntry["categories"])) {
                $found = true;
                break;
            }
        }
        if ($found == true) { // category exists
            $category = $_GET["cat"];
            $getCatUrlQuestionMark = "?cat=$category";
            $getCatUrlAmpersand = "&cat=$category";
            $showCategories = true;
            $arrow = "up";
            $entriesToPrint = [];
            $allPosts = "<a href='/?nav=blog'><img src='images/graphics/gruvbox/back.webp'> Back to all posts</a> | ";
            foreach ($blogData as $blogEntry) {
                if (in_array($category, $blogEntry["categories"])) {
                    $entriesToPrint[] = $blogEntry;
                }
            }
        } else { // category doesn't exist
            xNotFound("Category <i>" . $_GET["cat"] . "</i>");
        }
    } else {
        $category = "All Posts";
        $showCategories = false;
        $arrow = "down";
        $entriesToPrint = $blogData;
    }
    // print blog index page
    
    echo "
    <br>
    <div class='box-container'>
      <div class='text-box'>
      <p>$allPosts<a href='/rss.php'><img src='images/graphics/gruvbox/rss2.webp'>RSS</a> | 
        <a href='javascript:;' id='categories-button'>Categories<img src='images/graphics/gruvbox/$arrow.webp'></a>
    </p>";
    echo getCategoriesHtml($categories, $showCategories);
    echo "</div>";

    $boxContent = "";
    $boxContent .= "<ul>";
    foreach ($entriesToPrint as $blogEntry) {
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        $title = $blogEntry["title"];
        $date = $blogEntry["date"];
        $found = true;
        $boxContent .= "<li>
            <a href='/?nav=blog&entry=$entry$getCatUrlAmpersand'>
                $title - $date
            </a>
        </li>";
    }

    $boxTitle = strtoupper($category);
    echo makeBox(
      $boxTitle,
      $boxContent
    );
    echo("</div>");
    echo "</ul><script src='js/categories.js' defer></script>";
    //echo "<img src='images/random-images/gruvbox/shapes.webp'>";
}
