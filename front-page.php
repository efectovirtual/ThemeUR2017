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
            <li><p>Pagos</p></li>
            <li><p>Portal de empleo</p></li>
            <li><p>Email</p></li>
            <li><div class="buscadortop">Ingresa tu búsqueda...</div></li>
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
      <!-- Fin Header -->

  </header>



  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php get_template_part('template-parts/slider'); ?>

    <div class="row">

        <?php
        if ( have_posts() ) :

          if ( is_home() && ! is_front_page() ) : ?>
            <header>
              <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>

          <?php
          endif;

          /* Start the Loop */
          while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_format() );

          endwhile;

          the_posts_navigation();

        else :

          get_template_part( 'template-parts/content', 'none' );

        endif; ?>


    </div><!-- #container -->


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
