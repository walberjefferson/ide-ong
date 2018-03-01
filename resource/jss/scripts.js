$(document).ready(function(){

	/* 
		Submenu.
		Sobrescreve a função do Bootstrap, fazendo com que suporte multiplos submenus abertos
	*/
	//Abrir
	$(".menu a, .responsive_menu a").click(function(){
		var link = $(this);
		
		setTimeout(function() {
			var open = link.closest("li").hasClass("open");
			
			if(open){

				link.parents("li").each(function(){
					$(this).addClass("open");
				});
			}
		}, 1);
	});
	//Fechar
	$(".menu a, .responsive_menu a").click(function(){
		var link = $(this);
		
		setTimeout(function() {
			var open = link.closest("li").hasClass("open");
			var li = 0;
			
			if(!open){

				link.parents("li").each(function(){
					// $(this).addClass("open");
					li++;
				});

				// alert("Quantidade de li: " + li)
			}

			if(li > 1){
				link.parents("li").each(function(){
					var el = $(this);
					el.addClass("open");
				});

				link.closest("li").removeClass("open");
				
				console.log("ok");
			}else{
				console.log("NOT ok");
			}
		}, 0);
	});

	/*
	* Slide
	*/
	$('.slide-1').owlCarousel({
		loop:true,
		nav:true,
		autoplay: true,
		responsive:{
			0:{
				items:1
			}
		}
	});
	$('.owl-prev').html('<i class="fa fa-angle-left"></i>');
	$('.owl-next').html('<i class="fa fa-angle-right"></i>');

	//Menu
	$('.hamburger').click(function() {
		$('.responsive_menu').slideToggle("slow");
	});

	//hamburgers
	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

	var hamburgers = document.querySelectorAll(".hamburger");
	if (hamburgers.length > 0) {
		forEach(hamburgers, function(hamburger) {
			hamburger.addEventListener("click", function() {
				this.classList.toggle("is-active");
			}, false);
		});
	}
	//end hamburgerss

});
