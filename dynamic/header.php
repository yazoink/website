<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8' />
  <link rel="stylesheet" href="style/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-site-verification" content="8-DfXBAoPKJYiUCQ3bt_r-fW2nfWHW89GkQTomLycuY" />
  <title>&#128924; yazoink &#128924;</title>
  <?php
  if (array_key_exists('nav', $_GET) && $_GET['nav'] == 'Services') {
    echo "<script src='https://code.jquery.com/jquery-3.5.1.js'></script>";
  } 
  ?>
</head>
