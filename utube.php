<?php
/*
Plugin Name: Utube
Plugin URI: https://wordpress.org/plugins/
Description: Display Youtube Sub Button and Count
Version: 0.1.0
Author: Andry Mahany
Author URI: https://wordpress.org/plugins
*/

//Exit if accessed directly
if(!defined('ABSPATH')) {
  exit;
}

//Load scripts
require_once(plugin_dir_path(__FILE__). '/includes/utube-scripts.php');

//Load class
require_once(plugin_dir_path(__FILE__). '/includes/utube-class.php');

//Register widget
function register_utube() {
  register_widget('Utube_Widget');
}

//Hook in function
add_action('widgets_init', 'register_utube');
