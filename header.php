<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.ico">




<link rel='stylesheet' id='bootstrap'  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-profile-css'  href='<?php echo get_stylesheet_directory_uri();?>/style.css?v=1.0.0' type='text/css' media='all' />



<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-102056122-1', 'auto');
	ga('send', 'pageview');

</script>
<!-- Piwik -->
<script type="text/javascript">
	var _paq = _paq || [];
	/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u="//aumoraes.com/piwik/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '1']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	})();
</script>
<!-- End Piwik Code -->



<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-default">
		<div class="container-fluid col-md-6">
			<div class="navbar-header">

				<ul class="nav navbar-nav language-flag mobile">
					<div class="social-share-bar">
						<li class="social"><a href="https://github.com/aumoraes" title="github" target="_blank"><i class="fa icon-github" aria-hidden="true"></i></a></li>
						<li class="social"><a href="https://www.facebook.com/aurelio.moraes.5" title="facebook" target="_blank"><i class="fa icon-facebook" aria-hidden="true"></i></i></a></li>
						<li class="social"><a href="https://www.instagram.com/aureliodemoraes13/" title="instagram" target="_blank"><i class="fa icon-instagram" aria-hidden="true"></i></a></li>
						<li class="social"><a href="https://www.hackerrank.com/aureliodemoraes1" title="hackerrank" target="_blank"><i class="fa icon-hackerrank" aria-hidden="true"></i></a></li>
					</div>
					<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 0, 'hide_current' => 1 ) ); ?>
				</ul>


				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>



			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav ">
					<?php
					if( ! wp_is_mobile() ) :
					 ?>
					<div class="social-share-bar">
						<li class="social"><a href="https://github.com/aumoraes" title="github" target="_blank"><i class="fa icon-github" aria-hidden="true"></i></a></li>
						<li class="social"><a href="https://www.facebook.com/aurelio.moraes.5" title="facebook" target="_blank"><i class="fa icon-facebook" aria-hidden="true"></i></i></a></li>
						<li class="social"><a href="https://www.instagram.com/aureliodemoraes13/" title="instagram" target="_blank"><i class="fa icon-instagram" aria-hidden="true"></i></a></li>
						<li class="social"><a href="https://www.hackerrank.com/aureliodemoraes1" title="hackerrank" target="_blank"><i class="fa icon-hackerrank" aria-hidden="true"></i></a></li>

					</div>
					<div class="language-flag">
					<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 0, 'hide_current' => 1 ) ); ?>
					</div>

					<?php
					else:
					 ?>

					 <li class="page-link"><a href="#about" title="about"> <?php echo esc_html( pll__( 'about' ) ) ?> </a></li>
					 <li class="page-link"><a href="#experience" title="experience"> <?php echo esc_html( pll__( 'experience' ) ) ?> </a></li>

					 <?php
					 endif;
						?>

				</ul>
			</div><!-- /.navbar-collapse -->



		</div><!-- /.container-fluid -->
	</nav>



	<div class="container-fluid header">



		<?php
		if( wp_is_mobile() ) :
			$url = esc_html( pll__( 'header-mobile' ) );
			$width = "414";
			$height = "366";
		else:
			$url = esc_html( pll__( 'header-desktop' ) );
			$width = "1905";
			$height = "427";
		endif;
		?>

		<div class="row header_image">
			<img src="<?php echo $url; ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" alt="Header Image" />
		</div>


		<div class="row">
			<h1> AURÉLIO DE MORAES </h1>
			<h2> <?php echo esc_html( pll__( 'description' ) ) ?> </h2>
		</div>



		<div class="row">
			<div class="col-xs-10 col-md-12 header-photo">
				<figure>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/profile-photo.jpg" alt="Aurelio Moraes" title="Web Developer">
				</figure>
			</div>
		</div>
