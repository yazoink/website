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
  ],
  "Graphics" => [
    # graphics
    "Geocities GIF archive" => "https://gifcities.org/",
    "Browser clone of the original MSPaint" => "https://jspaint.app",
    "Wallpapers" => "https://wallhaven.cc/",
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
    "Useful sed commands" => "https://www.pement.org/sed/sed1line.txt",
    "Base16 colour palette gallery" => "https://tinted-theming.github.io/base16-gallery/",
    "Terminal colourscheme generator/editor" => "https://terminal.sexy/",
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
  "Hate Street Dialogue - Rodriguez" => "$invidiousUrl/watch?v=vyCnOhW_-2c",
  "burning - gjallarhornit" => "$invidiousUrl/watch?v=_-wkfZIoYI8",
  "I'm Not Like Everybody Else - The Kinks" => "$invidiousUrl/watch?v=aaiNeZaGrH0",
  "Modern World - The Modern Lovers" => "$invidiousUrl/watch?v=23SYApqudTw",
  "lovebug - Owen Adamcik" => "$invidiousUrl/watch?v=nhfwcJ8iz1U",
  "ragtime - garden graves" => "$invidiousUrl/watch?v=rR3iXyMOD90",
  "goodbye/hate - garden graves" => "$invidiousUrl/watch?v=Z07p7aqz04Y",
  "Take You On A Cruise - Interpol" => "$invidiousUrl/watch?v=YbmxUxeW5ag",
  "Roland - Interpol" => "$invidiousUrl/https://inv.yazo.ink/watch?v=_R9Smm9WgQs",
  "The Wanderer - Dion" => "$invidiousUrl/watch?v=SbYa7NBYyRc",
  "Spanish Bee - The Brian Jonestown Massacre" => "$invidiousUrl/watch?v=oImsxgq5BhM",
  "The Sun Shines Down on Me - Daneiel Johnston" => "$invidiousUrl/watch?v=g8WtUXJKXGE",
  "Walking the Cow - Daniel Johnston" => "$invidiousUrl/watch?v=-qgXYvjVNvk",
  "Roadrunner - The Modern Lovers" => "$invidiousUrl/watch?v=iUNXWp4hfhI",
  "Black and Blue - Owen Adamcik" => "$invidiousUrl/watch?v=D89yv6arJPQ",
  "Lonesome Tears - Beck" => "$invidiousUrl/watch?v=zWe6bMVvTzk",
  "Hell Yes - Beck" => "$invidiousUrl/watch?v=z5U9QRiY46I",
  "Dark Star - Beck" => "$invidiousUrl/watch?v=XUE81QHM8G0",
  "The Goin' Gets Tough From The Getgo - Ween" => "$invidiousUrl/watch?v=7053B2Eo2qU",
  "So Many People In The Neighborhood - Ween" => "$invidiousUrl/watch?v=w2A7Us9AMlc",
  "I Got To Put The Hammer Down - Ween" => "$invidiousUrl/watch?v=-LTMt6VmuFU",
  "The Shame of Life - Butthole Surfers" => "$invidiousUrl/watch?v=-ktpjgvnzSc",
  "Waiting For the Bus - Violent Femmes" => "$invidiousUrl/watch?v=XXQhYLaQ3jw",
  "Country Death Song - Violent Femmes" => "$invidiousUrl/watch?v=9iEEJVSgcNY",
  "Tuff Ghost - The Unicorns" => "$invidiousUrl/watch?v=gjnFyk4Rmus",
  "stardust - gjallarhornit" => "$invidiousUrl/watch?v=OIO-D1NpjhE",
  "cantata - gjallarhornit" => "$invidiousUrl/watch?v=_PMqaEjmBsA",
  "betelgeus - gjallarhornit" => "$invidiousUrl/watch?v=ffTm2Q6LFsE",
  "molly rock - gjallarhornit" => "$invidiousUrl/watch?v=uBMd-uTGgHo",
  "junk - gjallarhornit" => "$invidiousUrl/watch?v=YZVIK4NMUHA",
  "cantata - gjallarhornit" => "$invidiousUrl/watch?v=_PMqaEjmBsA",
  "i think this candy is gonna make all my teeth fall out - gjallarhornit" => "$invidiousUrl/watch?v=ANXXrVksI-E",
  "c1183 ad_ the last illuminated manuscript of henry the young king - gjallarhornit" => "$invidiousUrl/watch?v=TxbxEREWoKI",
  "happiness - gjallarhornit" => "$invidiousUrl/watch?v=A7blBhOz6Co",
  "These Foolish Things - Bryan Ferry" => "$invidiousUrl/watch?v=NbSp_xEa3PI",
  "A Hard Rain's A-Gonna Fall - Bryan Ferry" => "$invidiousUrl/watch?v=7zwBHd4kll0",
  "Don't Ever Change - Bryan Ferry" => "$invidiousUrl/watch?v=ceqvdJXDmCo",
  "Sympathy For The Devil - Bryan Ferry" => "$invidiousUrl/watch?v=9amqKbrc_ZY",
  "Casanova - Bryan Ferry" => "$invidiousUrl/watch?v=XSNYggEXK2g",
  "You Go To My Head - Bryan Ferry" => "$invidiousUrl/watch?v=Wl2BSO-ALF4",
  "Somethin' Else - Eddie Cochran" => "$invidiousUrl/watch?v=Hi36ukbbTbw",
  "Mutilated Lips - Ween" => "$invidiousUrl/watch?v=jGSI9qoNjYk",
  "In A Cold Ass Fashion - Beck" => "$invidiousUrl/watch?v=K1dZPeDTGyo",
  "Beercan - Beck" => "$invidiousUrl/watch?v=zVay-RfNGv8",
  "Devils Haircut - Beck" => "$invidiousUrl/watch?v=aa3rBVb3v4g",
  "Soul Suckin' Jerk - Beck" => "$invidiousUrl/watch?v=sdILQwlP_pk",
  "Steal My Body Home - Beck" => "$invidiousUrl/watch?v=SvcqqTzr5mc",
  "Cold Brains - Beck" => "$invidiousUrl/watch?v=R1f6vk4PZ7o",
  "Tropialia - Beck" => "$invidiousUrl/watch?v=ykHnwhorGYg",
  "Boot Hill - Australian Crawl" => "$invidiousUrl/watch?v=rMQGb-KqwIQ",
  "The Boys Light Up - Australian Crawl" => "$invidiousUrl/watch?v=xImwExvyG0o",
  "Delivery Man - The Cruel Sea" => "$invidiousUrl/watch?v=frsBft4xxqc",
  "Black Stick - The Cruel Sea" => "$invidiousUrl/watch?v=8f0_GZ8Wzas",
  "Better Get A Lawyer - The Cruel Sea" => "$invidiousUrl/watch?v=0UnKPSmg3Ec",
  "Delivery Man - The Cruel Sea" => "$invidiousUrl/watch?v=frsBft4xxqc",
  "The Honeymoon Is Over - The Cruel Sea" => "$invidiousUrl/watch?v=6WXeH3PRBUc",
  "Loser - Beck" => "$invidiousUrl/watch?v=YgSPaXgAdzE",
  "Where It's At - Beck" => "$invidiousUrl/watch?v=EPfmNxKLDG4",
  "Delivery Man - The Cruel Sea" => "$invidiousUrl/watch?v=frsBft4xxqc",
  "Momma Left Me - The Fudds" => "$invidiousUrl/watch?v=Q7dFZfdvpvk",
  "Three Beers - The Fudds" => "$invidiousUrl/watch?v=ZmP0sZlRzAE",
  "Sugar Man - Rodriguez" => "$invidiousUrl/watch?v=E90_aL870ao",
  "Rich Folks Hoax - Rodriguez" => "$invidiousUrl/watch?v=e-cAc1AwfAw",
  "Tango Till They're Sore - Tom Waits" => "$invidiousUrl/watch?v=_-IVilR3H20",
  "After the Gold Rush - Neil Young" => "$invidiousUrl/watch?v=gGEhbRvfNS4",
  "Only Love Can Break Your Heart - Neil Young" => "$invidiousUrl/watch?v=364qY0Oz-xs",
  "4 + 20 - Crosby, Stills, Nash and Young" => "$invidiousUrl/watch?v=uXEs8xOtU_Q",
  "Helpless - Crosby, Stills, Nash and Young" => "$invidiousUrl/watch?v=C8LYOyqJE7k",
  "For What It's Worth - Buffalo Springfield" => "$invidiousUrl/watch?v=YVhn1edWaDA",
  "Mr. Soul - Buffalo Springfield" => "$invidiousUrl/watch?v=YVhn1edWaDA",
  "Everydays - Buffalo Springfield" => "$invidiousUrl/watch?v=Q5uqYTCOSsM",
  "I'll Remain As I Am - Tonetta" => "$invidiousUrl/watch?v=watch?v=eP8KhOzErDc",
  "Drugs Drugs Drugs - Tonetta" => "$invidiousUrl/watch?v=liDdir5FBr0",
  "Rock 'N' Roll Is Where I Hide - Dave Graney & The Coral Snakes" => "$invidiousUrl/watch?v=XEOIDNz524w",
  "Horror Movie - Skyhooks" => "$invidiousUrl/watch?v=CtOv4ZBpkW4",
  "Ego (Is Not a Dirty Word) - Skyhooks" => "$invidiousUrl/watch?v=S3-8GzAlWig",
  "Excentrifugal Forz - Frank Zappa" => "$invidiousUrl/watch?v=IglQbP-M7_w",
  "I Hear Motion - Models" => "$invidiousUrl/watch?v=EqizXTUFqWg",
  "Watch Your Mouth - Models" => "$invidiousUrl/watch?v=M9qpQ2CfUKM",
  "All The Young Dudes - Mott the Hoople" => "$invidiousUrl/watch?v=9IqiRY60ZDE",
  "All the Way from Memphis - Mott The Hoople" => "$invidiousUrl/watch?v=PuMOWrRZ0HA",
  "On A Monday - Jimmy Campbell" => "$invidiousUrl/watch?v=f4BVqOF6_uQ",
  "Another Vincent Van Gogh - Jimmy Campbell" => "$invidiousUrl/watch?v=kc2eMrwJPKY",
  "little hornets - gjallarhornit" => "$invidiousUrl/watch?v=kSHxsRUMw7I",
  "mirror mirror - gjallarhornit" => "$invidiousUrl/watch?v=hSsDAk1X5fc",
  "babushka - gjallarhornit" => "$invidiousUrl/watch?v=XBsgTMk4ItU",
  "love - gjallarhornit" => "$invidiousUrl/watch?v=cHqzU9VQyZ8",
  "Fingertips - The Brian Jonestown Massacre" => "$invidiousUrl/watch?v=LimAvLeIaEo",
  "Psychedelic Sunday - The Brian Jonestown Massacre" => "$invidiousUrl/watch?v=BSfc6tDg2W0",
  "Чернозём - МаМаМа" => "$invidiousUrl/watch?v=bszEVwWIaFs",
  "Чернозём - Паводок" => "$invidiousUrl/watch?v=KUnDIrvc7GA",
  "Чернозём - Нет дома" => "$invidiousUrl/watch?v=0R3GKEMAkCE",
  "Соломенные еноты - Человек - забавная скотина" => "$invidiousUrl/watch?v=Bcjy_P79v94",
  "Leonard Cohen - Jazz Police" => "$invidiousUrl/watch?v=j7YebrCuqsU",
  "Leonard Cohen - So Long, Marianne" => "$invidiousUrl/watch?v=3XzAjfwQtvM",
);
?>
