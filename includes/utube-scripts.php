<?php

function utb_add_scripts() {
  //Main CSS
  wp_enqueue_style('utb-main-style', plugins_url(). '/utube/css/style.css');
  //Main JS
  wp_enqueue_script('utb-main-script', plugins_url(). '/utube/js/main.js');
  //Google JS
  wp_register_script('google', 'https://apis.google.com/js/platform.js');
  wp_enqueue_script('google');
}

add_action('wp_enqueue_scripts', 'utb_add_scripts');
