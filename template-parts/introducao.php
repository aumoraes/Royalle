<div class="introducao">
	<?php
	$args = [
		'cat' => get_cat_ID( "introducao" )
	];
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
	?>

	<div class="item">
    <h1 class="title">
      Royalle Barraquinhas
    </h1>
		<p class="description">
			<?php echo get_the_content(); ?>
		</p>
	</div>

	<?php
	endwhile;
	endif;
	?>

</div>
