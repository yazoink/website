<?php

$email = "yazoink@firemail.cc";

$navbarLinks = array(
  "Home" => "/",
  "About Me" => "/?nav=about-me",
  "Bookmarks" => "/?nav=bookmarks",
  "Technology" => "/?nav=technology",
  "Services" => "/?nav=services",
  "Blog" => "/?nav=blog",
  "Art Gallery" => "/?nav=gallery"
);

$socialLinks = array(
  "Twitter" => "https://twitter.com/yazoink",
  "Github" => "https://github.com/yazoink",
  "Scratch" => "https://scratch.mit.edu/users/yazoink",
  "Odysee" => "https://odysee.com/@yazoink:c"
);

$jsonStr = file_get_contents('blog/blog.json');
$blogData = json_decode($jsonStr, true);

$statusUpdates = array(
  [
    "status" => "I will write another blog post eventually. Potential upcoming posts: an in-depth list of my favourite songs, my favourite book passages/quotes, hacking my Kindle, recipes(?)",
    "date" => "7/10/2025"
  ],
  [
    "status" => "This is basically twitter",
    "date" => "7/10/2025"
  ]
);

$changelog = array(
  "23/11/2025" => [
    "Add Nausea by Jean-Paul Sartre to favourite books",
    "Add Francis Bacon and Gustave Dore to favourite artists"
  ],
  "8/10/2025" => [
    "Add \"Been Down So Long It Looks Like Up to Me\" to favourite books",
    "Visual improvements",
    "Reformat blog code"
  ],
  "7/10/2025" => [
    "Misc formatting and optimisations",
    "Add status updates",
    "Add favicon",
    "Fix incompatible unicode symbols",
    "Tweak CSS",
    "Fix RSS and add feeds for individual tags, status updates, and site changelog",
    "Improve gallery function",
    "Improve blog function",
    "Add \"Performance (1970)\" to favourite movies",
    "Create changelog"
  ],
);

$services = array(
  "4get (search engine)" => "https://4get.yazo.ink",
  "SafeTwitch (Twitch frontend)" => "https://safetwitch.yazo.ink",
  "Redlib (Reddit frontend)" => "https://redlib.yazo.ink",
  "AnonymousOverflow (Stack Overflow frontend)" => "https://overflow.yazo.ink",
  "Quetre (Quora frontend)" => "https://quetre.yazo.ink",
  "Rimgo (Imgur frontend)" => "https://rimgo.yazo.ink",
);

$featuredBlogPosts = array(
  "Idiot Installs Etterna on NixOS",
  "Tunneling My Homelab"
);

$bookmarks = array(
  "Link Directories" => [
    // link directories
    "1 MB Club" => "https://1mb.club/",
    "sizeof(cat)'s links" => "https://sizeof.cat/links/",
    "SpaceHey Reclaiming the Internet Links" => "https://forum.spacehey.com/topic?id=3221",
    "Active vintage websites" => "https://www.404pagefound.com/",
  ],
  "File Directories" => [
    // file directories
    "Text Files" => "http://www.textfiles.com/",
  ],
  "Resources" => [
    // resources
    "Unicode Symbols" => "https://symbl.cc/en/",
    "Arch Linux Wiki" => "https://wiki.archlinux.org/",
    "OSX-KVM" => "https://github.com/kholia/OSX-KVM",
    "Recipe site made by me" => "https://recipes.yazo.ink",
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
    // graphics
    "Geocities GIF archive" => "https://gifcities.org/",
    "Browser clone of the original MSPaint" => "https://jspaint.app",
    "Wallpapers" => "https://wallhaven.cc/",
    "GUI design gallery from the 2000s" => "https://guidebookgallery.org/",
    "Another old GUI gallery" => "http://toastytech.com/guis/index.html",
  ],
  "Games" => [
    // games
    "Klondike Solitaire" => "https://freesolitaire.win/",
  ],
  "Cool Novelty Sites" => [
    "Roam around maps from various 3D games in your browser" => "https://noclip.website/",
  ],
  "Misc Tech Related" => [
    // misc tech related
    "Bliss OS" => "https://blissos.org/",
    "Web Design Museum" => "https://www.webdesignmuseum.org/",
    "Base16 colour palette gallery" => "https://tinted-theming.github.io/base16-gallery/",
  ],
);

