<div class="greeter-img">
  <img src="images/mushroom-transparent.webp">
</div>
<hr>
<br>
<h1>Welcome...</h1>
<br>
<div class="left-right-container">
  <div class="left-right-container-left">
    <p>I'm a 20 year old artist, writer, compsci enthusiast, and music enjoyer from Australia and I made this website to share my projects and talk about my interests. Click <a href='/?nav=about-me'>here</a> to read more about me.
    <br><br>
    I also host some libre alternatives to popular websites, you can read more about that <a href='/?nav=Services'>here</a>.
  </div>
  <div class="left-right-container-right">
    <p><img src="images/graphics/gruvbox/face3.webp"></p>
  </div>
</div>
<br>
<p>If you've visited the site somewhat recently, I'd recommend clearing your cache (Ctrl+F5) because I've probably updated the CSS and it'll probably look weird.</p>
<br>
<p><a href="javascript:;" class="song-link">Click here for a random song recommendation.</a></p>
<br>
<hr>
<div class="status-changelog-container">
  <?php printStatusUpdates($statusUpdates); ?>
  <?php printChangelog($changelog); ?>
  <?php printRecentBlogPosts(4, $blogData); ?>
</div>
<hr>
<!-- <div class="left-right-container">
  <div class="left-right-container-left">
    <p>&emsp;<img src="images/graphics/gruvbox/smiley.webp"></p>
  </div>
  <div class="left-right-container-right">
    <p><code><?php echo date("h:i a"); ?></code>&emsp;</p>
  </div>
</div>
<hr> -->
<br>
<h2>FAQ</h2>
<br>
<?php printQandA($qAndA);?>
<script defer src='js/songs.js'></script>
<script defer src='js/window-hover.js'></script>
