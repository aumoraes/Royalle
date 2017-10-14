<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php
    include_once "menu.php";
    include_once "sidebar-menu.php";
    ?>
