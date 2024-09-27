<script>
$(document).ready(function(){
  setInterval(function(){
    $("#refresh").load(window.location.href + " #refresh" );
    console.log('refresh');
  }, 20000);
});
</script>
<h1>Services...</h1>
<p>I host a few instances of open source frontends for various popular websites. You can use addons like <a href='https://libredirect.github.io/' target='_blank'>Libredirect</a> to automatically redirect links from the original sites to the alternatives.</p>
<br />
<div id='refresh'>
<?php
printServices($services);
?>
</div>
<br />
