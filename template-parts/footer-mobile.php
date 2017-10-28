<div id="footer" >
  <div class="imagem-footer">
    <img  src="<?php bloginfo('template_directory'); ?>/assets/images/logo-full-mobile.png" alt="royalleeventos" >
  </div>
  <?php
	if( wp_is_mobile() ){
    if( is_home() ){
      get_template_part('template-parts/siganos-face');
    } else {
      get_template_part('template-parts/siganos');
    }
	}
  ?>
</div>
<div class="footer-copyright">
  <p class="footer-content-copyright">
    Royalle Eventos © 2017
  </p>
  <p class="footer-content-message">
    Todos os direitos reservados
  </p>
</div>
