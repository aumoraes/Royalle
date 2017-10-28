<div id="footer-desktop" >
	<div class="wrapper-desktop">

  	<!-- <div class="imagem-footer">
  		<img  src="<?php bloginfo('template_directory'); ?>/assets/images/logo-full-mobile.png" alt="royalleeventos" >
  	</div> -->
    <div class="servicos">
      <h1>Serviços</h1>
      <p>
        Barraquinhas em casa
      </p>
      <p>
        Aluguel de mesas e cadeiras
      </p>
      <p>
        Em breve alguel de brinquedos
      </p>
    </div>
    <div class="cardapio">
      <h1>Cardápio</h1>
      <div class="itens">


        <?php
        $args = [
          'cat' => get_cat_ID( "cardapio" )
        ];
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post();

          $itens = explode("/", get_the_content());

          foreach ($itens as $key => $item_cardapio){
            ?><p><?php
            echo $item_cardapio;
            ?></p><?php
          }

      	endwhile;
      	endif;
      	?>
      </div>
    </div>
  	<div class="footer-menu-itens">
  		<h1>
  			Indice Menu
  		</h1>
  		<ul>
  			<div class="menu-footer-left">
  				<li>
  					<a href="/#cardapio" class="footer-menu-item" target="_self">
  						cardápio
  					</a>
  				</li>
  				<li>
  					<a href="/#sobre" class="footer-menu-item" target="_self">
  						sobre nós
  					</a>
  				</li>
  				<li>
  					<a href="#contato" class="footer-menu-item" onclick="openModal('modal-contato')">
  						contato
  					</a>
  				</li>
  			</div>
  			<div class="menu-footer-right">
  				<li>
  					<a href="/orcamento" class="footer-menu-item" target="_self">
  						orçamento
  					</a>
  				</li>
  				<li>
  					<a href="/galeria" class="footer-menu-item" target="_self">
  						galeria de fotos
  					</a>
  				</li>
  				<li>
  					<a href="/faq" class="footer-menu-item" target="_self">
  						perguntas frequentes
  					</a>
  				</li>
  			</div>
  		</ul>
  	</div>

    <div class="social">
      <div class="subscribe">
      <?php
        es_subbox( $namefield = "YES", $desc = "Faça parte da nossa lista de email e receba ofertas especiais", $group = "public" );
      ?>
      </div>
    	<?php
    	get_template_part('template-parts/siganos');
    	?>
    </div>

	</div>
</div>
