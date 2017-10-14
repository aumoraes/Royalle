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

		<!-- <div id="footer" class="clearfix">
			<div class="footer-copy">
				<p class="copyright">© <?php //echo date("Y"); ?> <a href="http://aumoraes.com" rel="home">Aurélio de Moraes</a></p>
			</div>
		</div> -->
	</div> <!-- .wrap (index)-->


<?php wp_footer(); ?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<script  src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

<script  src='<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.touchSwipe.min.js'></script>

<script  src='<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.bxslider.min.js'></script>


<script  src='<?php echo get_stylesheet_directory_uri();?>/main.js?v=1.0.0'></script>



</body>

</html>
