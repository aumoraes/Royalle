<div class="subscribe">
  <!-- <div class="subscribe-container"> -->
    <p class="envelope-selo">
      <span class="icon-envelop"></span>
    </p>
    <p class="titulo-newsletter">
      inscreva-se
    </p>
    <p class="subtitulo-newsletter">
      para nossa newsletter
    </p>

    <?php if ( is_active_sidebar( 'footer_subscribe_1' ) ) : ?>
    	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    		<?php dynamic_sidebar( 'footer_subscribe_1' ); ?>
    	</div><!-- #primary-sidebar -->
    <?php
      //[rainmaker_form id="189"]
      //es_subbox( $namefield = "YES", $desc = "", $group = "public" );
      endif;
    ?>


  <!-- </div> -->
</div>
