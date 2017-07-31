

    $(document).ready(function(){

        $("#owl-slider").owlCarousel({
          items:1,
          loop:true,
          margin:0,
          nav:true,
          rtl:true,
          afterMove: moved

        });

        $("#owl-servicios").owlCarousel({
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
          var owl = $("#owl-example").data('owlCarousel');
          var $buttons = $('.custom-control button');
          $buttons.removeClass('active').removeAttr('disabled');
          $('.custom-control').find('[data-slide="'+owl.currentItem +'"]').addClass('active').attr('disabled', 'disabled');
        }       
        


    });


$(document).foundation();
