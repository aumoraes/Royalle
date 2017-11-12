<div class="introducao ">
	<?php
	$args = [
		'cat' => get_cat_ID( "introducao" )
	];
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
	?>

    <h1 class="title">
      <?php echo get_the_title(); ?>
    </h1>
		<div class="description">

			<h3>O Melhor está aqui</h3>
			<p>

				A <a href="http://royalleeventos.com.br" target="_self"><strong>Royalle Eventos</strong></a> oference o melhor para a sua festa. Barraquinhas descontraída e dinâmica com lanches deliciosos são o nosso forte.

				O serviço de <strong>barraquinhas à domicílio</strong> conta com capricho em cada detalhe, desde a roupa até aos lanches. Nos dedicamos ao máximo.

				Quer saber em quais eventos contratar as barraquinhas, veja alguns deles:
				<ul>
				 	<li>Festa em casa para você receber seus amigos e familiares;</li>
				 	<li>Atendemos inaugurações de lojas para atrair clientes;</li>
				 	<li>Festa de empresas com tema ( festa junina );</li>
				</ul>
				Prezamos muito pelo atendimento e qualidade dos alimentos que oferecemos. Você vai sentir isso do primeiro 'oi' até a primeira mordida em uns dos nosso lanches.

				A <a href="http://royalleeventos.com.br" target="_self"><strong>Royalle Eventos</strong></a> quer fazer parte da sua festa, entre em contato e confira nosso condições especiais.

			</p>
		</div>
		<div id="selo-12">
			<p>
				<a href="http://royalleeventos.com.br/orcamento" target="_self">Clique aqui e faça um orçamento grátis!</a>
			</p>
		</div>


	<?php
	endwhile;
	endif;
	?>

</div>
