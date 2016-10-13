<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function mais_acessado_top_widgets_init() {

	register_sidebar( array(
		'name'          => 'Mais Acessados Top',
		'id'            => 'mais_acessado_top',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'mais_acessado_top_widgets_init' );