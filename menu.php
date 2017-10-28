<header>
	<div class="container">
		<?php if( wp_is_mobile() ): ?>
			<?php get_template_part('template-parts/menu-mobile');	?>
		<?php else: ?>
			<?php get_template_part('template-parts/menu-desktop');	?>
		<?php endif; ?>
	</div>

	<div class="flex-border-menu">
		<span class="border-blue"></span>
		<span class="border-green"></span>
		<span class="border-purple"></span>
		<span class="border-red"></span>
	</div>
</header>
