<?php
function theme_styles(){
  wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/stylesheets/css/bootstrap.css');
  wp_enqueue_style('CSS', get_template_directory_uri() . '/stylesheets/main.min.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

register_nav_menus(
  array(
    'Primary' => __('Primary Menu')
  )
);

