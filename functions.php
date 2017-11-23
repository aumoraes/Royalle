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

wp_enqueue_style( 'style', get_stylesheet_uri() );

// Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );

// Add other useful image sizes for use through Add Media modal
add_image_size( 'thumbnail', 350, 350, true );


// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'thumbnail' => __( 'Thumnail' ),
    ) );
}
show_admin_bar( false );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Subscribe',
		'id'            => 'footer_subscribe_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

  register_sidebar( array(
		'name'          => 'Footer Tags',
		'id'            => 'footer_tags_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
