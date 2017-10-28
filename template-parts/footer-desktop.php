<div id="footer-desktop" >
	<div class="wrapper-desktop">
		<?php
  	get_template_part('template-parts/siganos-face');
  	?>

		<div class="middle-container">
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
		</div>

    <div class="subscribe">
    <?php
      es_subbox( $namefield = "YES", $desc = "Quer receber dicas e descontos?", $group = "public" );
    ?>
    </div>

	</div>
</div>

<div class="footer-copyright">
	<div class="wrapper-desktop">
	  <p class="footer-content-copyright">
	    Royalle Eventos © 2017
	  </p>
	  <p class="footer-content-message">
	    Todos os direitos reservados
	  </p>
	</div>
</div>
