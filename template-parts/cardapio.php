<div class="cardapio">
	<?php
	$args = [
		'cat' => get_cat_ID( "cardapio" )
	];
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
	?>

    <h1 class="title">
      Cardápio
    </h1>
		<p class="description">
      Nosso Cardápio atende todos os gostos com alimentos doces e salgados que agradam as crianças e os adultos.
		</p>

    <div class="cardapio-itens">

    <?php

    $itens = explode("/", get_the_content());

    $itens_left = array();

    $itens_right = array();
    foreach ($itens as $key => $item_cardapio){
      if( $key % 2 == 0){
        array_push($itens_left, $item_cardapio);
      } else {
        array_push($itens_right, $item_cardapio);
      }
    }
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
