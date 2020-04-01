"use strict";
window.addEventListener('load', function() {
	AOS.init({
		easing: 'ease-in-out-sine'
	});


//------------------------------------------------------------------------
//						OWL CAROUSEL OPTIONS
//------------------------------------------------------------------------

$('.carousel-single').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoHeight: false,
    items: 1,
    dots: true,
    navText: ['',''],
    rewind: true
});


	
});
