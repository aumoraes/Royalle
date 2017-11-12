<div class="cardapio">
	<?php
	$args = [
		'cat' => get_cat_ID( "cardapio" )
	];
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
	?>

    <h2 class="title">
      <?php echo get_the_title(); ?>
    </h2>
		<div class="description">

			<h3>As Melhores Opções</h3>
			<p>
				Nosso Cardápio atende todos os gostos. Alimentos com opções doce e salgado que agradam as crianças e os adultos.
				Estamos em constante mudança em nosso cardápio. Para saber se temos mais opções, entre em contato conosco.
			</p>
		</div>

    <div class="cardapio-itens">

    <?php

    //$itens = explode("/", get_the_content()); #USAR ESSA LINHA SE FOR PEGAR DO WORDPRESS

    $itens_left = array();
    $itens_right = array();
    // foreach ($itens as $key => $item_cardapio){
    //   if( $key % 2 == 0){
    //     array_push($itens_left, $item_cardapio);
    //   } else {
    //     array_push($itens_right, $item_cardapio);
    //   }
    // }
		array_push($itens_left, "Mini X-Burger");
		array_push($itens_left, "Mini Hot-Dog");
		array_push($itens_left, "Carne Louca");
		array_push($itens_left, "Algodão Doce");

		array_push($itens_right, "Mini X-Bacon");
		array_push($itens_right, "Mini Pizza");
		array_push($itens_right, "Crepe");
		array_push($itens_right, "Pipoca");

    ?>
    <div class="cardapio-itens-left">
    <?php
    foreach ($itens_left as $item_cardapio_left){
    ?>

       <p class="item_cardapio">
				  <span class="check_cardapio  ui-btn ui-icon-check ui-btn-icon-left "></span>
          <strong><?php echo $item_cardapio_left; ?></strong>
       </p>

     <?php
    }
    ?>
    </div>
    <div class="cardapio-itens-right">
    <?php

    foreach ($itens_right as $item_cardapio_right){
    ?>

       <p class="item_cardapio">
				 <span class="check_cardapio  ui-btn ui-icon-check ui-btn-icon-left "></span>
          <strong><?php echo $item_cardapio_right; ?></strong>
       </p>

     <?php
    }
    ?>
    </div>
  </div>



	<?php
	endwhile;
	endif;
	?>

</div>
