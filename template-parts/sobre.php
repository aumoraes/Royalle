<div class="sobre">


	<?php
	$args = [
		'cat' => get_cat_ID( "sobre" )
	];
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
	?>

    <h1 class="title">
      Sobre a Royalle Eventos
    </h1>
		<p class="description">
			<?php echo get_the_content(); ?>
		</p>
	

	<?php
	endwhile;
	endif;
	?>

</div>
