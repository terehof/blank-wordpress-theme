<?php

/** Enqueue scripts, styles **/
require get_template_directory() . '/inc/enqueue-scripts-style.php';

/** AJAX **/
require get_template_directory() . '/inc/ajax.php';

/** Helpers **/
require get_template_directory() . '/inc/helpers.php'; /* TODO: remove when development finished */

/** Hide editor **/
require get_template_directory() . '/inc/hide-editor.php';

/** Branding **/
require get_template_directory() . '/inc/branding.php';




/***
 **  Settings page with ACF
 ***/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'  => 'Theme settings',
		'menu_title'  => 'Theme settings',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));
}
function filter_plugin_updates( $value ) {
	unset( $value->response['advanced-custom-fields-pro/acf.php'] );
	return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );


/***
 * Remove Wordpress info displaying in <head>
 ***/
remove_action('wp_head', 'wp_generator');



