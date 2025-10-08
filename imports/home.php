<img src="images/random-images/gruvbox/mushroom.webp">
<hr>
<br>
<h1>Welcome...</h1>
<p>I'm a 19 year old artist, compsci enthusiast and music enjoyer from Australia and I made this website to share my projects and talk about my interests. Click <a href='/?nav=about-me'>here</a> to read more about me.</p>
<?php printStatusUpdates($statusUpdates); ?>
<p>I also host some libre alternatives to popular websites, 
  you can read more about that <a href='/?nav=Services'>here</a>.</p>
<br>
<p>This site was written in PHP using Neovim!</p>
<br>
<p><a href="javascript:;" class="song-link">Click here for a random song recommendation.</a></p>
<?php
printRecentBlogPosts(4, $blogData);
?>
<h2>FAQ</h2>
<p><b>Did you know that this website looks old/unoptimized for mobile?</b></p>
<p>Yes, it's intentional. I like old web design and hate phones.</p>
<br>
<p><b>How does it load so fast?</b></p>
<p>All the images on this site are WebPs and larger images are thumbnailed. I also avoid Javascript as much as possible.</p>
<br>
<p><b>How do I make my own site like this?</b></p>
<p>Go on <a href="https://www.w3schools.com/" target="_blank">W3Schools</a> and learn some HTML/CSS/PHP. You can also go through the source code for my site <a href="https://github.com/yazoink/website" target="_blank">here</a>.</p>
<br>
<p><b>How do you make the images on this site look like that?</b></p>
<p>I use <a href="https://www.gimp.org/downloads/" target="_blank">GIMP</a> to dither them. You can watch a tutorial on how to do it <a href="https://odysee.com/@yazoink:c/dither:9" target="_blank">here</a>. All of the images I dither are my artwork/photos.</p>
<br>
<p><b>What distro/software do you use?</b></p>
<p>I use NixOS (btw). You can read a full overview <a href="/?nav=Technology">here</a>.</p>
<?php printChangelog($changelog); ?>
<script defer src='js/songs.js'></script>
