<?php
if (isset($_GET["url"])) {
    $url = $_GET["url"];
    header('Content-Disposition: attachment; filename="'. basename($url) . '";');
    readfile($url);
}

exit;
?>
