<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage aumoraes-profile
 * @since 1.0
 * @version 1.0
 */

?>
<?php
//include_once "footer-contato-mobile.php";


if( !wp_is_mobile() ):
?>
</div> <!-- abre no header se desktp -->
<?php endif;


if( wp_is_mobile() ){
?>




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
	<?php
} else {
?>
<div id="footer" >
	<div class="wrapper">

	<div class="imagem-footer">
		<img  src="<?php bloginfo('template_directory'); ?>/assets/images/logo-full-mobile.png" alt="royalleeventos" >
	</div>

	<div class="footer-menu-itens">
		<p>
			Indice Menu
		</p>
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
	<?php
	get_template_part('template-parts/siganos');
	?>

	</div>
</div>
<?php
}
?>


















	<?php
	if( wp_is_mobile() ){
	?>
  <div class="footer-copyright">
    <p class="footer-content-copyright">
      Royalle Eventos © 2017
    </p>
    <p class="footer-content-message">
      Todos os direitos reservados
    </p>
  </div>
<?php } ?>





<?php wp_footer(); ?>




<script  src='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js'></script>



<script  src='<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.touchSwipe.min.js'></script>

<script  src='<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.bxslider.min.js'></script>



<script  src='<?php echo get_stylesheet_directory_uri();?>/main.js?v=1.0.0'></script>

<script src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/picturefill.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/lightgallery-all.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/jquery.mousewheel.min.js"></script>


<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "1957550641236197", // Facebook page ID
            whatsapp: "+5511965271419", // WhatsApp number
            company_logo_url: "//scontent.xx.fbcdn.net/v/t1.0-1/p50x50/22046577_1959902527667675_6156946559554393852_n.png?oh=bcecd16b33589ef728cbadf44eeded05&oe=5A6E66C2", // URL of company logo (png, jpg, gif)
            greeting_message: "Olá, como podemos ajudar? Deixe uma mensagem que vamos entrar em contato.", // Text of greeting message
            call_to_action: "Envie uma  mensagem", // Call to action
            button_color: "#960303", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

</body>

</html>
