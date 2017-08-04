
  <header id="masthead" class="site-header" role="banner">

      <!-- Header -->
  <div class="header-interno">

      <div class="bartop">
          <div class="row">
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
