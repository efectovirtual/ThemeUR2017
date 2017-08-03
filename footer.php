<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ureformada
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="redes-sociales-footer">

			<div class="medium-12 columns">Síguenos en:

				<div id="socialicons">
					<a class="icon" href="#" title="Follow with Facebook" target="_blank"><i class="fa fa-facebook"></i></a>

					<a class="icon" href="#" title="Follow with Instagram" target="_blank"><i class="fa fa-instagram"></i></a>

					<a class="icon" href="#" title="Follow with Twitter" target="_blank"><i class="fa fa-twitter"></i></a>

					<a class="icon" href="#" title="Follow with YouTube" target="_blank"><i class="fa fa-youtube"></i></a>
			</div>

			</div>

		</div>


		<div class="info-footer">


			<img class="logofooter" src="<?php echo get_template_directory_uri(); ?>/img/logo-ur.png" alt="Reformada">


			<div class="menufooter">
				<div class="row">
					<nav class="nav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
					</nav>
				</div>
			</div>

			<p class="footerdatosur"><strong>Corporación Universitaria Reformada</strong><br> Teléfono: 361-04-32 -  Carrera 38 No. 74 -179 - Barranquilla - Colombia</p>

		<div class="row">
				<div class="vigilada-footer">
					<h6>VIGILADA MINEDUCACIÓN</h6>
					<p>Corporación Universitaria Reformada, con Personería Jurídica por medio de Resolución No. 1021 del 14 de mayo del 2002 expedida por el MEN, Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional</p>
				</div>
		</div>

			<div class="derechosfooter">
					<p>© 2017 Corporación Universitaria Reformada - Todos los derechos reservados</p>
			</div>

	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
