<?php
function printStatusUpdates($statusUpdates)
{
    echo "<div class='box status-updates-box' id='status-updates'>
        <div class='left-right-container box-heading'>
            <div class='left-right-container-left'>
                <p>STATUS UPDATES [<a href='/rss.php?status=true'>RSS</a>]</p>
            </div>
            <div class='left-right-container-right x-button'><p>X</p></div>
        </div>
        <div class='box-content status-updates'>";
    $updateNum = count($statusUpdates);
    $i = 0;
    foreach ($statusUpdates as $update) {
        $i++;
        if ($i > 1) {
            echo "<br>";
        }
        echo "<p>$update[date]</p>
        <div class='box-content-indent'><p>$update[status]</p></div>";
        //if ($i < $updateNum) {
        //    echo "<hr>";
        //}
    }
    echo "</div></div>";
}

function printRecentBlogPosts($num, $blogData)
{
    echo "<div class='box recent-blog-posts-box' id='recent-blog-posts'>
      <div class='left-right-container box-heading'>
          <div class='left-right-container-left'>
              <p>RECENT BLOG POSTS [<a href='/rss.php'>RSS</a>]</p>
          </div>
          <div class='left-right-container-right x-button'><p>X</p></div>
      </div>
      <div class='box-content recent-blog-posts'>";
    echo "<ul>";
    $i = 0;
    foreach ($blogData as $blogEntry) {
        if ($i == $num) {
            break;
        }
        $entry = str_replace(" ", "-", strtolower($blogEntry['title']));
        echo "<li><a href='/?nav=blog&entry=$entry'>" . $blogEntry['title'] . " [" . $blogEntry["date"] . "]</a></li>";
        $i++;
    }
    echo "</ul>";
    echo "<br><p>Click <a href='/?nav=blog'>here</a> for more...</p>";
    echo "</div></div>";
}

function printChangelog($changelog)
{
    echo "<div class='box changelog-box' id='changelog'>
        <div class='left-right-container box-heading'>
            <div class='left-right-container-left'>
                <p>SITE CHANGELOG [<a href='/rss.php?changelog=true'>RSS</a>]</p>
            </div>
            <div class='left-right-container-right x-button'><p>X</p></div>
        </div>
        <div class='box-content changelog'>";
    $dateNum = count($changelog);
    $i = 0;
    foreach ($changelog as $date => $changes) {
        echo "<p>$date</p><br><ul>";
        foreach ($changes as $change) {
            echo "<li>$change</li>";
        }
        echo "</ul><br>";
        $i++;
        if ($i < $dateNum) {
            echo "<hr><br>";
        }
    }
    echo "</div></div>";
}


function printQandA($qAndA)
{
    foreach ($qAndA as $q) {
        echo "<p><b>{$q["question"]}</b></p>
    <p class='content-indent'><i>{$q["answer"]}</i></p><br>";
    }
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
<h2>My Other Sites</h2>
<br>
<h3>Simple Recipe Page</h3>
<br>
<p><a href='https://recipes.yazo.ink' target="_blank"><img class='website-screenshot' src='images/misc/recipes.webp' loading='lazy'></a></p>
<p><b><a href='https://recipes.yazo.ink' target="_blank">recipes.yazo.ink</a></b></p>
<br>
<p>An anti-bloat recipe site inspired by <a href='https://based.cooking' target="_blank">based.cooking</a>.</p>
<br>
<h3>Base16 Colorscheme Editor</h3>
<br>
<p><a href='https://base16.yazo.ink' target="_blank"><img class='website-screenshot' src='images/misc/base16.webp' loading='lazy'></a></p>
<p><b><a href='https://base16.yazo.ink' target='_blank'>base16.yazo.ink</a></b></p>
<br>
<p>A tool for making <a href='https://github.com/chriskempson/base16' target='_blank'>base16</a> themes.</p>
<br>
<h2>FAQ</h2>
<br>
<?php printQandA($qAndA);?>
<script defer src='js/songs.js'></script>
<script defer src='js/window-hover.js'></script>
