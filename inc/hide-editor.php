<?php

add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
//	$post_id = get_queried_object_id();
	if( !isset( $post_id ) ) return;

	// Hide the editor on a page with a specific page template
	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);

//	if($template_file == 'page-templates/page-home.php'){ // the filename of the page template
//		remove_post_type_support('page', 'editor');
//	}
}