<?php
function makeSpecsBox($image, $specs) {
  $content = "
    <div class='two-column-grid-container'>
      <div class='two-column-grid-container-left'>
        <img src='{$image}' class='content-img tech-img'>
      </div>
      <div class='two-column-grid-container-right tech-specs'>
  ";
  foreach ($specs as $k => $v) {
    $content .= "<p>{$k}: {$v}</p><br>";
  }
  $content .= "</div></div>";
  $specsBox = makeBox("SPECS", $content);
  return $specsBox;
}
?>
<h1>Technology...</h1>
<br>
<p>What I use, and all that.</p>
<br>
<h2>This Server</h2>
<br>
<p>
  This website is currently being hosted on my home server, which consists of an old PC I got for free, and various salvaged storage drives. It's running NixOS, and all the services hosted on it are tunneled to a Linode 2 GB VPS running Alpine Linux. You can read more about
  how I tunnel my services in 
  <a href='/?nav=blog&entry=tunneling-my-homelab' target='_blank'>this blog post</a>.</p>
<br>
<div class="box-container">
<?php
$specs = array(
  "Motherboard" => "Gigabyte B360M H",
  "Processor" => "Intel Core i5-8400",
  "Memory" => "16 GB DDR4",
  "Storage" => "a lot",
);
echo makeSpecsBox("images/technology/server2.webp", $specs);
?>
</div>
<br>
<h2>Daily Drivers</h2>
<br>
<h3>Laptop</h3>
<br>
<p>
  My laptop is a ThinkPad X220, which I found on the side of the road and flashed with Libreboot. Pic is of my old T430 because I can't be bothered taking another photo right now.
</p>
<br>
<div class="box-container">
<?php
$specs = array(
  "Model" => "Libreboot ThinkPad X220",
  "Processor" => "Intel Core i5-2520M",
  "Memory" => "16 GB DDR3",
  "Storage" => "500 GB SSD",
);
echo makeSpecsBox("images/technology/laptop1.webp", $specs);
?>
</div>
<br>
<h3>Desktop</h3>
<br>
<p>It looks a bit dusty in the photo but I do clean it sometimes, I promise.</p>
<br>
<div class="box-container">
<?php
$specs = array(
  "Board" => "MSI B550M PRO-VDH WIFI",
  "Processor" => "AMD Ryzen 5 5600",
  "Graphics" => "AMD Radeon RX 6600",
  "Memory" => "16 GB DDR4",
  "Storage" => "a lot",
);
echo makeSpecsBox("images/technology/pc.webp", $specs);
?>
</div>
<br>
<h3>Software</h3>
<br>
<p>
  I run <a href='https://archlinux.org/' target='_blank'>Arch Linux</a> on my laptop and desktop computers,
  with <a href='https://hypr.land' target='_blank'>Hyprland</a> as my window manager. I use my own custom 
  shell, which you can find <a href='https://github.com/yazoink/yzshell' target='_blank'>here</a>.
</p>
<br>
<p><a href='images/technology/rice1.webp' target='_blank'><img class='content-img full-img clickable' src='images/technology/rice1.webp' loading='lazy'></a></p>
<br>
<p><a href='images/technology/rice2.webp' target='_blank'><img class='content-img full-img clickable' src='images/technology/rice2.webp' loading='lazy'></a></p>
<br>
