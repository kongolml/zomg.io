(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('#fullpage').fullpage({
			anchors: ['intro', 'services', 'approach', 'team', 'portfolio', 'about', 'contact'],
			menu: '.nav',
			paddingTop: '64px',
			responsive: 768,
			scrollBar:true,

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

				$("body").attr("active-section", $("article.active").data("anchor"));
			},

		});

		$(".owl-carousel").each(function(){
			$(this).width($(this).width());
		});

		$('.intro .owl-carousel').owlCarousel({
		    loop: true,
		    items: 1,
		});

		$(".intro .link").click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionDown();
		});

		$('.approach .owl-carousel').owlCarousel({
		    loop: false,
		    items: 1,
		});

		$('.team .owl-carousel').owlCarousel({
		    loop: false,
		    dots: false,
		    navContainer: ".navs",
		    navText: '<>',
		    responsive: {
		    	0: {
		    		nav: false,
		    		items: 2,
		    		autoplay: true,
		    		autoplayTimeout: 2000,
		    	},
		    	768: {
		    		items: 4,
		    		nav: true,
		    	}
		    },
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

		//disable onepage-scroll on modal open and enable on modal show:
		$('.modal').on('show.bs.modal', function (e) {
		  $.fn.fullpage.setAllowScrolling(false);
		});

		$('.modal').on('hide.bs.modal', function (e) {
		  $.fn.fullpage.setAllowScrolling(true);
		});
		
	});
	
})(jQuery, this);
