<?php
$bookmarks = array(
  array(
    # link directories
    "1 MB Club" => "https://1mb.club/",
    "sizeof(cat)'s links" => "https://sizeof.cat/links/",
    "SpaceHey Reclaiming the Internet Links" => "https://forum.spacehey.com/topic?id=3221",
    "Active vintage websites" => "https://www.404pagefound.com/",
  ),
  array(
    # file directories
    "Text Files" => "http://www.textfiles.com/",
  ),
  array(
    # resources
    "Unicode Symbols" => "https://symbl.cc/en/",
    "Arch Linux Wiki" => "https://wiki.archlinux.org/",
    "OSX-KVM" => "https://github.com/kholia/OSX-KVM",
    "Recipe site made by me" => "https://simplerecipepage.great-site.net/",
  ),
  array(
    # graphics
    "Geocities GIF archive" => "https://gifcities.org/",
  ),
  array(
    # audio
    "AI song remixer that's actually good" => "https://rave.dj/",
  ),
  array(
    # misc tech related
    "Bliss OS" => "https://blissos.org/",
    "Web Design Museum" => "https://www.webdesignmuseum.org/",
    "Useful sed commands" => "https://www.pement.org/sed/sed1line.txt",
  ),
  array(
    # games
    "Klondike Solitaire" => "https://freesolitaire.win/",
  ), 
);

$bookmarkCategories = array(
  "Link Directories",
  "File Directories",
  "Resources",
  "Graphics",
  "Audio",
  "Misc Tech Related",
);
?>

<h1>Bookmarks</h1>
<p>A (very badly managed) collection of sites I like. For when I get bored, mainly.</p>
<br />

<?php
$categoryNum = count($bookmarkCategories);
for ($i = 0; $i < $categoryNum; $i++) {
  echo "<h2>$bookmarkCategories[$i]</h2>";
  printUrlList($bookmarks[$i], true);
  echo "<br />";
}
?>

<p><img src='../images/sketches2.webp' /></p>
