<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">
	  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel='stylesheet' id='style'  href='<?php echo get_stylesheet_directory_uri();?>/style.css?v=1.0.0' type='text/css' media='all' />



    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="header_nav">
        <div class="wrapper">
          <a href="<?php echo esc_url( site_url() ); ?>">
            <img src="<?php bloginfo( 'template_directory' );?>/assets/images/logo2.png" alt="" class="header_logo">
          </a>

          <div class="header_content">
    				<?php wp_nav_menu(array( 'theme_location' => 'header-menu' ) ); ?>

            <div class="header_contact">
              <p class="header_telephone">
                <a href="tel://96029-4667" class="header_icon">
                  <i class="fa icon-phone" aria-hidden="true"></i>
                </a>
                <span class="header_number"><small>11</small>96029-4667</span>
              </p>
              <p class="header_email">aureliodemoraes13@gmail.com</p>
            </div>

          </div>

        </div>

      </div>

    </header>
