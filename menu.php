<header>
	<div class="container">
		<?php if( wp_is_mobile() ): ?>
			<div class="menu btn-mobile">
	      <div class="icon"></div>
	    </div>
			<a class="logo-mobile"  href="/" target="_self">
				<img class="small" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-nome-mobile.png" alt="royalleeventos" >
				<img class="large" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-full-mobile.png" alt="royalleeventos" >
			</a>

		<?php else: ?>

		<div class="menu-logo size-30">
			<a class="logo-desktop"  href="/" target="_self">
				<img class="small" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-nome-mobile.png" alt="royalleeventos" >
				<img class="large" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-full-mobile.png" alt="royalleeventos" >
			</a>
		</div>
		<div class="menu-desktop-items size-70">
			<ul class="menu-itens flex">
					<li>
						<a href="/#cardapio" class="menu-item cardapio" target="_self">
							cardápio
						</a>
					</li>
					<li>
						<a href="/#sobre" class="menu-item sobre" target="_self">
							sobre nós
						</a>
					</li>
					<li>
						<a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="menu-item contato">contatos</a>
					</li>
					<li>
						<a href="/orcamento" class="menu-item orcamento-menu-item" target="_self">
							orçamento
						</a>
					</li>

					<li>
						<a href="/galeria" class="menu-item galeria" target="_self">
							galeria de fotos
						</a>
					</li>
					<li>
						<a href="/faq" class="menu-item faq" target="_self">
							perguntas frequentes
						</a>
					</li>
			</ul>
		</div>
		<?php endif; ?>



	</div>






	<div class="flex">
		<span class="border-blue"></span>
		<span class="border-green"></span>
		<span class="border-purple"></span>
		<span class="border-red"></span>
	</div>
</header>
