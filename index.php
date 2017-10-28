<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage aumoraes-profile
 * @since 1.0
 * @version 1.0
 */

get_header();

//include_once "slider.php";

?>


<div class="wrap" id="geral" >

	<?php
	include_once "banner.php";
	?>
	<div id="introducao">
		<?php get_template_part('template-parts/introducao');	?>
	</div>
	<div id="cardapio">
		<?php get_template_part('template-parts/cardapio');	?>
	</div>
	<div id="sobre">
		<?php get_template_part('template-parts/sobre');	?>
	</div>

</div> <!-- .wrap (index)-->


	<?php get_footer();
