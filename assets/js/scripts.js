(function ($) {
    "use strict";

	  	/*-------------------------------------------------------------------
	  					For Sticky Menu
	  	-------------------------------------------------------------------*/
	  	$(window).on('scroll',function(){
		    if($(this).scrollTop() > 100){
		    	$('header').addClass('sticky');
			}
			else{
			   $('header').removeClass('sticky');
			}
		});
		$(document).on('click', '.navbar-collapse.in', function (e) {
	        if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
	            $(this).collapse('hide');
	        }
	    });
      
	    /*-------------------------------------------------------------------
	  					For Scroll Spy
	  	-------------------------------------------------------------------*/
		$("a").on('click', function(event) {
		    if (this.hash !== "") {
		        event.preventDefault();
		        var hash = this.hash;$('html, body').animate({
		          	scrollTop: $(hash).offset().top
		        }, 1000, function(){
		          	window.location.hash = hash;
		        });
		    }
	    });
	    
	    /*-------------------------------------------------------------------
	  					For Parallax Js
	  	-------------------------------------------------------------------*/
	  	$('.banner-area').parallax('50%','.3');

		/*-------------------------------------------------------------------
	  					For Isotope Sorting Js
	  	-------------------------------------------------------------------*/
	  	$(window).on('load', function() {
			var $portfolio = $('.portfolio-project').isotope({
			});
			$('.portfolio-menu').on('click', 'li', function () {
	            var filterValue = $(this).attr('data-filter');
	            $portfolio.isotope({
	                filter: filterValue
	            });
	        });
	    });
		$('.portfolio-menu li').on('click', function () {
	        $(this).siblings('li').removeClass('active');
	        $(this).addClass('active');
	        event.preventDefault();
    	});
		// For Tooltip
    	$('[data-toggle="tooltip"]').tooltip()

	  	/*-------------------------------------------------------------------
	  					For Owl-Carousel js
	  	-------------------------------------------------------------------*/
	  	/*------------Team Slider------------*/
	    var team = $('.team-slider');
		    team.owlCarousel({
		    loop:true,
		    margin: 30,
		    dots:true,
		    autoplay:true,
		    smartSpeed:1000,
		    autoplayTimeout:4000,
		     responsive:{
				 0:{
		            items:1
		        },

		        480:{
		            items:1
		        },
		 
		        768:{
		            items:3
		        },

		        992:{
		            items:4
		        },

		       1100:{
		            items:4
		        }
		    }
    	});

	    /*------------Partner Logo Slider------------*/
    	var partner = $('.partner-slider');
	    partner.owlCarousel({
	        items: 6,
	        margin: 30,
	        loop: true,
	        autoplay: true,
	        stagePadding: 0,
	        dots: true,
	        smartSpeed: 800,
	             responsive:{
				 0:{
		            items:2
		        },

		        480:{
		            items:2
		        },
		 
		        768:{
		            items:4
		        },

		        992:{
		            items:6
		        },

		       1100:{
		            items:6
	        }
	    }
	    });

	    /*------------Testimonial Slider------------*/
        var testmonials = $('.client-say');
	    testmonials.owlCarousel({
	        items: 1,
	        margin: 15,
	        loop: true,
	        autoplay: true,
	        stagePadding: 0,
	        dots: true,
	        smartSpeed: 700
	    });

	    /*-------------------------------------------------------------------
	  					For Counter up
	  	-------------------------------------------------------------------*/ 
	    $('.counter').counterUp({
		    delay: 10,
		    time: 1000
		});

	    /*-------------------------------------------------------------------
	  					For Magnific Popup
	  	-------------------------------------------------------------------*/ 
	  	$('.play-btn').magnificPopup({
            type: 'iframe'
        });
	    var magnifPopup = function () {
            $('.image-popup').magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out',
                    opener: function (openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        };
        // Call the functions 
        magnifPopup();

        /*-------------------------------------------------------------------
	  					For Main Slider
	  	-------------------------------------------------------------------*/
	  	var wHight = $(window).height(),
		    acHeight = (wHight);
		var mainSlider = $('.main-slider');
		if (mainSlider.length) {
		    mainSlider.camera({
		        height: acHeight + 'px',
		        loader: true,
		        hover: false,
		        navigationHover: false,
		        navigation: true,
		        autoPlay: true,
		        time: 4000,
		        playPause: false,
		        pagination: false
		    });
		}
	    
	    /*-------------------------------------------------------------------
	  					For Scroll Top
	  	-------------------------------------------------------------------*/
	  	$(window).on('scroll',function(){
		    if($(this).scrollTop() > 600){
		        $('.scroll-top').removeClass('not-visible');
		    }
		    else{
		        $('.scroll-top').addClass('not-visible');
		    }
		});
	    $('.scroll-top').on('click',function (event){
	        $('html,body').animate({
	            scrollTop:0
	        },1000);
	    });

	     /*-------------------------------------------------------------------
	  					For Preloader js
	  	-------------------------------------------------------------------*/
	  	$('.preloader').fadeOut('slow');
	   
})(jQuery);