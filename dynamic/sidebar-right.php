<div class='sidebar-right'>
  <img class='sidebar-img' src='images/sketches.webp' />
  <br />
  <?php 
    printRecentBlogPosts(2, $json);
    echo "<br />";
    echo "<div class='center'>";
    randomFromArrayButton($songs, "Song recommendation button", "songButton");
    echo "</div>";
  ?>
</div>
