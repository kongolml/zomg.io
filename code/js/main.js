$(document).ready(function(){

	$('#fullpage').fullpage({
		anchors: ['intro', 'services', 'approach', 'team', 'portfolio', 'about', 'contact'],
		menu: '.nav',
		continuousVertical: true,
		paddingTop: '80px',

		//get current slide to define menu state(folded/unfolded):
		onLeave: function(index, nextIndex, direction){
			if( nextIndex===1 ) {
				$(".navbar").addClass("unfolded");
			} else {
				$(".navbar").removeClass("unfolded");
			};

			//set position of menu pointer
			var pointerTranslate = $(".nav li").eq(nextIndex-1).position().left + $(".nav li").eq(nextIndex-1).width()/2 - 15;
			$(".pointer").css("margin-left", pointerTranslate);
		},

	});

	$('.team .owl-carousel').owlCarousel({
	    loop: false,
	    items: 4,
	});

	$('.about .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
    	autoplay: true,
    	autoplayTimeout: 3000,
    	autoplayHoverPause: true,
	});

})