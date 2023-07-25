(function($) {
	'use strict';

	// Mean Menu JS
	$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});

	// Sticky JS
	$(window).on('scroll', function() {
		if ($(this).scrollTop() >150){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		};
	});

	// Others Option For Responsive JS 
	$(".others-option-for-responsive .dot-menu").on("click", function(){
		$(".others-option-for-responsive .container .container").toggleClass("active");
	});

	// Input JS
	$("#slider").on("input change", (e)=>{
		const sliderPos = e.target.value;
		// Update the width of the foreground image
		$('.foreground-img').css('width', `${sliderPos}%`)
		// Update the position of the slider button
		$('.slider-button').css('left', `calc(${sliderPos}% - 18px)`)
	});

	// Search Popup JS
	$('.close-btn').on('click',function() {
		$('.search-overlay').fadeOut();
		$('.search-btn').show();
		$('.close-btn').removeClass('active');
	});
	$('.search-btn').on('click',function() {
		$(this).hide();
		$('.search-overlay').fadeIn();
		$('.close-btn').addClass('active');
	});

	// Banner Slider JS
	$('.banner-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		items: 1,
		autoplay: false,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-134-arrow-left'></i>",
			"<i class='flaticon-137-right-arrow'></i>"
		],
	})
	
	// Second Banner Slider JS
	$('.second-banner-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		items: 1,
		autoplay: false,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>",
			"<i class='bx bx-chevron-right'></i>"
		],
	})
		
	// Second Banner Slider JS
	$('.home-slides').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		items: 1,
		autoplay: false,
		smartSpeed: 1000,
		animateOut: 'fadeOut',
        animateOut: 'fadeOut',
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevron-left'></i>",
			"<i class='bx bx-chevron-right'></i>"
		],
	})

	// Testimonial Slider JS
	$('.testimonial-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-134-arrow-left'></i>",
			"<i class='flaticon-137-right-arrow'></i>"
			],
		responsive:{
			0:{
				items: 1
			},
			576:{
				items: 1
			},
			768:{
				items: 1
			},
			992:{
				items: 1
			},
			1200:{
				items: 1
			},
			1400:{
				items: 1
			}
		}
	})

    // Clients Slider JS
	$('.clients-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		responsive:{
		   0:{
			   items: 2
		   },
		   576:{
			   items: 3
		   },
		   768:{
			   items: 3
		   },
		   992:{
			   items: 4
		   },
		   1200:{
			   items: 5
		   },
		   1400:{
			   items: 5
		   }
		}
   	})

	// Clients Slider JS
	$('.clients-slider-two').owlCarousel({
		rtl: true,
		loop: true,
		margin: 20,
		nav: false,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		responsive:{
			0:{
				items: 1
			},
			576:{
				items: 2
			},
			768:{
				items: 2
			},
			992:{
				items: 3
			},
			1200:{
				items: 4
			},
			1400:{
				items: 4
			}
		}
	})

    // Provide Slider JS
	$('.provide-slider').owlCarousel({
		loop: true,
		margin: 15,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		responsive:{
		   0:{
			   items: 1
		   },
		   576:{
			   items: 1
		   },
		   768:{
			   items: 2
		   },
		   992:{
			   items: 3
		   },
		   1200:{
			   items: 3
		   },
		   1400:{
			   items: 3
		   }
		}
   	})
	
    // Ensure Slider JS
	$('.ensure-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		responsive:{
		   0:{
			   items: 1
		   },
		   576:{
			   items: 1
		   },
		   768:{
			   items: 2
		   },
		   992:{
			   items: 3
		   },
		   1200:{
			   items: 3
		   },
		   1400:{
			   items: 3
		   }
		}
   	})
	
    // Testimonials Slider JS
	$('.testimonials-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-134-arrow-left'></i>",
			"<i class='flaticon-137-right-arrow'></i>"
	   	],
		responsive:{
		   0:{
			   items: 1
		   },
		   576:{
			   items: 1
		   },
		   768:{
			   items: 2
		   },
		   992:{
			   items: 2
		   },
		   1200:{
			   items: 2
		   },
		   1400:{
			   items: 2
		   }
		}
   	})

    // Testimonials Slider JS
	$('.testimonials-slider-warp').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		responsive:{
		   0:{
			   items: 1
		   },
		   576:{
			   items: 1
		   },
		   768:{
			   items: 2
		   },
		   992:{
			   items: 2
		   },
		   1200:{
			   items: 2
		   },
		   1400:{
			   items: 2
		   }
		}
   	})

	// PortFolio Slider JS
	window.addEventListener('DOMContentLoaded', () => {
		const slides = document.querySelectorAll('.slide');
		for (let slide of slides) {
				slide.addEventListener('click', () => {
				clearActiveClasses();
				slide.classList.add('active');
		  	});
		}
		function clearActiveClasses() { 
		  slides.forEach((slide) => {
			slide.classList.remove('active');
		  });
		}
	});

	// Popup Video JS
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

	// Odometer JS
	$('.odometer').appear(function(e) {
	  	var odo = $(".odometer");
	  	odo.each(function() {
	  		var countNumber = $(this).attr("data-count");
	  		$(this).html(countNumber);
	  	});
	});

	// Count Time JS
	function makeTimer() {
		var endTime = new Date("November 30, 2023 17:00:00 PDT");			
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days").html(days + "<span>Days</span>");
		$("#hours").html(hours + "<span>Hours</span>");
		$("#minutes").html(minutes + "<span>Minutes</span>");
		$("#seconds").html(seconds + "<span>Seconds</span>");
	}
	setInterval(function() { makeTimer(); }, 300);

	// Preloader JS
	$(window).on('load', function() {
		$('#preloader').addClass('d-none');
	});
	
	// Go to Top JS
	$(function() {
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 600) $('.go-top').addClass('active');
			if (scrolled < 600) $('.go-top').removeClass('active');
		});  
		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});
	});

	// Subscribe form JS
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
			formErrorSub();
			submitMSGSub(false, "Please enter your email correctly.");
		} 
		else {
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "Thank you for subscribing!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = "validation-success";
		} 
		else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
	}

	// ScrollCue JS
	scrollCue.init();

	// Aos JS
	AOS.init();

})(jQuery);