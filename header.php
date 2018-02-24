<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-md">
  <div class="container">
    <a href="#" class="navbar-brand"><?php echo get_bloginfo('name'); ?></a>
    <?php

    $header = array(
      'container' => 'ul',
      'menu_class' => 'navbar-nav ml-auto',
      'container_class' => 'navbar-nav ml-auto',
      'theme_location' => 'Primary'
    );

    wp_nav_menu($header);

    ?>
  </div>
</nav>
