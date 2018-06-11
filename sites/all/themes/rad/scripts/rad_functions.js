/* Funciones javascript, jquery adicionales para Rad Colombia */

/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth

// Añade el plugin de color jquery
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);

(function ($, Drupal, window, document, undefined) {
	$(document).ready(function(){
		
		if( $('body').hasClass('node-type-recurso') ){
			var id_category = $('.prefix-title','.resource').attr('value');
			var class_menu = '';
			if( id_category == '3' ){
				class_menu = 'menu-mlid-618';
			}else if( id_category == '1' ){
				class_menu = 'menu-mlid-619';
			}else{
				class_menu = 'menu-mlid-620';
			}
			$('a','.'+ class_menu).addClass('active');
		}


		//Ocultar ultimo item de eventos si son 5
		if( $(".num-event-5",".section-calendariografico").length > 0 ){
			$.each( $(".num-event-5",".section-calendariografico"), function(){
				$('.item' , $(this) ).last().hide();
			});
		}

		//BANNERS DE SECCION
		var parent_menu_current = "";
		$.each( $("#nice-menu-1 > li") , function(){
			if( $(this).hasClass('active-trail')  ){
				parent_menu_current = $( '> a', $(this) ).text();
				return false;
			}
		});
		if( parent_menu_current != "" ){
			if( $(".banner_cabezote_secciones[bannerpub*='"+parent_menu_current+"']:first", "#block-views-banners-espec-ficos-block").length ){
				$(".banner_cabezote_secciones[bannerpub*='"+parent_menu_current+"']:first", "#block-views-banners-espec-ficos-block").parent().parent().parent().show();
			}
		}

		if( $("#block-twitter-block-default").length ){
			$(".block-inner", "#block-twitter-block-default").append( "<div class='link_siguenos'><a href='www.twitter.com/radcolombia' target='_blank'>SIGUENOS</a></div>" );
		}


		//$('#primary-menu-bar ul.primary-menu li a').css();

		/* añade efecto de transicion al menu principal */
		$("#block-nice-menus-1 #nice-menu-1 li a").mouseover(function() {
			$(this).animate({backgroundColor: '#52525A'});
		});
		$("#block-nice-menus-1 #nice-menu-1 li a").mouseout(function(){
			$(this).animate({backgroundColor: '#BEBCBD'});
		});
		/* Añade efecto de transición al botón de cambio de idioma */
		$("#block-locale-language a").mouseover(function() {
			$(this).animate({backgroundColor: '#52525A'});
		});
		$("#block-locale-language a").mouseout(function(){
			$(this).animate({backgroundColor: '#BEBCBD'});
		});
		/* Añade efecto de subir y bajar al top */
		var detect_position = 'top';
		$('#down-tab').click(function() {
			if(detect_position == 'top'){
				$('#top-view').animate({"margin-top":"0px"}, 200);
				$('#down-tab').css("background","url(/sites/all/themes/rad/css/images/button-down.png)");
				detect_position = 'down';
			}else{
				$('#top-view').animate({"margin-top":"-162px"}, 200);
				$('#down-tab').css("background","url(/sites/all/themes/rad/css/images/button-top.png)");
				detect_position = 'top';
			}
		});
		/*Añade un efecto de transición a los previews de proyectos y demás*/
		$('.view-id-recursos, .view-id-eventos, .view-id-proyectos_rad, .home-miembros').find(".views-field-field-imagen").find('.field-content').hover(function() {
			$(this).find('.overlay-plus').find('img').animate({"margin-top":"0px"}, 400);
			$(this).find('.overlay-plus').animate({ opacity:0.7}, 400);
			//Efecto en eventos
			if( $('.calendar-calendar', '.page-calendariografico').length ){
				$(this).parent().parent().parent().find('.views-field-nothing').css("display","block");
				$(this).parent().parent().parent().find('.views-field-nothing').animate({ opacity:0.9}, 400);
			}

		}, function(){
			$(this).find('.overlay-plus').find('img').animate({"margin-top":"230px"}, 400);
			$(this).find('.overlay-plus').animate({ opacity:0}, 400);
		});

		//Efecto en eventos
		$('.views-field-nothing','.calendar-calendar').hover(function(){
		}, function(){
			$(this).css("display","none");
			$(this).animate({ opacity:0}, 400);
		});



		/* efecto sin el mas, desopacidad total */
		$('.view-id-asociados, .interna-miembros').find(".views-field-field-imagen").find('.field-content').hover(function() {
			$(this).find('.overlay-plus').animate({ "margin-top":"170px", opacity:0.8 }, 400);
			$(this).find('.image-style-img-representante').animate({opacity: 1}, 400);
		}, function(){
			$(this).find('.overlay-plus').animate({ "margin-top":"230px",  opacity:0 }, 400);
			$(this).find('.image-style-img-representante').animate({opacity: 0}, 400);
		});

		
		$('#socials').hover(function() {
			$(this).animate({ "left":"0px"}, 400);
		}, function(){
			$(this).animate({ "left":"-70px"}, 400);
		});

		/* Añade efecto de palabra buscar en el search general */
		$('#search-block-form #edit-search-block-form--2').val('Buscar');
		$('#search-block-form #edit-search-block-form--2').focus( function(){
			$('#search-block-form #edit-search-block-form--2').val('');
		});
		$('#search-block-form #edit-search-block-form--2').blur( function(){
			if($('#search-block-form #edit-search-block-form--2').val() == ''){
				$('#search-block-form #edit-search-block-form--2').val('Buscar');
			}
		});

		/* Añade efecto para mostrar campo comentarios */
		var detect_position = 'top';
		$('#comment-project').click( function(){
			if(detect_position == 'top'){
				$('#content .group-footer #comments').show("slow");
				detect_position = 'down';
			}else{
				$('#content .group-footer #comments').hide("slow");
				detect_position = 'top';
			}
		});

		/* Añade el active al primer elemento de la vista view-display-id-block_1 vista presentación para asociados*/
		var hasActiveClass = false;
		$('.asos-links').find('a').each(function(){
			if( $(this).hasClass('active') ){
				hasActiveClass = true;
			}
		});
		if( !hasActiveClass ){
			$('.asos-links a:first').addClass('active');
		}
		
		/* Añade una clase al elemento colorbox */
		
			$('#cboxLoadedContent').jScrollPane();
		
		/* Añade fondo select */


		$('#dhtml_menu-618 a').attr('href', '/recursosm/investigaciones-docentes');
		$('#dhtml_menu-619 a').attr('href', '/recursosm/proyectos-estudiantiles');
		$('#dhtml_menu-620 a').attr('href', '/recursosm/memorias-rad');
		$('#dhtml_menu-575 a').attr('href', '/calendariolistam');
		$('#dhtml_menu-616 a').attr('href', '/proyectosm/en-curso');
		$('#dhtml_menu-617 a').attr('href', '/proyectosm/anteriores');
		$('#dhtml_menu-495 a').attr('href', '/asociadosm');
		$('#dhtml_menu-665 a').attr('href', '/consejo_directivom');
		
		
		
			
		/* Reemplaza texto en formulario de publique */
		
		$('#recurso-node-form .field-name-field-descargable-form .description').html('Tamaño máximo de archivo: 500 KB.');
		$('#recurso-node-form .field-name-field-imagen-form .description').html('Los archivos deben ser menores que 256 MB.');
		$('#recurso-node-form .field-name-field-banner-form .description').html('Medidas ideales de carga: 780 px de ancho.');
		$('#recurso-node-form .field-name-field-banner-slide-form .description').html('Medida minima para publicación: 980 px de ancho.');
		
	});// fin document ready


	 
})(jQuery, Drupal, this, this.document);
