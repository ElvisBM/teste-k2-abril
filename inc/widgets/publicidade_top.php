<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function publicidade_top_widgets_init() {

	register_sidebar( array(
		'name'          => 'Publicidade Top',
		'id'            => 'publicidade_top',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'publicidade_top_widgets_init' );