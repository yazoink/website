<h1>Services...</h1>
<br>
<p>I host a few instances of open source frontends for various popular websites. You can use addons like <a href='https://libredirect.github.io/' target='_blank'>Libredirect</a> to automatically redirect links from the original sites to the alternatives.</p>
<br>
<p>These are all hosted on my home server, which you can find out more about <a href='<?php echo $baseUrl; ?>?nav=Technology'>here</a>.</p>
<br>
<?php 
echo "<div class='box'>
    <div class='left-right-container box-heading'>
        <div class='left-right-container-left'>
            <p>SERVICES</p>
        </div>
        <div class='left-right-container-right x-button'><p>X</p></div>
    </div>
    <div class='box-content services'>
    <ul>";
foreach ($services as $description => $url) {
    echo "<li><a href='$url' target='_blank'>$description</a></li>";
}
echo "</ul><br>";
echo "<p>(don't rely on them being too stable lol)</p>";
echo "</div></div>";
?>
