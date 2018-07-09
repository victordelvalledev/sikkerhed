$(document).ready(main);
 
var contador = 1;
 
function main () {
	//agregar clase para aparecer y desaparecer menu
	$('#mostrar-nav').on('click',function(){
		$('nav').toggleClass('mostrar');
	});
	 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
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