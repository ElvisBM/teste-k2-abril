<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function publicidade_destaque_home_widgets_init() {

	register_sidebar( array(
		'name'          => 'Publicidade Destaque Home',
		'id'            => 'publicidade_destaque_home',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'publicidade_destaque_home_widgets_init' );