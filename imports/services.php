<?php
function makeServicesBox($services) {
  $content = "<ul>";
  foreach ($services as $description => $url) {
      $content .= "<li><a href='$url' target='_blank'>$description</a></li>";
  }
  $content .= "
  </ul><br>
  <p>(don't rely on them being too stable lol)</p>";
  return makeBox(
    "SERVICES",
    $content
  );
}
?>

<h1>Services...</h1>
<br>
<p>I host a few instances of open source frontends for various popular websites. You can use addons like <a href='https://libredirect.github.io/' target='_blank'>Libredirect</a> to automatically redirect links from the original sites to the alternatives.</p>
<br>
<p>These are all hosted on my home server, which you can find out more about <a href='<?php echo $baseUrl; ?>?nav=Technology'>here</a>.</p>
<br>
  <div class="box-container">
  <?php 
  echo makeServicesBox($services);
  ?>
</div>