$books = array(
  "Been Down So Long It Looks Like Up to Me - Richard Farina" => "https://www.goodreads.com/book/show/418.Been_Down_So_Long_It_Looks_Like_Up_to_Me",
  "Junky - William S. Burroughs" => "https://www.goodreads.com/book/show/23940.Junky",
  "Naked Lunch - William S. Burroughs" => "https://www.goodreads.com/book/show/7437.Naked_Lunch",
  "On the Road - Jack Kerouac" => "https://www.goodreads.com/book/show/70401.On_the_Road",
  "The Doors of Perception and Heaven and Hell - Aldous Huxley" => "https://www.goodreads.com/book/show/5128.The_Doors_of_Perception_Heaven_and_Hell",
  "The Catcher in the Rye - J.D. Salinger" => "https://www.goodreads.com/book/show/5107.The_Catcher_in_the_Rye",
  "High Fidelity - Nick Hornby" => "https://www.goodreads.com/book/show/285092.High_Fidelity",
  "Nausea - Jean-Paul Sartre" => "https://www.goodreads.com/book/show/298275.Nausea",
  "The Hitch Hiker's Guide to the Galaxy - Douglas Adams" => "https://www.goodreads.com/book/show/11.The_Hitchhiker_s_Guide_to_the_Galaxy",
  "The R. Crumb Handbook - R. Crumb & Peter Poplaski" => "https://www.goodreads.com/book/show/61344.The_R_Crumb_Handbook"
);

