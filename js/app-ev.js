

function quitarbr(){
  if (jQuery(window).width() <= 850) {
    jQuery('#responsive-menu br').remove();
  }
}
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

        quitarbr();
        jQuery(window).resize(quitarbr);

    });


    jQuery(document).ready(function() {
          jQuery("input#programasearch").autocomplete({
              source: [
                { value: "Ingeniería Industrial", url: 'http://unireformada.edu.co/website2017/programas/ingenieria-industrial/' },
                { value: "Ingeniería Biomédica", url: 'http://unireformada.edu.co/website2017/programas/ingenieria-biomedica/' },
                { value: "Ingeniería Informática", url: 'http://unireformada.edu.co/website2017/programas/ingenieria-informatica/' },
                { value: "Ingeniería Ambiental", url: 'http://unireformada.edu.co/website2017/programas/ingenieria-ambiental/' },
                { value: "Psicología", url: 'http://unireformada.edu.co/website2017/programas/psicologia/' },
                { value: "Teología", url: 'http://unireformada.edu.co/website2017/programas/teologia/' },
                { value: "Música", url: 'http://unireformada.edu.co/website2017/programas/musica/' },
                { value: "Licenciatura en Educación Bilingüe – Español e Inglés", url: 'http://unireformada.edu.co/website2017/programas/licenciatura-en-educacion-bilingue-espanol-e-ingles/' },
                { value: "Contaduría Pública", url: 'http://unireformada.edu.co/website2017/programas/contaduria-publica/' },
                { value: "Administración Marítima y Portuaria", url: 'http://unireformada.edu.co/website2017/programas/administracion-maritima-y-portuaria/' },
                { value: "Administración de Empresas", url: 'http://unireformada.edu.co/website2017/programas/administracion-de-empresas/' },
                { value: "Administración de Negocios Internacionales", url: 'http://unireformada.edu.co/website2017/programas/administracion-de-negocios-internacionales/' },
                { value: "Especialización en desarrollo humano y organizacional", url: 'http://unireformada.edu.co/website2017/programas/especializacion-en-desarrollo-humano-y-organizacional/' },
                { value: "Especialización en Finanzas Internacionales", url: 'http://unireformada.edu.co/website2017/programas/especializacion-en-finanzas-internacionales/' }
              ],
              select: function (event, ui) {
                  window.location = ui.item.url;
              }
          });
      });
