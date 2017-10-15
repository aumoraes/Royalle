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

get_header(); ?>


<div class="wrap" id="geral" >
	<?php
	include_once "form-contato-mobile.php";
	include_once "modal-contato.php";
	?>

	<div id="introducao">
		<?php get_template_part('template-parts/introducao');	?>
	</div>
	<div id="cardapio">
		<?php get_template_part('template-parts/cardapio');	?>
	</div>

	<?php get_footer();
