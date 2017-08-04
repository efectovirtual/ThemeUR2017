

    jQuery(document).ready(function(){

        jQuery("#owl-slider").owlCarousel({
          items:1,
          loop:true,
          margin:0,
          nav:true,
          rtl:true,
          afterMove: moved

        });

        jQuery("#slider-informativo").owlCarousel({
          items:1,
          loop:true,
          margin:0,
          nav:true,
          rtl:true,
          afterMove: moved
        });


        jQuery("#noticias-inicio").owlCarousel({
          loop:true,
          margin:0,
          nav:true,
          rtl:true,
          afterMove: moved,
          responsive:{
                0:{
                    items:1,
                    nav:false,
                    loop:true
                },
                400:{
                    items:2,
                    nav:true
                },
                600:{
                    items:2,
                    nav:true
                },
                800:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:true
                }
            }

        });



        function moved() {
          var owl = jQuery("#owl-example").data('owlCarousel');
          var $buttons = jQuery('.custom-control button');
          $buttons.removeClass('active').removeAttr('disabled');
          jQuery('.custom-control').find('[data-slide="'+owl.currentItem +'"]').addClass('active').attr('disabled', 'disabled');
        }


        if (jQuery(window).width() <= 850) {
          jQuery('#responsive-menu br').remove();
        }



    });


jQuery(document).foundation();
