<div class='sidebar-right'>
  <img class='sidebar-img' src='images/sketches.webp' />
  <!-- <br />
  <h4>Listen to a Random Song I Like</h4> -->
  <?php #printRandomSong($randomSongs); ?>
  <br />
  <?php
  $jsonStr = file_get_contents('json/blog.json');
  $json = json_decode($jsonStr, true);
  printRecentBlogPosts(3, $json);
  ?>
  <!-- <img class="sidebar-img-gradient" src="images/gradient.webp" /> -->
</div>
