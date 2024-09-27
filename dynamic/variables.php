<?php
$email = "yoinky@cock.li";
$domain = "yazo.ink";
$invidiousUrl = "https://inv.$domain";

$jsonStr = file_get_contents('json/blog.json');
$json = json_decode($jsonStr, true);

$services = array(
  "Invidious (Youtube frontend)" => "$invidiousUrl",
  "4get (search engine)" => "https://4get.$domain",
  "SafeTwitch (Twitch frontend)" => "https://safetwitch.$domain",
  "Redlib (Reddit frontend)" => "https://redlib.$domain",
  "AnonymousOverflow (Stack Overflow frontend)" => "https://overflow.$domain",
  "Quetre (Quora frontend)" => "https://quetre.$domain",
  "Rimgo (Imgur frontend)" => "https://rimgo.$domain",
);

$bookmarks = array(
  "Link Directories" => [
    # link directories
    "1 MB Club" => "https://1mb.club/",
    "sizeof(cat)'s links" => "https://sizeof.cat/links/",
    "SpaceHey Reclaiming the Internet Links" => "https://forum.spacehey.com/topic?id=3221",
    "Active vintage websites" => "https://www.404pagefound.com/",
  ],
  "File Directories" => [
    # file directories
    "Text Files" => "http://www.textfiles.com/",
  ],
  "Resources" => [
    # resources
    "Unicode Symbols" => "https://symbl.cc/en/",
    "Arch Linux Wiki" => "https://wiki.archlinux.org/",
    "OSX-KVM" => "https://github.com/kholia/OSX-KVM",
    "Recipe site made by me" => "https://simplerecipepage.great-site.net/",
  ],
  "Graphics" => [
    # graphics
    "Geocities GIF archive" => "https://gifcities.org/",
  ],
  "Audio" => [
    # audio
    "AI song remixer that's actually good" => "https://rave.dj/",
  ],
  "Games" => [
    # games
    "Klondike Solitaire" => "https://freesolitaire.win/",
  ], 
  "Misc Tech Related" => [
    # misc tech related
    "Bliss OS" => "https://blissos.org/",
    "Web Design Museum" => "https://www.webdesignmuseum.org/",
    "Useful sed commands" => "https://www.pement.org/sed/sed1line.txt",
  ],
);

$navbarLinks = array(
  "Home" => "index.php",
  "About Me" => "index.php?nav=About+Me",
  "Bookmarks" => "index.php?nav=Bookmarks",
  "Technology" => "index.php?nav=Technology",
  "Services" => "index.php?nav=Services",
  "Blog" => "index.php?nav=Blog",
  "Art Gallery" => "gallery.php"
);

$socialLinks = array(
  "Twitter" => "https://twitter.com/yazoink",
  "Github" => "https://github.com/yazoink",
  "Scratch" => "https://scratch.mit.edu/users/yazoink",
  "Odysee" => "https://odysee.com/@yazoink:c"
);

$songs = array(
  "The Main Thing - Roxy Music" => "$invidiousUrl/watch?v=Ir1v6alVA7c",
  "betelgeus - gjallarhornit" => "$invidiousUrl/watch?v=ffTm2Q6LFsE",
  "Same Old Scene - Roxy Music" => "$invidiousUrl/watch?v=vXOgQN1a7bE",
  "Clap Hands - Tom Waits" => "$invidiousUrl/watch?v=krjxyEme5vM",
  "Hate Street Dialogue - Rodriguez" => "$invidiousUrl/watch?v=vyCnOhW_-2c"
);
?>
