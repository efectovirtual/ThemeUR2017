<?php

	get_header();

?>

<?php get_template_part('template-parts/header-interno'); ?>



<div class="banner-programas">
  <div class="row">
    <div class="columns large-5 medium-6">
        <div class="info-banner-programas">
          <h1><?php the_title();  ?></h1>
          <p class="snies">SNIES <?php the_field('snies'); ?></p>
          <p class="registro"><?php the_field('registro_calificado'); ?></p>
        </div>
    </div>
    <div class="columns large-7 medium-6">
      <?php $image = get_field('imagen'); ?>
      <div class="img-programa-banner"
      style="background: url(<?php echo $image[ 'url' ]; ?>) no-repeat;
      background-size: cover; background-position: center center;"></div>
    </div>
  </div>
</div>
<div class="info-institucion">
  <p><strong>Institución:</strong> Corporación Universitaria Reformada CUR (Barranquilla - Atlántico - Colombia) 2842</p>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="informacion-programa">
        <div class="row">
          <div class="columns medium-4">
            <ul>
              <li><strong><p>Nombre del programa:</strong>  <?php the_field('nombre_del_programa'); ?></p></li>
              <li><strong><p>Código SNIES:</strong>  <?php the_field('snies'); ?></p></li>
              <li><strong><p>Nível del programa:</strong>  <?php the_field('nivel_del_programa'); ?></p></li>
            </ul>
          </div>
          <div class="columns medium-4 colorfondo-iprograma2">
            <ul>
              <li><strong><p>Nível académico:</strong>  <?php the_field('nivel_academico'); ?></p></li>
              <li><strong><p>Modalidad:</strong>  <?php the_field('modalidad'); ?></p></li>
              <li><strong><p>Duración del programa:</strong>  <?php the_field('duracion_del_programa'); ?></p></li>
            </ul>
          </div>
          <div class="columns medium-4">
            <ul>
              <li><strong><p>Título expedido:</strong>  <?php the_field('titulo_expedido'); ?></p></li>
              <li><strong><p>Lugar donde se oferta:</strong>  <?php the_field('lugar_donde_se_oferta'); ?></p></li>
            </ul>
          </div>
        </div>
      </div>

			<div class="row">
	      <div class="formulario-programas">
	        	<h1>Quieres recibir más información sobre el programa de <?php the_title();  ?> ?</h1>
						<?php echo do_shortcode( '[contact-form-7 id="105" title="Formulario de Programas"]' ); ?>

						<script type="text/javascript">
							jQuery(document).ready(function(){
								jQuery('.wpcf7-form-control-wrap.programa input').val('<?php the_title();?>');
							})
						</script>

				</div>
			</div>



<!--  Detalles de los programas -->
			<div class="detalles-programas">
				<div class="row">




			<?php $tprograma = get_field_object('tipo_de_programa'); ?>

			<?php echo do_shortcode( '[tabby title="Información"]' ); ?>
				<?php the_field('informacion'); ?>


			<?php echo do_shortcode( '[tabby title="Plan de Estudios"]' ); ?>
				<?php if ($tprograma['value'] == 'pregrado' || $tprograma['value'] == 'pregradotecnologia'): ?>
					<?php get_template_part('template-parts/planestudios'); ?>
				<?php else: ?>
					<?php the_field('plandeestudio_posgrado'); ?>
				<?php endif; ?>


			<?php echo do_shortcode( '[tabby title="Costo"]' ); ?>
				<?php get_template_part('template-parts/costos'); ?>


			<?php echo do_shortcode( '[tabby title="Video"]' ); ?>

			<?php echo do_shortcode( '[tabbyending]' ); ?>



		</div>
	</div>




			<?php if ($tprograma['value'] == 'pregradotecnologia'): ?>


				<div class="banner-programas">
				  <div class="row">
				    <div class="columns large-5 medium-6">
				        <div class="info-banner-programas">
				          <h1><?php the_field('nombre_del_programa_tecnologia');?></h1>
				          <p class="snies">SNIES <?php the_field('snies_tecnologia'); ?></p>
				          <p class="registro"><?php the_field('registro_calificado_tecnologia'); ?></p>
				        </div>
				    </div>
				    <div class="columns large-7 medium-6">
				      <?php $image = get_field('imagen'); ?>
				      <div class="img-programa-banner"
				      style="background: url(<?php echo $image[ 'url' ]; ?>) no-repeat;
				      background-size: cover; background-position: center center;"></div>
				    </div>
				  </div>
				</div>

	      <div class="informacion-programa">
	        <div class="row">
	          <div class="columns medium-4">
	            <ul>
	              <li><strong><p>Nombre del programa:</strong>  <?php the_field('nombre_del_programa_tecnologia'); ?></p></li>
	              <li><strong><p>Código SNIES:</strong>  <?php the_field('snies_tecnologia'); ?></p></li>
	              <li><strong><p>Nível del programa:</strong>  <?php the_field('nivel_del_programa_tecnologia'); ?></p></li>
	            </ul>
	          </div>
	          <div class="columns medium-4 colorfondo-iprograma2">
	            <ul>
	              <li><strong><p>Nível académico:</strong>  <?php the_field('nivel_academico_tecnologia'); ?></p></li>
	              <li><strong><p>Modalidad:</strong>  <?php the_field('modalidad'); ?></p></li>
	              <li><strong><p>Duración del programa:</strong>  <?php the_field('duracion_del_programa_tecnologia'); ?></p></li>
	            </ul>
	          </div>
	          <div class="columns medium-4">
	            <ul>
	              <li><strong><p>Título expedido:</strong>  <?php the_field('titulo_expedido_tecnologia'); ?></p></li>
	              <li><strong><p>Lugar donde se oferta:</strong>  <?php the_field('lugar_donde_se_oferta'); ?></p></li>
	            </ul>
	          </div>
	        </div>
	      </div>

				<div class="detalles-programas">
					<div class="row">
						<?php the_field('informacion_tecnologia'); ?>
					</div>
			 </div>

			<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
