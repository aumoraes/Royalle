<div class="sobre">
	<?php
	$args = [
		'cat' => get_cat_ID( "sobre" )
	];
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
	?>

    <h2 class="title">
      <?php echo get_the_title(); ?>
    </h2>
		<div class="description">
			<h3>A Melhor Escolha</h3>
			<p>
			A <a href="http://royalleeventos.com.br" target="_self"><strong>Royalle Eventos</strong></a>, <strong>barraquinhas em casa</strong> leva até você o dinamismo da gastronomia com alimentos preparados na hora, o que faz com que os alimentos sejam servidos quentinhos e saborosos. Os nossos colaboradores tem o prazer de mostrar o preparo dos lanchinhos com todo carinho. Gostamos de ressaltar nossa <strong>Mini Pizza</strong> e nosso <strong>Mini X-Burger</strong>  pois não tem conservantes.
			Para <strong>festas temáticas</strong> também podemos adaptar as <strong>barraquinhas</strong> para entrar no clima da sua festa, como <strong>festa junina</strong> e outros.
			Faça um orçamento sem compromisso e fique de olho nas <strong>promoções</strong>.
			</p>
		</div>


	<?php
	endwhile;
	endif;
	?>

</div>
