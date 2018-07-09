/*
        To have multiple slideshows on the same page
        they just need to have separate IDs
      */
			//la piragua express
	  $('#slides1').slidesjs({
			width: 792,
			height: 350,
			navigation: false,
			start: 1,
			play: {
				auto: true
			}
      });


	  //Portada
      $('#slides').slidesjs({
        width: 792,
        height: 350,
        navigation: false,
        start: 1,
        play: {
          auto: true
        }
      });
			//Folleto menu para dispositivos moviles
			$('#slides3').slidesjs({
				width: 500,
        height: 650,
        navigation: false
			});
	  $(document).ready(main);

var contador = 1;

function main () {
	//agregar clase para aparecer y desaparecer menu
	$('#mostrar-nav').on('click',function(){
		$('nav').toggleClass('mostrar');
	});

};//cierra funcion script

$(document).ready(function(){
        var cambio = false;
        $('nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                $(this).parent().addClass("active");
                cambio = true;
            }
        });
        if(!cambio){
            $('nav ul li:first').addClass("active");
        }
 });





$(document).ready(function(){
	var altura = $('#mostrar-nav').offset().top;

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('nav').removeClass('mostrar');
		} else {

			$('nav').toggleClass('mostrar');
		}
	});

});
