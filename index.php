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

<div class="wrap" id="about" >
	<div class="container-fluid content col-md-6">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>
		<div  class="who-i-am">
			<div class="row">
				<div class="col-md-8">
					<div class="page-header">
						<h1> <?php the_title(); ?> </h1>
					</div>
					<div class="page-content">
						<p>
							<?php the_content(); ?>
						</p>
					</div>

					<div class="resume-button">
						
							<a href="<?php echo esc_html( pll__( 'resume_link' ) ) ?>" target="_blank">
								<?php echo esc_html( pll__( 'resume' ) ) ?>
							</a>
					</div>

				</div>
				<div class="col-md-3 col-md-offset-1 linkedin">
					<div class="page-header">
						<?php get_sidebar(); ?>
					</div>

				</div>
			</div>
		</div>
		<?php
		endwhile;
			wp_reset_postdata();
		endif;
		?>

		<div id="experience">
			<?php get_template_part('template-parts/experiencia');	?>
		</div>

	</div>


	<?php get_footer();
