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
wp_enqueue_script( 'script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
wp_enqueue_script( 'swipe', get_template_directory_uri() . '/assets/js/jquery.touchSwipe.min.js');
show_admin_bar( false );
