<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">
	  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">

    <link rel='stylesheet' id='style'  href='<?php echo get_stylesheet_directory_uri();?>/style.css' type='text/css' media='all' />




    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php
    include_once "menu.php";
    include_once "sidebar-menu.php";
    ?>
