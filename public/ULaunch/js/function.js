(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 
	
	/* Preloader Effect */
	$window.on('load', function(){
		$(".preloader").fadeOut(600);
	});
	

	var navMain = $(".navbar-collapse"); 
    navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
    });

	/* Back To Top */
	$(document).on('click','#back-to-top a',function(){
		$('body,html').stop().animate({	scrollTop: 0 }, 800);
		return false;
	});
		
	/* Sticky header */
	$window.scroll(function(){
    	if ($window.scrollTop() > 100) {
			$('.navbar').addClass('sticky-header');
		} else {
			$('.navbar').removeClass('sticky-header');
		}
	});
	
	/* Jump to top button */
	$window.scroll(function(){
    	if ($window.scrollTop() > 600) {
			$('.jumptotop').addClass('btn-active');
		} else {
			$('.jumptotop').removeClass('btn-active');
		}
	});
	
	/* Our Client slider */
	var swiper = new Swiper('.ourclient-slider', {
		grabCursor: true,
		speed: 1500,
		autoplay: true,
		slidesPerView: 1,
		breakpoints: {
			480: {
				slidesPerView: 3,
				spaceBetween: 0
			},
			
			991: {
				slidesPerView: 5
				
			}
		}
	});
	
	/* Testimonial Swiper Slider */
	var swiper = new Swiper('.testimonials-slider', {
		effect: 'coverflow',
		grabCursor: true,
		autoplay: true,
		centeredSlides: true,
		slidesPerView: 1,
		coverflowEffect: {
			rotate: 50,
			stretch: 0,
			depth: 100,
			modifier: 1,
			slideShadows : false,
		},
		breakpoints: {
			991: {
				slidesPerView: 3
				
			}
		},
		pagination: {
			el: '.testimonial-pagination',
			type: 'bullets',
			clickable: true
		},
	});
	
	/* Init Counter */
    $('.counter').counterUp({ delay: 5, time: 2000 });
	
	/* Popup video */
	$('.popup-video').magnificPopup({
        type: 'iframe',
        preloader: true,
    });
	
	/* Animate with wow js */
    new WOW({mobile:false}).init(); 
	
	/* Parallaxie Js */
	if ($window.width() > 768) {
		$('.parallaxie').parallaxie({
			speed: 0.55,
			 offset: 0,
		});
	}
	
})(jQuery);