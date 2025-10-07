<?php
/* $jsonStr = file_get_contents('blog/blog.json'); */
/* $json = json_decode($jsonStr, true); */
if (array_key_exists('entry', $_GET)) { // if blog post specified
    $found = false;
    foreach ($blogData as $blogEntry) {
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        if ($entry == $_GET['entry']) {
            $found = true;
            $content = file_get_contents("blog/entries/{$entry}.html");
            printBackCopyRssButtons("/?nav=blog", true, true);
            echo "<h2>" . $blogEntry['title'] . "</h2>
              <h3>" . $blogEntry['subheading'] . "</h3>
              <p><i>" . $blogEntry['date'] . "</i></p><br>
              $content<br>
              <p><b>Categories</b>: ";
            foreach ($blogEntry['categories'] as $category) {
                echo "<a href='/?nav=blog&cat=$category'>$category</a> ";
            }
            echo "</p><br><script src='js/copy-url.js' defer></script>";
            break;
        }
    }
    if ($found == false) {
        printBackCopyRssButtons("/?nav=blog", false, true);
        xNotFound("Post");
    }
} else { // post not specified
    $categories = getCategories($blogData);
    if (array_key_exists('cat', $_GET)) { // if category specified
        printCategories($categories, true);
        $found = false;
        foreach ($blogData as $blogEntry) {
            if (in_array($_GET["cat"], $blogEntry["categories"])) {
                $found = true;
                break;
            }
        }
        if ($found == true) { // if category found
            echo "<h2>" . $_GET['cat'] . "</h2> 
              <p>
                  <a href='/?nav=blog'>
                      <img src='images/graphics/gruvbox/back.webp'> 
                      <b>Back to all posts</b></a> |
                  <a href='/rss.php?cat=" . $_GET["cat"] . "'>
                      <img src='images/graphics/gruvbox/rss2.webp'>
                      <b>RSS feed for <i>" . $_GET["cat"] . "</i></b></a>
              </p><br><ul>";
            foreach ($blogData as $blogEntry) {
                if (in_array($_GET['cat'], $blogEntry['categories'])) {
                    $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
                    $title = $blogEntry["title"];
                    $date = $blogEntry["date"];
                    $found = true;
                    echo "<li>
                  <a href='/?nav=blog&entry=$entry'>
                    <b>$title</b> - $date
                  </a>
                </li>";
                }
            }
            echo "</ul><br>";
        } else { // category not found
            xNotFound("Category <i>" . $_GET["cat"] . "</i>");
        }
    } else { // category not specified (all posts)
        printCategories($categories, false);
        echo "<h2>All Posts</h2> 
            <p>
                <a href='/rss.php'><img src='images/graphics/gruvbox/rss2.webp'>
                    <b>RSS feed</b>
                </a>
            </p><br><ul>";
        foreach ($blogData as $blogEntry) {
            $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
            $title = $blogEntry["title"];
            $date = $blogEntry["date"];
            echo "<li>
              <a href='/?nav=blog&entry=$entry'>
                <b>$title</b> - $date
              </a>
            </li>";
        } 
        echo "</ul><br>";
    }
    echo "<script src='js/categories.js' defer></script>";
    // echo "<img src='images/graphics/gruvbox/face2.webp'>";
}
?>
