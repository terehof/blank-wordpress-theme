<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Changing logo in admin (top left corner)
 **/
//add_action('add_admin_bar_menus', 'reset_admin_wplogo');
//function reset_admin_wplogo(  ){
//	remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 ); // удаляем стандартную панель (логотип)
//	add_action( 'admin_bar_menu', 'my_admin_bar_wp_menu', 10 ); // добавляем свою
//}
//function my_admin_bar_wp_menu( $wp_admin_bar ) {
//	$wp_admin_bar->add_menu( array(
//		'id'    => 'wp-logo',
//		'title' => '<img style="width: 30px; height: 30px; margin-top: 1px;" src="'. get_bloginfo('template_directory') .'/assets/img/logo.png" alt="" >',
//		'href'  => home_url('/about/'),
//		'meta'  => array(
//			'title' => 'PalisadeRadio',
//		),
//	) );
//}

/**
 * Changing logo on admin login page
 **/
//add_action('login_head', 'my_custom_login_logo');
//function my_custom_login_logo(){
//	echo '<style type="text/css">
//	h1 a { height: 144px !important; background-image:url('.get_bloginfo('template_directory').'/assets/img/logo.png) !important; width: 100% !important; background-size: contain !important; background-position: center !important;}
//	</style>';
//}