$albums = array(
  "20 Beat Classics - Georgie Fame" => "https://www.youtube.com/playlist?list=OLAK5uy_kmNLr1Xzy6azByfdu91hHppOHfqGiwhGE",
  "777 - Tonetta" => "https://www.youtube.com/watch?v=GsNtRTxU0wU",
  "After the Gold Rush - Neil Young" => "https://www.youtube.com/playlist?list=OLAK5uy_l61knFHCT9-JvA88E172MSuaGZupcQwSc",
  "A Hard Day's Night - The Beatles" => "https://www.youtube.com/playlist?list=OLAK5uy_nMqp7mAgZ_A_Lx6aLe1329rrTNzemZkT4",
  "Aladdin Sane - David Bowie" => "https://www.youtube.com/playlist?list=OLAK5uy_n6SqLC8xrc7tS5Cw9pDr7ECauksk3hgtQ",
  "All the Young Dudes - Mott the Hoople" => "https://www.youtube.com/playlist?list=OLAK5uy_lmgRSmotGFRhudSybSHL3GULJqS28B6BQ",
  "Anastasia I'm So Happy I Could Scream - Gjallarhornit" => "https://www.youtube.com/playlist?list=PLP3o3IGp_iSKo-s3B88x8SnE5dOJvA6m9",
  "Antics - Interpol" => "https://www.youtube.com/playlist?list=OLAK5uy_kN29zlJYjcdakakaGHYX3MSoFOHNKQMZw",
  "Apostrophe - Frank Zappa" => "https://www.youtube.com/playlist?list=OLAK5uy_mug91Ew3YKUFXp5wOeFKayvtsdrg82U8s",
  "Buffalo Springfield Again - Buffalo Springfield" => "https://www.youtube.com/playlist?list=OLAK5uy_mvgscNVoHiGcX-bXW7aNxbW2yMFdvTeGQ",
  "Buffalo Springfield - Buffalo Springfield" => "https://www.youtube.com/playlist?list=OLAK5uy_nPn6mqSZ0x3WHTj-_-cE6nobsD1wPX-tM",
  "Closing Time - Tom Waits" => "https://www.youtube.com/playlist?list=OLAK5uy_neKJhoE9IdbhQoGuAI22y4ccDrbdqJc1k",
  "Cold Fact - Rodriguez" => "https://www.youtube.com/playlist?list=OLAK5uy_kJoM8fDbg2I5aywnlQNufWsFUEG-yX0ks",
  "Death of a Ladies' Man - Leonard Cohen" => "https://www.youtube.com/playlist?list=OLAK5uy_l5nsne133tb-VQY800OX1ete-IabXn7mI",
  "Deja Vu - Crosby, Stills, Nash & Young" => "https://www.youtube.com/playlist?list=OLAK5uy_lfvC2XgY4SmWZDvvx-y3fJZ7btdnuPMkY",
  "Delilah - Gjallarhornit" => "https://www.youtube.com/playlist?list=OLAK5uy_kqhsfayA06yKy28X7-hqT2WV_7dVlfibc",
  "Electric Warrior - T. Rex" => "https://www.youtube.com/playlist?list=OLAK5uy_kbRP15RVrQOmxMXMjJE0aI-yFbHftL7kQ",
  "Fantasia - Gjallarhornit" => "https://www.youtube.com/playlist?list=OLAK5uy_mwwPNGq4xNjmsE2cn7UjMYVGNShbPlyek",
  "Fifth Dimension - The Byrds" => "https://www.youtube.com/playlist?list=OLAK5uy_kEcqBYNN5O2zR04cEkuxKaU4WG_WasiWQ",
  "Guero - Beck" => "https://www.youtube.com/playlist?list=OLAK5uy_lR5xemcvGf7ptD9hC4XFLARDPHRxcIsLk",
  "Hallowed Ground - Violent Femmes" => "https://www.youtube.com/playlist?list=OLAK5uy_l0VdJBTSDMXoWSNykCClcT8w0Qz_-B4dg",
  "Harvest - Neil Young" => "https://www.youtube.com/playlist?list=OLAK5uy_nIvoZh857_xU4KxhpThqHPykcJMBM_6FA",
  "Hunky Dory - David Bowie" => "https://www.youtube.com/playlist?list=OLAK5uy_l3dApVDHu4bSmCeYdmC2KoSVaTwS_cpd0",
  "I'm Your Man - Leonard Cohen" => "https://www.youtube.com/playlist?list=OLAK5uy_lD43sQBFt949GAYyNubpu6ZR7qLc-NiLk",
  "Lay it Down - Cowboy Junkies" => "https://www.youtube.com/playlist?list=OLAK5uy_mMPbNBLWfUdOagrBcR5vhSkNpatnFmqAM",
  "Let's Stick Together - Bryan Ferry" => "https://www.youtube.com/playlist?list=OLAK5uy_mLYliT83u8HgzcX_zqvAuHD7YqI_CdNFQ",
  "Magic Box - The Loved Ones" => "https://www.youtube.com/playlist?list=OLAK5uy_nXSzbCPDUUOy4PqbGD7kCLj9A0ulSIiGI",
  "Mellow Gold - Beck" => "https://www.youtube.com/playlist?list=OLAK5uy_nYskBtt7NANu5otbOcvxplb9_Pq9Q0L7k",
  "Modern Guilt - Beck" => "https://www.youtube.com/playlist?list=OLAK5uy_lUMUqc9yL2Rb2sifEdM2uhKii4vLGssyk",
  "Mutations - Beck" => "https://www.youtube.com/playlist?list=OLAK5uy_kQEyhUQy8-wiIlIqlrOmxvKsiy8ZLJe6s",
  "Odelay - Beck" => "https://www.youtube.com/playlist?list=OLAK5uy_msqE7SnQagEUphN4aLMfXu-QaIYNGDXVk",
  "Pinups - David Bowie" => "https://www.youtube.com/playlist?list=OLAK5uy_luhw5GNjgNlwTw8BFyibveZ_AQLhUGv-Y",
  "Pol Pot's Playhouse - Pol Pot's Playhouse" => "https://www.youtube.com/watch?v=-nMYiS8yHRQ&pp=ygUdcG9sIHBvdHMgcGxheWhvdXNlIGZ1bGwgYWxidW0%3D",
  "Pol Pot's Pleasure Penthouse - The Brian Jonestown Massacre" => "https://www.youtube.com/playlist?list=PLtdu3jbN9qJmlwkszoEv2SZkbHQKvHE69",
  "Pure Guava - Ween" => "https://www.youtube.com/playlist?list=OLAK5uy_nZM0iFLZdh1cjxvrcZiLPWdUG6NZrCxIs",
  "Rain Dogs - Tom Waits" => "https://www.youtube.com/playlist?list=OLAK5uy_lriYKhzEkLZzmpxItLLb6pCpCL2WFVNgs",
  "Santana - Gjallarhornit" => "https://www.youtube.com/playlist?list=OLAK5uy_nRwDIIgm-qAXa4igIPOwqCYYxI11iSxug",
  "Station to Station - David Bowie" => "https://www.youtube.com/playlist?list=OLAK5uy_ls3yi6oP3ONu16zq2MJDmKYu6ArOJUh2A",
  "Tallulah - Gjallarhornit" => "https://www.youtube.com/playlist?list=OLAK5uy_n4FLm2XfDVkheMQjpM7x_bd0h5xggBxrU",
  "The Honeymoon Is Over - The Cruel Sea" => "https://www.youtube.com/playlist?list=OLAK5uy_m15dPbl2kbOlHu9da7CAkxrGDQBD6hD1Q",
  "The Information - Beck" => "https://www.youtube.com/playlist?list=OLAK5uy_klWaftzmbpEN92KVU8hs4AMNxUI1J7SKM",
  "The Kinks - The Kinks" => "https://www.youtube.com/playlist?list=OLAK5uy_mJ_E6thrz5Sn_Owrg4hm9g6MNS-d_PzTs",
  "The Modern Lovers - The Modern Lovers" => "https://www.youtube.com/playlist?list=OLAK5uy_kbSSB4NkDvPozTOpn3k3g6OrjR5oaMQ0Y",
  "The Pleasure of Your Company - Models" => "https://www.youtube.com/playlist?list=OLAK5uy_nUIh6LrcvqRymKh0w54XFxsihHuhtoOQY",
  "The Pretty Things - The Pretty Things" => "https://www.youtube.com/watch?v=6XWtgoTHr3I",
  "The Rise and Fall of Ziggy Stardust and the Spiders from Mars - David Bowie" => "https://www.youtube.com/watch?v=2ObjtVdsV3I&list=OLAK5uy_lLqrDSsxVNgt7dqhjvnHtKh0PAHIDw5Lw",
  "These Foolish Things - Bryan Ferry" => "https://www.youtube.com/playlist?list=OLAK5uy_m48YkOmoF8UBXdjTGNf9BEpsirlJxwrsM",
  "The Songs of Leonard Cohen - Leonard Cohen" => "https://www.youtube.com/watch?v=svitEEpI07E&list=PLiN-7mukU_RGWHfkLE_cV_CLwqyf7xIRg",
  "The Velvet Underground & Nico - The Velvet Underground" => "https://www.youtube.com/watch?v=kSC_IoD-Bxw&list=PLo4LeeLtaeIt4bjN3lAvK9iMHm3rm_V_k",
  "Turn on the Bright Lights - Interpol" => "https://www.youtube.com/playlist?list=OLAK5uy_kOru3lgSiY4Z9831a4KWGzSNrjFcLU-c8",
  "Чернозём - Паводок" => "https://www.youtube.com/watch?v=WNb3z_zEGhM&list=PLjNZ8KsnL6QIdOFPH_d-lWI58KpLQ7MTm",
);

