<?php

// Register Custom Post Types
function custom_post_types() {
	// Team
	$labels_team = array(
		'name'                  => 'Key People',
		'singular_name'         => 'Key People',
		'menu_name'             => 'Key People',
		'add_new_item'          => 'Add New',
		'add_new'               => 'Add New',
		'new_item'              => 'New',
		'edit_item'             => 'Edit',
		'update_item'           => 'Update',
		'view_item'             => 'View',
		'view_items'            => 'View All',
	);
	$rewrite_team = array(
		'slug'                  => 'team',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args_team = array(
		'label'                 => 'Key People',
		'description'           => 'Post Type Description',
		'labels'                => $labels_team,
		'supports'              => array(
			'title',
			'editor',
			'thumbnail',
		),
		'taxonomies'  => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite_team,
		'capability_type'       => 'page',
	);

//	register_post_type( 'team', $args_team );
	// end Team


}
add_action( 'init', 'custom_post_types', 0 );
