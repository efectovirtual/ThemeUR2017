
  <header id="masthead" class="site-header" role="banner">

      <!-- Header -->
  <div class="header-interno">

      <?php get_template_part('template-parts/bartop'); ?>

    <div class="header">
        <div class="row">
            <div class="column large-3 menulogo">
              <img  src="<?php echo get_template_directory_uri(); ?>/img/logo-ur-azul.png" alt="Corporación Universitaria Reformada">
            </div>

            <div class="column large-9 menumen">
              <nav id="site-navigation" class="main-navigation" role="navigation">
                 <?php echo do_shortcode( '[maxmegamenu location=primary]' ); ?>
              </nav><!-- #site-navigation -->
            </div>
        </div>
    </div>

  </div>


  </header><!-- Fin Header -->
