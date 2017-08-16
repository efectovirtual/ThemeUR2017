<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ureformada
 */

?>

<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="banner-page-general">

			<div class="banner-img-general"
				style="background: #0059a5 url(<?php print_r($thumb[0]); ?>)
				no-repeat; background-position: center center; background-size: cover;
				">

				<!-- background-blend-mode: color; background-color: rgba(0,0,0,.7); -->
				<div class="banner-texto-general">
					<div class="row">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
				</div>

			</div>




		</div>

	</header><!-- .entry-header -->


	<div class="row">
		<div class="column contenido-page-general">
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ureformada' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'ureformada' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
