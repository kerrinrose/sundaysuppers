<?php

function ss_theme_styles() {

  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
}

add_action( 'wp_enqueue_scripts', 'ss_theme_styles');

function ss_theme_js() {

  wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', '', '', true);
  wp_enqueue_script('modernizer.js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false);
}

add_action('wp_enqueue_scripts', 'ss_theme_js');

function register_my_menus() {

  register_nav_menus(

    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'recipe', 300, 300, true );

 ?>
