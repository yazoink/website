<?php
$services = array(
  "Invidious (Youtube frontend)" => "$invidiousUrl",
  "4get (search engine)" => "https://4get.$domain",
  "SafeTwitch (Twitch frontend)" => "https://safetwitch.$domain",
  "Redlib (Reddit frontend)" => "https://redlib.$domain",
  "AnonymousOverflow (Stack Overflow frontend)" => "https://overflow.$domain",
  "Quetre (Quora frontend)" => "https://quetre.$domain",
  "Rimgo (Imgur frontend)" => "https://rimgo.$domain",
);
?>

<h1>Technology...</h1>
<p>What I use/own/host/etc.</p>
<br />
<h2>This Server</h2>
<p>This website is currently being hosted on my home server which consists of two machines running NixOS tunneled to a Linode 2 GB VPS.</p>
<br />
<p>I also host a few instances of open source frontends for various popular websites. You can use addons like <a href='https://libredirect.github.io/' target='_blank'>Libredirect</a> to automatically redirect links from the original sites to the alternatives.</p>
<br />
<p>I'm currently hosting:</p>
<?php
printUrlList($services, true);
?>
<br />
<h3>Server #1</h3>
<p>This is the machine I host my Nextcloud server, Jellyfin server, Pi-hole and most of my docker containers on.</p>
<p><b>CPU:</b> Intel Core i5-8400</p>
<p><b>RAM:</b> 8 GB DDR4</p>
<p><b>GPU:</b> Nvidia GTX 750</p>
<p><b>Drives:</b> There's like 4 of them I'll make a list later</p>
</br>
<h3>Server #2</h3>
<p>This is the server hosting this website! I also use it to fuck around with Ollama although it's pretty slow since the GPU is fairly old.</p>
<p><b>CPU:</b> Intel Core i5-8400</p>
<p><b>RAM:</b> 16 GB DDR4</p>
<p><b>GPU:</b> Nvidia GTX 750 ti</p>
<p><b>Drives:</b> There's like 5 of them I'll make a list later</p>
</br>
<h2>My Daily Drivers</h2>
<h3>Laptop</h3>
<p>My current laptop is a ThinkPad T430 I rescued from a scrap pile. I have the <a href='https://github.com/merge/skulls'>Skulls</a> Coreboot image installed on it and I've done a variety of other upgrades.</p>
<p><b>OS:</b> NixOS</p>
<p><b>CPU:</b> Intel Core i7-3632QM</p>
<p><b>RAM:</b> 16 GB DDR3</p>
<p><b>Drives:</b> 1 TB SATA SSD and a 250(?) GB NVME SSD in the ExpressCard slot</p>
<br />
<h3>Desktop</h3>
<p><b>OS:</b> Arch Linux (NixOS when I get around to it)</p>
<p><b>CPU:</b> AMD Ryzen 5 5600</p>
<p><b>CPU:</b> AMD Radeon RX 6600</p>
<p><b>RAM:</b> 16 GB DDR4</p>
<p><b>Drives:</b> like a lot</p>
<br />
<h3>Phone</h3>
<p><b>Model:</b> Google Pixel 6</p>
<p><b>OS:</b> GrapheneOS</p>
<p><b>Launcher:</b> Kvaesitso</p>
<br />
<h2>My Favourite Software</h2>
<p><b>OS:</b> NixOS</p>
<p><b>WM/DE:</b> Hyprland</p>
<p><b>Terminal:</b> Alacritty</p>
<p><b>IDE:</b> I go between Neovim and Vscodium</p>
<p><b>Browser:</b> Firefox with Arkenfox user.js</p>
<p><b>Shell:</b> ZSH</p>
<br />
