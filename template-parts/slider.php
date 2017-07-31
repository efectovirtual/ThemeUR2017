<div class="binicio">

<div id="owl-slider" class="owl-carousel">


    <?php $args=array(
      // Banner Inicial
      'post_type' => 'slider',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'posts_per_page' => -1); 
    ?>
    <?php $slider = new WP_Query($args);?>
    

  
    <?php while($slider->have_posts()): 
          $slider->the_post(); 
          $image = get_field('imagen'); 
    ?>

      <div class="owl-slide" style="background: url(<?php echo $image['url']; ?>) center top no-repeat;">
          <img class="item" src="<?php echo get_template_directory_uri(); ?>/img/bg.png" />
      </div>  

  <?php endwhile; wp_reset_postdata(); ?>


  </div>
</div>

