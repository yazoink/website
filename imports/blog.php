<?php
/* $jsonStr = file_get_contents('blog/blog.json'); */
/* $json = json_decode($jsonStr, true); */
if (array_key_exists('entry', $_GET)) { // if blog post specified
    $found = false;
    foreach ($blogData as $blogEntry) {
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        if ($entry == $_GET['entry']) {
            $found = true;
            printBackCopyRssButtons("/?nav=blog", true, true);
            echo "<h2>" . $blogEntry['title'] . "</h2>";
            echo "<h3>" . $blogEntry['subheading'] . "</h3>";
            echo "<p><i>" . $blogEntry['date'] . "</i></p>";
            echo "<br>";
            $content = file_get_contents("blog/entries/{$entry}.html");
            echo $content;
            echo "<br>";
            echo "<p><b>Categories</b>: ";
            foreach ($blogEntry['categories'] as $category) {
                echo "<a href='/?nav=blog&cat=$category'>$category</a> ";
            }
            echo "</p>";
            echo "<br>";
        }
    }
    if ($found == false) {
        printBackCopyRssButtons("/?nav=blog", false, true);
        xNotFound("Post");
    }
} else { // post not specified
    echo "<h1>Blog...</h1>";
    $categories = getCategories($blogData);
    echo "<p><b>Categories</b>: 
      <a href='/?nav=blog'>All Posts</a> ";
    foreach ($categories as $category => $url) {
        echo "<a href='$url'>$category</a> ";
    }
    echo "</p>";
    echo "<br>";
    if (array_key_exists('cat', $_GET)) { // if category specified
        echo "<h2>" . $_GET['cat'] . "</h2> 
            <p>
                <a href='/rss.php?cat=" . $_GET["cat"] . "'><img src='images/graphics/gruvbox/rss2.webp'>
                    RSS feed for <i>" . $_GET["cat"] . "</i>
                </a>
            </p><ul>";
        $found = false;
        foreach ($blogData as $blogEntry) {
            if (in_array($_GET['cat'], $blogEntry['categories'])) {
                $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
                $title = $blogEntry["title"];
                $date = $blogEntry["date"];
                $found = true;
                echo "<li>
                  <a href='$url" . $categories[$category] . "'>
                    <b>$title</b> - $date
                  </a>
                </li>";
            }
        }
        echo "</ul>";
        echo "<br>";
        if ($found == false) {
            echo "<p><b>Category not found :(</b></p>";
        }
    } else { // category not specified (all posts)
        echo "<h2>All Posts</h2> 
            <p>
                <a href='/rss.php'><img src='images/graphics/gruvbox/rss2.webp'>
                    RSS feed
                </a>
            </p><ul>";
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
        echo "</ul>";
        echo "<br>";
    }
    // echo "<img src='images/graphics/gruvbox/face2.webp'>";
}
?>
<script src='js/copy-url.js' defer></script>
