<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>

  <div class="container text-center">
    <a href="#" class="navbar-brand"><h2><?php echo get_bloginfo('name'); ?></h2></a>
  </div>

  <nav class="navbar navbar-expand-md">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php

        $header = array(
          'container' => 'ul',
          'menu_class' => 'navbar-nav mx-auto',
          'container_class' => 'navbar-nav mx-auto',
          'theme_location' => 'Primary'
        );

        wp_nav_menu($header);

        ?>

      </div>
    </div>
  </nav>
