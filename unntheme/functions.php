<?php
  function theme_assets() {
    wp_enqueue_script( 'script.js', get_template_directory_uri() . '/assets/js/main.bundle.js');
    wp_register_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css' );
  }

  add_action('wp_enqueue_scripts', 'theme_assets');
?>