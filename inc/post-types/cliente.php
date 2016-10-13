<?php

function cliente_post_type() {

	$labels = array(
		'name'                => _x( 'Clientes', 'Post Type General Name', 'k2-teste-abril' ),
		'singular_name'       => _x( 'Cliente', 'Post Type Singular Name', 'k2-teste-abril' ),
		'menu_name'           => __( 'Clientes', 'k2-teste-abril' ),
		'name_admin_bar'      => __( 'Clientes', 'k2-teste-abril' ),
		'parent_item_colon'   => __( 'Parent Cliente:', 'k2-teste-abril' ),
		'all_items'           => __( 'All Clientes', 'k2-teste-abril' ),
		'add_new_item'        => __( 'Add New Cliente', 'k2-teste-abril' ),
		'add_new'             => __( 'Add New', 'k2-teste-abril' ),
		'new_item'            => __( 'New Cliente', 'k2-teste-abril' ),
		'edit_item'           => __( 'Edit Cliente', 'k2-teste-abril' ),
		'update_item'         => __( 'Update Cliente', 'k2-teste-abril' ),
		'view_item'           => __( 'View Cliente', 'k2-teste-abril' ),
		'search_items'        => __( 'Search Cliente', 'k2-teste-abril' ),
		'not_found'           => __( 'Not found', 'k2-teste-abril' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'k2-teste-abril' ),
	);
	$args = array(
		'label'               => __( 'Cliente', 'k2-teste-abril' ),
		'description'         => __( 'Cliente', 'k2-teste-abril' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'Cliente' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'Cliente', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cliente_post_type', 0 );