$shows = array(
  "Black Books" => "https://www.imdb.com/title/tt0262150/",
  "Monty Python's Flying Circus" => "https://www.imdb.com/title/tt0063929/",
  "Serial Experiments Lain" => "https://www.imdb.com/title/tt0500092/",
  "Severance" => "https://www.imdb.com/title/tt11280740/",
  "The IT Crowd" => "https://www.imdb.com/title/tt0487831/",
  "The Mighty Boosh" => "https://www.imdb.com/title/tt0416394/",
  "The Sopranos" => "https://www.imdb.com/title/tt0141842/",
  "The Young Ones" => "https://www.imdb.com/title/tt0083505/",
  "Twin Peaks" => "https://www.imdb.com/title/tt0098936/",
);

$movies = array(
  "Blue Velvet (1986)" => "https://www.imdb.com/title/tt0090756/",
  "Head (1968)" => "https://www.imdb.com/title/tt0063049/",
  "Naked Lunch (1991)" => "https://www.imdb.com/title/tt0102511/",
  "Perfect Blue (1997)" => "https://www.imdb.com/title/tt0156887/",
  "Performance (1970)" => "https://www.imdb.com/title/tt0066214/",
  "The Deer Hunter (1978)" => "https://www.imdb.com/title/tt0077416/",
  "Twin Peaks Fire Walk with Me (1992)" => "https://www.imdb.com/title/tt0105665/",
  "Waking Life (2001)" => "https://www.imdb.com/title/tt0243017/",
  "Yellow Submarine (1968)" => "https://www.imdb.com/title/tt0063823/",
);
