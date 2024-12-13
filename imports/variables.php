<?php
$email = "yazoink@firemail.cc";
$domain = "yazo.ink";
$invidiousUrl = "https://inv.$domain";

$jsonStr = file_get_contents('blog/blog.json');
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

$featuredBlogPosts = array(
  "Idiot Installs Etterna on NixOS",
  "Tunneling My Homelab"
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
    "HEX to RGB converter" => "https://rgbcolorcode.com/color/converter/",
    "Useful terminal commands" => "https://www.commandlinefu.com/commands/browse",
    "W3Schools (programming tutorials with a focus on webdev)" => "https://www.w3schools.com/",
    "JavaScript tutorial that I need to read" => "https://javascript.info/",
    "Bitmap font maker" => "https://www.pentacom.jp/pentacom/bitfontmaker2/",
    "Markdown cheatsheet" => "https://github.com/im-luka/markdown-cheatsheet",
    "Programming fonts" => "https://www.programmingfonts.org/",
    "Learn X in Y minutes" => "https://learnxinyminutes.com/",
    "Terminal colourscheme generator/editor" => "https://terminal.sexy/",
    "Useful sed commands" => "https://www.pement.org/sed/sed1line.txt",
    "Free old PC fonts" => "https://int10h.org/oldschool-pc-fonts/",
  ],
  "Graphics" => [
    # graphics
    "Geocities GIF archive" => "https://gifcities.org/",
    "Browser clone of the original MSPaint" => "https://jspaint.app",
    "Wallpapers" => "https://wallhaven.cc/",
    "GUI design gallery from the 2000s" => "https://guidebookgallery.org/",
    "Another old GUI gallery" => "http://toastytech.com/guis/index.html",
  ],
  "Games" => [
    # games
    "Klondike Solitaire" => "https://freesolitaire.win/",
  ], 
  "Cool Novelty Sites" => [
    "Roam around maps from various 3D games in your browser" => "https://noclip.website/",
  ],
  "Misc Tech Related" => [
    # misc tech related
    "Bliss OS" => "https://blissos.org/",
    "Web Design Museum" => "https://www.webdesignmuseum.org/",
    "Base16 colour palette gallery" => "https://tinted-theming.github.io/base16-gallery/",
  ],
);

$galleryImages = array(
  "art24.webp",
  "art23.webp",
  "art22.webp",
  "art21.webp",
  "art20.webp",
  "art19.webp",
  "art18.webp",
  "art17.webp",
  "art16.webp",
  "art15.webp",
  "art14.webp",
  "art13.webp",
  "art12.webp",
  "art11.webp",
  "art10.webp",
  "art09.webp",
  "art08.webp",
  "art07.webp",
  "art06.webp",
  "art05.webp",
  "art04.webp",
  "art03.webp",
  "art02.webp",
  "art01.webp",
);

$navbarLinks = array(
  "Home" => "index.php",
  "About Me" => "index.php?nav=About+Me",
  "Bookmarks" => "index.php?nav=Bookmarks",
  "Technology" => "index.php?nav=Technology",
  "Services" => "index.php?nav=Services",
  "Blog" => "index.php?nav=Blog",
  "Art Gallery" => "index.php?nav=Gallery"
);

$socialLinks = array(
  "Twitter" => "https://twitter.com/yazoink",
  "Github" => "https://github.com/yazoink",
  "Scratch" => "https://scratch.mit.edu/users/yazoink",
  "Odysee" => "https://odysee.com/@yazoink:c"
);
?>
