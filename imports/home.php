<img class="greeter-img" src="images/random-images/gruvbox/mushroom.webp">
<hr>
<br>
<h1>Welcome...</h1>
<br>
<div class="left-right-container">
  <div class="left-right-container-left">
    <p>I'm a 19 year old artist, compsci enthusiast and music enjoyer from Australia and I made this website to share my projects and talk about my interests. Click <a href='/?nav=about-me'>here</a> to read more about me.
    <br><br>
    I also write sometimes. Will probably make a page for it eventually. In the meantime, you can read some of my poetry <a href="/?nav=blog&entry=recent-poetry">here</a>.
  </div>
  <div class="left-right-container-right">
    <img src="images/graphics/gruvbox/face3.webp">
  </div>
</div>
<br>
<p>I also host some libre alternatives to popular websites, 
  you can read more about that <a href='/?nav=Services'>here</a>.</p>
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
<ul class='question'><li>&emsp;Did you know that this site looks outdated and mobile unfriendly?</li></ul>
<p class="answer">Yes, it's intentional. I like old web design and hate phones.</p>
<br>
<ul class='question'><li>&emsp;How does it load so fast?</li></ul>
<p class="answer">All the images on this site are WebPs and larger images are thumbnailed. I also avoid Javascript as much as possible.</p>
<br>
<ul class="question"><li>&emsp;How do I make my own site like this?</li></ul>
<p class="answer">Go on <a href="https://www.w3schools.com/" target="_blank">W3Schools</a> and learn some HTML/CSS/PHP. You can also go through the source code for my site <a href="https://github.com/yazoink/website" target="_blank">here</a>.</p>
<br>
<ul class='question'><li>&emsp;How do you make the images on this site look like that?</li></ul>
<p class="answer">I use <a href="https://www.gimp.org/downloads/" target="_blank">GIMP</a> to dither them. You can watch a tutorial on how to do it <a href="https://odysee.com/@yazoink:c/dither:9" target="_blank">here</a>. All of the images I dither are my artwork/photos.</p>
<br>
<ul class="question"><li>&emsp;What distro/software do you use?</li></ul>
<p class="answer">I use NixOS (btw). You can read a full overview <a href="/?nav=Technology">here</a>.</p>
<script defer src='js/songs.js'></script>
<script defer src='js/window-hover.js'></script>
