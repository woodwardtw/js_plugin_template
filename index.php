<?php 
/*
Plugin Name: SUPER UNIQUE JS PLUGIN
Plugin URI:  https://github.com/
Description: For stuff that's magical
Version:     1.0
Author:      YOU!!
Author URI:  http://YOURSITE.COM
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );//helps keep out bad people


add_action('wp_enqueue_scripts', 'prefix_load_scripts');

function previx_load_scripts() {                           
    $deps = array('jquery');// you can use jquery with this just remember to use jQuery instead of $ (or alias it)
    $version= '1.0'; 
    $in_footer = true;//loads in footer    
    wp_enqueue_script('super-unique-main-js', plugin_dir_url( __FILE__) . 'js/super-unique-title-main.js', $deps, $version, $in_footer); 
}