<?php
if (isset($_GET["url"])) {
    $re = "/^\//";
    $url = preg_replace($re, "", $_GET["url"]);
    header('Content-Disposition: attachment; filename="'. basename($url) . '";');
    readfile($url);
}

exit;
?>
