<?php
/**
 * Aumoraes-profile Theme
 *
 * Seguimos o padrão de desenvolvimendo criado pelo WordPress:
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/
 *
 * @package WordPress
 * @subpackage aumoraes-profile
 */

 /**
	* Register Values to translate in all the site managed in admin polylang
	* Add here all the word and frases to translate.
	*/



pll_register_string( 'about', 'about', 'menu' );

pll_register_string( 'description', 'description', 'header' );
pll_register_string( 'header-desktop', 'header-desktop', 'header' );
pll_register_string( 'header-mobile', 'header-mobile', 'header' );

pll_register_string( 'resume', 'resume', 'About' );
pll_register_string( 'resume_link', 'resume_link', 'About' );
pll_register_string( 'experience', 'experience', 'experience' );
pll_register_string( 'current', 'current', 'experience' );


// add_action( 'wp_head', 'get_current_language' );
//
// function get_current_language() {
//
// 	$translations = pll_current_language( 'slug' );
// 	set_background($translations);
//
// }



/**
 * Adiciona os styles e scripts necessários para o tema
 */
// function set_background($translations = "br") {
// 	if( $translations === 'en'){
// 		$translations = 'us';
// 	}
// 	wp_enqueue_style( 'style-background-image-'.$translations, get_template_directory_uri() . '/assets/css/'.$translations.'_background.css' );
// }

// Our filter callback function
// function skoob_book( ) {
// 		return "<script type='text/javascript' src='https://www.skoob.com.br/widget/estante/68202/4574466/'> </script>";
// }
// add_filter( 'skoob_filter', 'skoob_book');
//
// $value = apply_filters( 'skoob_filter', 'skoob_book' );
// echo $value;


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
add_action( 'widgets_init', 'aumoraes_widgets_init' );

show_admin_bar( false );
