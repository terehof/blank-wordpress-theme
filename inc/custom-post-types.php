<?php

// Register Custom Post Types

function custom_post_types() {
	// Team
	$args_news = array(
		'label'                 => 'News',
		'labels'                => array(
			'name'                  => 'News',
			'singular_name'         => 'News',
			'menu_name'             => 'News',
			'add_new_item'          => 'Add New',
			'add_new'               => 'Add New',
			'new_item'              => 'New',
			'edit_item'             => 'Edit',
			'update_item'           => 'Update',
			'view_item'             => 'View',
			'view_items'            => 'View All',
		),
		'supports'              => array(
			'title',
			'editor'
		),
//		'taxonomies'  => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => array(
			'slug'                  => 'news',
			'with_front'            => true,
			'pages'                 => false,
			'feeds'                 => false,
		),
		'capability_type'       => 'page',
	);

//	register_post_type( 'news', $args_news );
	// end Team


}
//add_action( 'init', 'custom_post_types', 0 );
