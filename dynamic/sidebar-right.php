<div class='sidebar-right'>
  <img class='sidebar-img' src='images/sketches.webp' />
  <!-- <br />
  <h4>Listen to a Random Song I Like</h4> -->
  <?php #printRandomSong($randomSongs); ?>
  <br />
  <?php 
    printRecentBlogPosts(2, $json);
    echo "<br />";
    echo "<div class='center'>";
    randomFromArrayButton($songs, "Song recommendation button", "songButton");
    echo "</div>";
  ?>
  <!-- <img class="sidebar-img-gradient" src="images/gradient.webp" /> -->
</div>
