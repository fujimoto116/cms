<?php
function my_enqueue_styles()
{
  wp_enqueue_style('reset', get_template_directory_uri().'/reset.css', array());
  wp_enqueue_style('style', get_stylesheet_uri(), array('reset'),);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'add_google_fonts');

function add_google_fonts()
{
  wp_enqueue_style(' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap', false);
}