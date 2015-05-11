$(document).ready(function(){

	$('#fullpage').fullpage({
		anchors: ['intro', 'services', 'approach', 'team', 'portfolio', 'about', 'contact'],
		menu: '.nav',
		paddingTop: '64px',

		//get current slide to define menu state(folded/unfolded):
		onLeave: function(index, nextIndex, direction){
			if( nextIndex === 1 ) {
				$(".navbar").addClass("unfolded");
				$(".pointer").addClass("hidden");
			} else {
				setTimeout(function(){
					$(".navbar").removeClass("unfolded");
				}, 300);

				setTimeout(function(){
					$(".pointer").removeClass("hidden");
				}, 1000);
			};

			//set position of menu pointer
			var pointerTranslate = $(".nav li").eq(nextIndex-1).position().left + $(".nav li").eq(nextIndex-1).width()/2 - 15;
			$(".pointer").css("margin-left", pointerTranslate);
		},

	});

	$('.approach .owl-carousel').owlCarousel({
	    loop: false,
	    items: 1,
	});

	$('.team .owl-carousel').owlCarousel({
	    loop: false,
	    items: 4,
	    nav: true,
	    dots: false,
	    navContainer: ".navs",
	    navText: '<>',
	});

	$('.portfolio .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
    	autoplay: true,
    	autoplayTimeout: 3000,
    	autoplayHoverPause: true,
	});

	$('.about .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
    	autoplay: true,
    	autoplayTimeout: 3000,
    	autoplayHoverPause: true,
	});

})