
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
