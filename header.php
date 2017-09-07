<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ureformada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>



	<div class="reveal" id="popupinscribete" data-reveal>
			<h1>Inscríbete Aquí</h1>
			<?php echo do_shortcode( '[contact-form-7 id="432" title="Inscríbete aquí"]' ); ?>
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ureformada' ); ?></a>


	<div id="content" class="site-content">
