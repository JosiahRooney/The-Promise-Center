<?php

add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js' );
  wp_enqueue_script( 'jquery-sidr-min-js', get_template_directory_uri() . '/assets/js/vendor/jquery.sidr.min.js', array('jquery') );

  wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome-min-css', get_template_directory_uri() . '/assets/css/vendor/font-awesome.min.css' );
  wp_enqueue_style( 'sidr-min-css', get_template_directory_uri() . '/assets/css/vendor/jquery.sidr.dark.min.css' );
  wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css' );
}
