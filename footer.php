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
include_once "footer-contato-mobile.php";
?>


	<div id="footer" class="clearfix">

		<div class="footer-social-media">
			<div class="facebook">
				<a href='https://www.facebook.com/RoyalleBarraquinhas/' target="_blank">
					<span class="icon-facebook"></span>
				</a>
			</div>

			<div class="instagram">
				<a href='https://www.instagram.com/royalle_eventos/' target="_blank">
					<span class="icon-instagram"></span>
				</a>
			</div>

			<div class="whatsapp">
			<a href="https://api.whatsapp.com/send?phone=55011965881509" target="_blank">
		    <span class="icon-whatsapp"></span>
		  </a>
			</div>

		</div>

		<div class="footer-copy">
			<p class="copyright">© <?php echo date("Y"); ?> <a href="http://royalleeventos.com.br" rel="home">Royalle Eventos</a></p>
		</div>
	</div>



</div> <!-- .wrap (index)-->


<?php wp_footer(); ?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<script  src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

<script  src='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js'></script>



<script  src='<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.touchSwipe.min.js'></script>

<script  src='<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.bxslider.min.js'></script>


<script  src='<?php echo get_stylesheet_directory_uri();?>/main.js?v=1.0.0'></script>

<script src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/picturefill.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/lightgallery-all.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/gallery/jquery.mousewheel.min.js"></script>


</body>

</html>
