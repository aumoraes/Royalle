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
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js">
</script>


<script>
	$(window).scroll(function() {
	  if ($(document).scrollTop() > 50) {
	    $('#main-nav').addClass('scroll');
	  } else {
	    $('#main-nav').removeClass('scroll');
	  }
	});
</script>
<script>
		$(document).ready(function(){
				$("#nav-mobile").html($("#nav-main").html());
				$("#nav-trigger span").click(function(){
						if ($("nav#nav-mobile ul").hasClass("expanded")) {
								$("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
								$(this).removeClass("open");
						} else {
								$("nav#nav-mobile ul").addClass("expanded").slideDown(250);
								$(this).addClass("open");
						}
				});
		});
</script>


</body>

</html>
