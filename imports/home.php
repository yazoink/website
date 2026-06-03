<?php
function makeStatusUpdatesBox($statusUpdates)
{
    $boxContent = "";
    $boxContent .= "<div class='status-updates'>";
    $updateNum = count($statusUpdates);
    $i = 0;
    foreach ($statusUpdates as $update) {
        $i++;
        if ($i > 1) {
            $boxContent .= "<br>";
        }
        $boxContent .= "<p>$update[date]</p>
        <div class='box-content-indent'><p>$update[status]</p></div>";
    }
    $boxContent .= "</div>";
    $box = makeBox(
      "STATUS UPDATES", 
      $boxContent, 
      "status-updates-box", 
      "status-updates"
    );
    return $box;
}

function makeRecentBlogPostsBox($num, $blogData)
{
    $boxContent = "";
    $boxContent .= "
    <div class='recent-blog-posts'>
      <ul>
    ";
    $i = 0;
    foreach ($blogData as $blogEntry) {
        if ($i == $num) {
            break;
        }
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        $boxContent .= "<li><a href='/?nav=blog&entry=$entry'>" . $blogEntry['title'] . " [" . $blogEntry["date"] . "]</a></li>";
        $i++;
    }
    $boxContent .= "
        </ul>
        <br>
        <p>Click <a href='/?nav=blog'>here</a> for more...</p>
      </div>
      ";
    $box = makeBox(
      "RECENT BLOG POSTS", 
      $boxContent, 
      "recent-blog-posts-box", 
      "recent-blog-posts"
    );
    return $box;
}

function makeChangelogBox($changelog)
{
    $boxContent = "";
    $boxContent .= "<div class='changelog'>";
    $dateNum = count($changelog);
    $i = 0;
    foreach ($changelog as $date => $changes) {
        $boxContent .= "<p>$date</p><br><ul>";
        foreach ($changes as $change) {
            $boxContent .= "<li>$change</li>";
        }
        $boxContent .= "</ul><br>";
        $i++;
        if ($i < $dateNum) {
            $boxContent .= "<hr><br>";
        }
    }
    $boxContent .= "</div>";
    $box = makeBox(
      "CHANGELOG",
      $boxContent,
      "changelog-box",
      "changelog"
    );
    return $box;
}

function makeWebsiteBox($title, $url, $image) {
  $boxContent = "
    <div class='browser-ui'>
      <div class='browser-buttons'>
        <p>
          <img src='images/graphics/gruvbox/web-back.webp'>
          &ensp;
          <img src='images/graphics/gruvbox/web-forward.webp'>
        </p>
      </div>
      <div class='search-bar'>
        <p><img src='images/graphics/gruvbox/secure.webp'>&ensp;{$url}</p>
      </div>
    </div>
    <div class='website-screenshot-image'>
      <p><a href='{$url}' target='_blank'><img class='website-screenshot' src='{$image}' loading='lazy'></a></p>
    </div>
  ";
  $box = makeBox($title, $boxContent, "website-screenshot-box");
  return $box;
}


function makeQandA($qAndA)
{
    $r = "";
    $i = 1;
    $qNum = count($qAndA);
    foreach ($qAndA as $q) {
      $r .= "
      <p><b>{$q["question"]}</b></p>
      <p class='content-indent'>{$q["answer"]}</p>
      ";
      if ($i != $qNum) {
        $r .= "<br>";
      }
      $i += 1;
    }
    return $r;
}
?>
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
  <?php 
  echo makeStatusUpdatesBox($statusUpdates); 
  echo makeChangelogBox($changelog); 
  echo makeRecentBlogPostsBox(4, $blogData); 
  ?>
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
<h2>My Other Sites</h2>
<br>
<p>I like to make websites for fun, and I also host two others on my server, which can be found below.</p>
<br>
<div class="box-container">
<?php
echo makeWebsiteBox(
  "SIMPLE RECIPE PAGE", 
  "https://recipes.yazo.ink", 
  "images/misc/recipes.webp"
);
echo makeWebsiteBox(
  "BASE16 COLORSCHEME EDITOR", 
  "https://base16.yazo.ink", 
  "images/misc/base16.webp"
);
?>
</div>
<br>
<h2>FAQ</h2>
<br>
<?php
echo makeQandA($qAndA);
?>
<script defer src='js/songs.js'></script>
<script defer src='js/window-hover.js'></script>
