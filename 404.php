<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ureformada
 */

get_header(); ?>
<?php get_template_part('template-parts/header-interno'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Página no encontrada.', 'ureformada' ); ?></h1>
				</header><!-- .page-header -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
