;

(function ($){
	//"use strict"; // Start of use strict
	/*
	*	On load Set height for 
	*	@	#wrapper
	*	@	.parasuitWrap
	*	@	.dark
	*	to window height
	*/
	$(window).ready(function(){
		var win_height = $(window).height();
		$('#intro-wrapper, .parasuitWrap, .dark').height(win_height + 'px');
	});

	/*
	*	After load content hide loading window
	*	@	#loading Div
	*/
	$(window).load(function() {
	    $('#loading').fadeOut(300);
	});


	$(window).load(function() {

		var devWidth = $(window).width();
		
		if(devWidth <= 767){
			$('#intro-wrapper').hide(100);
			$('.home-container,.navbar,footer').show(100);
			setCookie('intro', 1, 120);
		} 
		/*
		*	Clouds function
		*/
		setInterval(cloud1,130);
		setInterval(cloud2,200);
		function cloud1(){
			$('#near-clouds').animate({
				left: '-=1',
				width: '+=1'
			},91);
		}
		function cloud2(){
			$('#far-clouds').animate({
				left: '-=1',
				width: '+=1'
			},140);
		}
		
		/*
		*	Add active class after load for css animation
		*/
		$('#intro-wrapper').addClass('active');
		$('.dark').animate({
			opacity:0
		},7200);
		
		
		/*
		*	Calling all animation function step by step
		*/
		setTimeout(darkHide,7000); //10001
		setTimeout(planeStart,3000);
		setTimeout(parasuits,5800);//20000
		setTimeout(plane,8300);
		setTimeout(bird,14000);
		setTimeout(unlock_site, 18000);
		

		/*
		*	Function for hiding Dark bg and make contact us clickable
		*/
		function darkHide(){
			$('.dark').hide();
			$('.letterbox').css('z-index','5000');
			popupLogo(1);
		}

		/*
		*	Plane function
		*/
		function planeStart(){
			$('#plane').animate({left: '0px'},{duration :3000,queue:true});
		}
		
		function plane(){
			$('#plane').animate({left: '15%'},{duration :2000,queue:true});
			$('#plane').animate({left: '45%',top: '15%'},{duration :2000,queue:true});
			$('#plane').animate({top: '57%'},{duration :4000,queue:true});
			$('#plane').delay(3000);
			$('#plane').animate({left: '55%',top: '9%'},{duration :5000,queue:true});
			$('#plane').animate({left: '110%'},{duration :3000,queue:true});
		}
		
		/*
		*	Bird function
		*/
		function bird(){
			$('img.birds').animate({left: '110%'},16000);	
		}

		/*
		* Site unlock funtion
		*/
		function unlock_site(){
			$('.site-unlock').animate({opacity: 1},1000);
		}

		$('.site-unlock-btn').on('click', function(){
			$(this).hide(100);
			//$('.lamp-light').addClass('light-on');
			$('#intro-wrapper').slideUp(800);
			$('.home-container,.navbar').slideDown(300);
			setCookie('intro', 1, 120);
		});
		
		/*
		*	Parasuit Menu function
		*/
		function parasuits(){
			$('.parasuitWrap').show();
			
			//Parasut Div function
			function paraDiv(divElement,divPos,divSpeed){
				var	paraWidth = '164px',
					paraHeight = '230px',
					paraBotom = '2%';
				if(devWidth <= 1024){ paraWidth = '155px'; paraHeight = '220px';}
				if(devWidth <= 800){ paraWidth = '130px'; paraHeight = '187px';}

				$(divElement).animate({width: paraWidth, height: paraHeight, bottom: paraBotom, left: divPos},divSpeed,'linear');

			}
			//Parasut link function
			function paraLink(linkElement, linkSpeed){
				var linkHeight = '60px',
					linkLnHeight = linkFs = '21px',
					linkPt = '8px';
				if(devWidth <= 1024){ linkLnHeight = linkFs ='20px'; }
				if(devWidth <= 800){ linkHeight = '53px'; linkLnHeight = '17px'; linkFs ='18px'; linkPt = '9px';}

				$(linkElement).animate({height: linkHeight, lineHeight: linkLnHeight, fontSize: linkFs, paddingTop: linkPt},linkSpeed,'linear');
			}
			var menu1Left = '7%', menu2Left = '32%', menu3Left = '58%', menu4Left = '82%';
			if(devWidth <= 1024){
				menu1Left = '4%'; menu2Left = '31%'; menu3Left = '57%'; menu4Left = '81%';
			}
			if(devWidth <= 800){
				menu2Left = '29%'; menu3Left = '55%'; menu4Left = '79%';
			}

			paraDiv('.para1',menu1Left,11500);
			paraLink('.para1 a',11500);

			paraDiv('.para2',menu2Left,11000);
			paraLink('.para2 a',11000);
			
			paraDiv('.para3',menu3Left,12200);
			paraLink('.para3 a',12200);

			paraDiv('.para4',menu4Left,12800);
			paraLink('.para4 a',12800);

			$('.para1,.para2,.para3,.para4').animate({height: '71px', backgroundSize: '0%'},3500);
		}

		/*
		*	Service logo pumping
		*/
	    function popupLogo(logoVal){
	    	var img = logoVal,
	    		img_block = $('.pump img:nth-child('+img+')');
	    	img_block.addClass('logoPop');

	    	img_block.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
			    img_block.removeClass('logoPop');
			    img = img + 1;
			    if(img == 11) img = 1;
			    popupLogo(img);
	  		});
	    }
	    
	    /*
		*	Land bird function
		*/	
		if(devWidth >= 480){
			$('img.duck').animate({left: '75px'},{duration :4000,queue:true});
			$('img.duck').animate({top: '42px'},{duration :4000,queue:true});
		}


		/*******************************
	    *   Function for Set cookie
	    ********************************/
	    function setCookie(cname, cvalue, expireDate) {
	      var d = new Date();
	      d.setTime(d.getTime() + (expireDate * 24 * 60 * 60 * 1000));
	      var expires = "expires="+d.toUTCString();
	      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	    }

		
	}); 

})(jQuery);