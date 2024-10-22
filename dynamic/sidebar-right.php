<aside class='sidebar-right'>
  <img class='sidebar-img' src='images/sketches.webp' />
  <br />
  <?php 
    printFeaturedBlogPosts($json, $featuredBlogPosts, 2);
    echo "<br />";
    echo "<div class='center'>";
    randomFromArrayButton($songs, "Song recommendation button", "songButton");
    echo "</div>";
  ?>
</aside>
