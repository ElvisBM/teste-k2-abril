<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function busca_menu_top_widgets_init() {

	register_sidebar( array(
		'name'          => 'Busca Menu Top',
		'id'            => 'busca_menu_top',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'busca_menu_top_widgets_init' );