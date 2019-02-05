<script>
	(function($){

		/*************************************************************
		*	Contact Form Start
		**************************************************************/
		$('.contact').click(function(){
			$('.dark').css('opacity',1);
			$('.letterbox').css('z-index',2900);
			$('.contactForm').show().animate({
				height: '62px',
				bottom : '51px'
			},{duration :800,queue:true});
			
			$('.contactForm').show().animate({
				bottom: '174%',
				right : '400%',
				height: '0px',
				width: '0px'
			},800,function(){
				$('.md-modal').show();
				$('.dark').fadeIn(700);
				$('.md-trigger').click();

				
				$('.contactForm').css({
					'dispaly':'none',
					'width': '53px',
					'bottom': '112px',
					'right': '11px'
				});
			});
			return false;
		});

		function ValidateEmail(email) {
	        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	        return expr.test(email);
	    };
	    
		$('.sendBtn').click(function(){
			$('p').removeClass('warning');
			var sub = $("input[name='subject']");
			var msg = $("textarea[name='message']").val();
			var name = $("input[name='name']");
			var email = $("input[name='email']");
			
			if(sub.val() != "" && name.val() != "" && ValidateEmail(email.val())){
				$('.sendBtn').slideUp(100);
				$('.thankyou').fadeIn(400);

				
		        $.ajax({
				  method: "POST",
				  url: '<?php echo admin_url('admin-ajax.php');?>',
				  data: {action: 'send_email', subject: sub.val(), name: name.val(), message: msg, email: email.val()},
				  success: function(response) {
			        $('.md-modal').animate({
						height: '30px',
						width: '30px',
						top: '-20%',
						opacity: 0
					},900,function(){
						$('.md-modal').css({
							'height' : 'auto',
							'width' : 'auto',
							'opacity' : 1,
							'top' : '50%'
						}).removeClass('md-show');
					});
					$('.md-modal').hide(500);
					$('#contact-form')[0].reset();
					$('.dark').delay(300).fadeOut(400).hide(50,function(){
						$('.sendBtn').show();
						$('.thankyou').hide();
					});
			      }
				});
				
			}
			else if(sub.val() == ""){
				sub.parent('p').addClass('warning');
			}
			else if(name.val() == ""){
				name.parent('p').addClass('warning');
			}
			else
				email.parent('p').addClass('warning');

			return false;
		})

		$('.close').click(function(){
			$('#contact-form')[0].reset();
			$('.dark').fadeOut(400).css('opacity',0);
			$('.md-modal').hide(500);
			$('.letterbox').css('z-index',5000);
		})
		/*************************************************************
		*	Contact Form End
		**************************************************************/
	})(jQuery);
</script>