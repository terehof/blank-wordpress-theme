<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directl
}


function load_style_script () {
	wp_enqueue_script('vendor' , get_template_directory_uri() . '/assets/js/vendor.js',  array(), false, true);
	wp_enqueue_script('main' , get_template_directory_uri() . '/assets/js/main.js',  array(), false, true);
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}
/***
 * load styles and scripts
 **/
add_action('wp_enqueue_scripts', 'load_style_script');

