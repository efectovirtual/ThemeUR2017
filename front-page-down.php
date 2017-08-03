<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ureformada
 */

get_header(); ?>


  <header id="masthead" class="site-header" role="banner">


      <!-- Header -->
  <div class="rheader">

    <div class="row expanded">
      <div class="column medium-4 bartopxpand"></div>
      <div class="column medium-8 bartopxpand">
        <div class="skew-bar"></div>
        <div class="bartop">
          <ul>
            <li><p>Llámanos: <strong>361-04-32</strong></p></li>
            <li><p><i class="fa fa-money" aria-hidden="true"></i>Pagos</p></li>
            <li><p><i class="fa fa-briefcase" aria-hidden="true"></i>Portal de empleo</p></li>
            <li><p><i class="fa fa-envelope" aria-hidden="true"></i>Email</p></li>
            <li><div class="buscadortop">

            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

                <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Ingresa tu búsqueda... ', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

            </form>

            </div></li>
          </ul>

        </div>
      </div>
    </div>

    <div class="row align-justify header">

        <div class="column medium-3 menulogo">
          <img class="imgvertical" src="<?php echo get_template_directory_uri(); ?>/img/logo-ur.png" alt="Corporación Universitaria Reformada">
        </div>

        <div class="column medium-9 menumen">
          <nav id="site-navigation" class="main-navigation" role="navigation">
             <?php echo do_shortcode( '[maxmegamenu location=primary]' ); ?>
          </nav><!-- #site-navigation -->
        </div>

    </div>

  </div>


  </header><!-- Fin Header -->

<?php get_template_part('template-parts/slider'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">



    <!-- Admisiones  -->
    <div class="row">

        <div class="column admisiones-home">
            <h1>Admisiones</h1>
            <div class="row">
              <div class="columns large-2 medium-4 small-6"><div class="boton-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/ico-registrarte.png" alt=""><p>RegÍstrate</p></div></div>
              <div class="columns large-2 medium-4 small-6"><div class="boton-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/ico-inscripcion.png" alt=""><p>Inscripción</p></div></div>
              <div class="columns large-2 medium-4 small-6"><div class="boton-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/ico-requisitos.png" alt=""><p>Requisitos</p></div></div>
              <div class="columns large-2 medium-4 small-6"><div class="boton-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/ico-financiacion.png" alt=""><p>Financiación Educativa</p></div></div>
              <div class="columns large-2 medium-4 small-6"><div class="boton-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/ico-puntopago.png" alt=""><p>Puntos de Pago</p></div></div>
              <div class="columns large-2 medium-4 small-6"><div class="boton-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/ico-convenios.png" alt=""><p>Auxilios y Convenios</p></div></div>
            </div>
        </div>

    </div>
    <!-- Fin Admisiones  -->



    <div class="row slider-info">
      <div class="slider-info-inicio">
            <div class="columns medium-9">
              <div id="slider-informativo" class="owl-carousel">
                  <?php $args=array(
                    'post_type' => 'sliderinformativo',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => -1);
                  ?>
                  <?php $slider = new WP_Query($args);?>

                  <?php while($slider->have_posts()):
                        $slider->the_post();
                        $image = get_field('imagen');
                  ?>

                    <div class="owl-slide">
                        <img class="item" src="<?php echo $image['url']; ?>" />
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>
              </div>
            </div>

            <div class="columns medium-3">
              <ul class="botones-right-inicio">
                <li><i class="fa fa-bullseye" aria-hidden="true"></i><p>Resoluciones Rectorales</p></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><p>Calendario Académico</p></li>
                <li class="doblelinea"><i class="fa fa-cube" aria-hidden="true"></i><p>Sistema de Información Académico</p></li>
                <li><i class="fa fa-book" aria-hidden="true"></i><p>Instructivo SIA CUR</p></li>
              </ul>
            </div>
      </div>
    </div>


<!-- Buscador de programas  -->
    <div class="row buscador-programas">
      <div class="column">
        <div class="buscador-programas-inicio">
          <h1>Búsca tu programa a estudiar</h1>
          <input type="text" name="searchProgramas" value="" placeholder="Ej: Ingenieria Ambiental ">
          <div class="boton-programas">Ver todos los programas</div>
        </div>
      </div>
    </div>


<!-- Noticias -->


  <?php $args=array(
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'cat' => 3
  );?>
  <?php $consulta = new WP_Query($args);?>

<div class="noticias-inicio">
    <div class="row">
      <div class="column">
        <h1>Noticias</h1>

        <div id="noticias-inicio" class="owl-carousel">
          <?php while($consulta->have_posts()): $consulta->the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Medium'); ?>
            <div class="item">
              <div class="noticiaitem" style="background: url(<?php print_r($thumb[0]); ?>) no-repeat; background-size: cover; background-position: center center;">
                <div class="textonoticia"><p><?php echo mb_strimwidth(get_the_title(), 0, 70);  ?></p></div>
                <div class="iconodetalles">
                  <a href="<?php the_permalink();?>">
                    <div class="linknoticias"> + </div>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>

      </div>
    </div>
</div>

<!-- Eventos y Videos -->

<?php $args=array(
	'post_type' => 'eventos',
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'posts_per_page' => 4
);?>

<?php $consulta = new WP_Query($args);?>


<div class="eventosyvideos">

    <div class="row">

      <div class="columns large-6 medium-12 bloque1">
          <h1>Eventos</h1>

      <?php while($consulta->have_posts()): $consulta->the_post(); ?>

          <div class="lineagris"></div>
          <div class="eventoitem">

            <div class="fechaevento">
              <div class="emes"><?php the_field('Mes'); ?></div>
              <div class="edia"><?php the_field('dia'); ?></div>
            </div>

            <div class="tituloevento">
              <p><?php the_field('texto'); ?></p>
            </div>

            <div class="iconodetalles">
              <a href="<?php the_field('vinculo'); ?>">
                <div class="linknoticias"> + </div>
              </a>
            </div>

          </div>

          <div class="clear"></div>

      <?php endwhile; wp_reset_postdata(); ?>

    </div>

    <div class="columns large-6 medium-12 bloque2">
        <h1>Videos</h1>

        <a data-open="VideoPop">
          <?php $image = get_field('imagen', 74); ?>
          <div class="imgcursoini" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bg-videour.png), url(<?php echo $image[ 'url' ]; ?>); background-size: cover; background-position: center center;"></div>
        </a>
          <div class="panel clearfix">
            <div class="boton-videos"><a href="https://www.youtube.com/channel/UCbfreHkeqjZgMQoCeL9boCA">Ver todos los videos</a></div>
        </div>

    </div>



  </div>

</div>


<div class="medium reveal" id="VideoPop" data-reveal data-reset-on-close="true">
  <div class="flex-video">
  <iframe width="420" height="315" src="https://www.youtube.com/embed/<?php the_field('video',74); ?>" allowfullscreen style="border:0"></iframe>
</div>

  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<!-- Iconos Secciones -->

  <div class="iconossecciones">
    <div class="row">
        <div class="column">
            <ul>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/idi-idiomas.png" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/emas-icon-2017.png" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/bibliotecaUR.png" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/bt-camara.png" alt=""></li>
            </ul>
      </div>
    </div>
  </div>


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
