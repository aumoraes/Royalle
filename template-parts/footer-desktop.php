<div class="force-footer">

<div id="footer-desktop" >
	<div class="wrapper-desktop">
		<div class="left-container">
			<div class="footer-logo">
	      <a class="large" href="/" target="_self">
	        <img src="<?php bloginfo('template_directory'); ?>/assets/images/royalle-eventos-logo-full.png" alt="royalle-eventos-logo-full" >
	      </a>
			</div>
			<div class="footer-orcamento">
				<p>
					<a href="/orcamento">
						Faça um orçamento agora
						<br />
						É fácil, rápido!
					</a>
				</p>
			</div>
		</div>

		<div class="middle-container">
			<div class="footer-fale-conosco">
	      <h3>Fale Conosco</h3>

				<div class="info-contato-footer">
		      <div class="dados-contato">
		        <span class="icon-phone"></span>
		        <p class="titulo">
		          (11) 95996-5985
		        </p>
		        <span class="icon-whatsapp"></span>

		        <p class="subtitulo">
							<span class="icon-envelop"></span>
		          contato@royalleeventos.com.br
		        </p>
		      </div>

					<br />

		      <div class="horario-atendimento">
		        <span class="icon-clock"></span>
		        <p class="titulo">
		          Segunda - Sábado
		        </p>
		        <p class="subtitulo">
		          09:00 - 20:00
		        </p>
		      </div>
		    </div>

	    </div>

			<?php
			get_template_part('template-parts/siganos-face');
			?>
		</div>

		<div class="right-container">
	    <div class="subscribe">
				<p class="envelope-selo">
					<span class="icon-envelop"></span>
				</p>
			<p class="titulo-newsletter">
				inscreva-se
			</p>
			<p class="subtitulo-newsletter">
				para nossa newsletter
			</p>
	    <?php
	      //es_subbox( $namefield = "YES", $desc = "", $group = "public" );
	    ?>

			<?php if ( is_active_sidebar( 'footer_subscribe_1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer_subscribe_1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

	    </div>

			<div class="cloud-tag">
			</div>
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

</div>
