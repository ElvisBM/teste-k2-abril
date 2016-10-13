<?php

function produto_post_type() {

	$labels = array(
		'name'                => _x( 'Produtos', 'Post Type General Name', 'k2-teste-abril' ),
		'singular_name'       => _x( 'Produto', 'Post Type Singular Name', 'k2-teste-abril' ),
		'menu_name'           => __( 'Produtos', 'k2-teste-abril' ),
		'name_admin_bar'      => __( 'Produtos', 'k2-teste-abril' ),
		'parent_item_colon'   => __( 'Parent Produto:', 'k2-teste-abril' ),
		'all_items'           => __( 'All Produtos', 'k2-teste-abril' ),
		'add_new_item'        => __( 'Add New Produto', 'k2-teste-abril' ),
		'add_new'             => __( 'Add New', 'k2-teste-abril' ),
		'new_item'            => __( 'New Produto', 'k2-teste-abril' ),
		'edit_item'           => __( 'Edit Produto', 'k2-teste-abril' ),
		'update_item'         => __( 'Update Produto', 'k2-teste-abril' ),
		'view_item'           => __( 'View Produto', 'k2-teste-abril' ),
		'search_items'        => __( 'Search Produto', 'k2-teste-abril' ),
		'not_found'           => __( 'Not found', 'k2-teste-abril' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'k2-teste-abril' ),
	);
	$args = array(
		'label'               => __( 'Produto', 'k2-teste-abril' ),
		'description'         => __( 'Produto', 'k2-teste-abril' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'produto' ),
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
	register_post_type( 'Produto', $args );

}

// Hook into the 'init' action
add_action( 'init', 'produto_post_type', 0 );