<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>


<?php

  $header = array(
    'theme_location' => 'Primary'
  );

  wp_nav_menu($header);

?>
