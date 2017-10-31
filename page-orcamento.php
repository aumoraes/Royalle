<?php if( wp_is_mobile() ): ?>
  <?php get_template_part('template-parts/orcamento-mobile');	?>
<?php else: ?>
  <?php get_template_part('template-parts/orcamento-desktop');	?>
<?php endif; ?>
