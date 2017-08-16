<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ureformada
 */

get_header(); ?>

<?php get_template_part('template-parts/header-interno'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page-general' );

					endwhile; // End of the loop.
					?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<!-- Buscador de programas  -->
	    <?php  get_template_part( 'template-parts/content', 'buscarprograma' );?>
<?php
get_footer();
