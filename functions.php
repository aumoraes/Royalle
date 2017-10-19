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
// add_image_size( 'tamanho1', 375, 250, true );
// add_image_size( 'tamanho2', 480, 320, true );
// add_image_size( 'tamanho3', 800, 534, true );
//add_image_size( 'thumbnail', 348, 235, true );
add_image_size( 'thumbnail', 350, 350, true );


// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        // 'tamanho1' => __( 'Pequeno' ),
        // 'tamanho2' => __( 'Medio' ),
        // 'tamanho3' => __( 'Grande' ),
        'thumbnail' => __( 'Thumnail' ),
    ) );
}
show_admin_bar( false );
