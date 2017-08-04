<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

 <?php
 get_footer();
