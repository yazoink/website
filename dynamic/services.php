<h1>Services...</h1>
<p>I host a few instances of open source frontends for various popular websites. You can use addons like <a href='https://libredirect.github.io/' target='_blank'>Libredirect</a> to automatically redirect links from the original sites to the alternatives.</p>
<br />
<div class='code-block'>
<code><p>Key:</p>
<p>&emsp;&#10003;: service is up</p>
<p>&emsp;&#10007;: service is down</p>
<p><i>(it's not always accurate but it's close)</i></p></code>
</div>
<br />
<p>I'm currently hosting:</p>
<?php
printUrlListWithStatus($services, true);
?>
<br />
