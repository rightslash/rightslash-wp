;

(function($){
	//"use strict"; // Start of use strict

	/*******************************
    *   Function for Set cookie
    ********************************/
    function setCookie(cname, cvalue, expireDate) {
      var d = new Date();
      d.setTime(d.getTime() + (expireDate * 24 * 60 * 60 * 1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    // Smooth scrolling using jQuery easing
	$('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: (target.offset().top - 50)
	        }, 2000, "easeOutQuad");
	        //return false;
	      }
	    }

	    // Closes responsive menu when a scroll trigger link is clicked
	    $('.navbar-collapse').collapse('hide');
	});


	// Activate scrollspy to add active class to navbar items on scroll
	$('body').scrollspy({
	    target: '#main-nav',
	    offset: 56
	});

	// Collapse Navbar
	var navbarCollapse = function() {
	    if ($("#main-nav").offset().top > 50) {
	      $("#main-nav").addClass("navbar-shrink");
	    } else {
	      $("#main-nav").removeClass("navbar-shrink");
	    }
	};
	// Collapse now if page is not at top
	navbarCollapse(900);
	// Collapse the navbar when page is scrolled
	$(window).scroll(navbarCollapse);



	/**
	 * Circle progress 
	 *Exampe from https://kottenator.github.io/jquery-circle-progress/
	*/
	//jQuery(window).on('scroll', function(){
		var progressBarOptions = {
			startAngle: -1.5,
			size: 200,
			value: 1,
			thickness: '2',
			animation: {
		        duration: 3700,
		        easing: 'circleProgressEasing'
		    },
			fill: {
				color: "#e2e2e2" //32ec00
			}
		};
		//var	progressT = jQuery('.project-status-block').offset().top;
		
		//if(winT + winH > progressT){
			$(".circle")
				.circleProgress(progressBarOptions)
				.one("circle-animation-progress", function(event, progress, stepValue) {
					//$(this).find("strong").text(String(stepValue.toFixed(2)).substr(1));
			});
		//}

	//});
	

	//Typed
	document.addEventListener('DOMContentLoaded', function() {
	  var typed = new Typed('#typed', {
	    strings: ['<span>Talent without working hard is nothing. We have no special talent.</span><br><span class="last-child">We are only passionately curious.</span>'],
	    typeSpeed: 30,
	    backSpeed: 0,
	    fadeOut: true,
	    loop: false
	  });
	});


	// Skiil meter
	var skillsDiv = jQuery('#skills');

	jQuery(window).on('scroll', function(){
		var winT = jQuery(window).scrollTop(),
	  	winH = jQuery(window).height(),
	  	skillsT = skillsDiv.offset().top;
	  	if(winT + winH  > skillsT){
		  	jQuery('.skillbar').each(function(){
		      jQuery(this).find('.skillbar-bar').animate({
		        width:jQuery(this).attr('data-percent')
		      },3000);
		    });
		}
	});


	/*testimonial*/
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    responsiveClass:true,
	    items:1,
	    nav:false,
	    dots:true,
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    autoplaySpeed: 3500
	});

})(jQuery);