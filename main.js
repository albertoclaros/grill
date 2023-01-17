$(document).ready(function(){

	//QUITAR SCROLL DESPLEGABLE

	var body = $('body');
	var burguer = $('.cabecera-burguer');				

	burguer.click(function(){		
		body.toggleClass('overflow');		
	})								



	// MENU JS				

	var burguer = $('.cabecera-burguer');		
	var paloUno = $('.cabecera-burguer > div:first-child');		
	var paloTres = $('.cabecera-burguer > div:last-child');		
	var menu = $('.cabecera-nav');
	var enlace = $('.menu-enlace');	

	var anchura = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

	

		burguer.click(function(){
			if (anchura <= 768) {
				paloUno.toggleClass('palouno');

				paloTres.toggleClass('palotres');

				menu.toggleClass('cabecera-nav-abierto');
			}
		})

		enlace.click(function(){
			if (anchura <= 768) {
				paloUno.toggleClass('palouno');
				paloTres.toggleClass('palotres');
				menu.toggleClass('cabecera-nav-abierto');
				body.toggleClass('overflow');
			}
		})
	

});