<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/*== Debug fuctions ==*/
/**
 * Debug function print_r
 *
 * @param mixed $var
 * @param boolean $die
 */
function pr( $var, $die = true ) {
	echo '<pre>';
	print_r( $var );
	echo '</pre>';
	if ( $die ) {
		die();
	}
}
/**
 * Debug function var_dump
 *
 * @param mixed $var
 * @param boolean $die
 */
function vd( $var, $die = true ) {
	echo '<pre>';
	var_dump( $var );
	echo '</pre>';
	if ( $die ) {
		die();
	}
}