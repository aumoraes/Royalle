<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/lightgallery.css" rel="stylesheet">
    <script  src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <?php
  if( wp_is_mobile() ){
    include_once "modal-sucesso.php";
    include_once "modal-erro.php";
  }
  ?>


  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1598711326817025';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <?php
  include_once "menu.php";

  if( wp_is_mobile() ){
    include_once "sidebar-menu.php";
    include_once "form-contato-mobile.php";
  	include_once "modal-contato.php";
  }
