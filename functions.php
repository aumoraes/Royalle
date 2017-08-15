<?php
/**
 * Mokaeventos
 *
 * Seguimos o padrão de desenvolvimendo criado pelo WordPress:
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/
 *
 * @package WordPress
 * @subpackage mokaeventos
 */




/**
 * Register our sidebars and widgetized areas.
 *
 */
function aumoraes_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'right_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
//add_action( 'widgets_init', 'aumoraes_widgets_init' );


/**
 * Registra os menus do site
 */
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu-1' => __( 'Header Menu 1' ),
			'header-menu-2' => __( 'Header Menu 2' ),
		)
	);
}
add_action( 'init', 'register_my_menus' );

show_admin_bar( false );
