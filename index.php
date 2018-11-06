<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="4dSTZtJy9fPK3gDfCYnAe6hSR28s7stI8W6BG2znJzA" />
	

	<link rel="shortcut icon" href="<?php echo RS_THEME_URI; ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo RS_THEME_URI; ?>/favicon.ico" type="image/x-icon" />
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68783090-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-68783090-3');
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!--Page loading block-->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<p class="loading-txt">Right Slash<br>loading..</p>
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two" style="left:20px;"></div>
				<div class="object" id="object_three" style="left:40px;"></div>
				<div class="object" id="object_four" style="left:60px;"></div>
				<div class="object" id="object_five" style="left:80px;"></div>
			</div>
		</div>
	</div>

	<!--intro-wrapper start-->
	<div id="intro-wrapper">
		<div class="dark"></div>

		<div class="backLand">
	    	<img src="<?php echo RS_THEME_ASSET; ?>/images/intro/birds.gif" alt="Flying Birds" class="birds" />

	    	<div class="sun"><img src="<?php echo RS_THEME_ASSET; ?>/images/intro/sun.png" alt="Sun" /></div>

	        <div class="backHill"></div>

	        <div class="plane" id="plane"></div>

	        <div id="far-clouds" class="far-clouds stage"></div>
	        <div id="near-clouds" class="near-clouds stage"></div>

	        <div class="frontHill"></div>

	        <div class="backTree">
	        	<div class="lightHouse">
	                <img src="<?php echo RS_THEME_ASSET; ?>/images/intro/fan.gif" alt="Light House" />
	            </div>
	        </div>

	        <div class="hillLand1">
	        	<div class="intro-main-content">
		            <img src="<?php echo RS_THEME_ASSET; ?>/images/intro/home.png" alt="House" class="home1" />
		            <div class="logoBoard">
		            	<a href="<?php echo site_url(); ?>"><img src="<?php echo RS_THEME_ASSET; ?>/images/intro/logo.png" alt="Right Slash" /></a>
		            </div>
		            <div class="pump">
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/ps.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/il.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/html.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/css.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/js.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/bs.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/php.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/ms.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/wp.png" alt="" />
		            	<img src="<?php echo RS_THEME_ASSET; ?>/images/service/woo.png" alt="" />
		            </div>
	            </div>
	        </div>

	        <div class="hillLand2"></div>

	        <div class="hillLand3">
	        	<div class="intro-main-content">
		        	<div class="pond">
		                <img src="<?php echo RS_THEME_ASSET; ?>/images/intro/duck.gif" alt="Duck" class="duck" />
		                <img src="<?php echo RS_THEME_ASSET; ?>/images/intro/crows.gif" alt="Crow" class="crow" />
		                <img src="<?php echo RS_THEME_ASSET; ?>/images/intro/tree_2.png" alt="Trees" class="tree_2" />
		            </div>
		            <img src="<?php echo RS_THEME_ASSET; ?>/images/intro/tree_1.png" alt="Tree" class="tree_3" />
	            </div>
	        </div>
	        
	      
	      	<div class="parasuitWrap">
				<div class="para1">
					<a href="/web-development">Web<br>Development</a>
				</div>

				<div class="para2">
					<a href="/graphics-design">Graphics<br>Design</a>
				</div>

				<div class="para3">
					<a href="/domain-hosting">Email<br>Template</a>
				</div>

				<div class="para4">
					<a href="/domain-hosting">SMS<br>Marketing</a>
				</div>
	      	</div>
	      	
	      	<div class="letterbox">
				<a href="#" class="contact">Contact us</a>
				<button class="md-trigger"></button>
				<div class="contactForm"></div>
	      	</div>
			
			<div class="md-modal md-effect-13">
	      		<div class="md-content">
		      		<article>
		      			<span class="close">Close me!</span>
		      			<form  method="post" id="contact-form">
							<h1>Contact us</h1>
							<p class="contactInfo-one">To : <strong>Super Station</strong></p>
							<p class="contactInfo-one">Subject : <input type="text" required name="subject" class="input-box"></p>
							<p class="contactInfo-one"><textarea required name="message" class="message" cols="30" rows="10">Description : </textarea></p>
							<p class="contactInfo-one">
								<strong>Regards</strong>,<br>
								Name : <input type="text" name="name" required class="input-box"><br>
								Email : <input type="email" name="email" required class="input-box">
							</p>
							<input type="submit" class="sendBtn" value="Send Mesaage">
							<p class="thankyou"><strong>Thank you for contact with us.</strong></p>
						</form>
					</article>
				</div>
			</div>
			
	      	<div class="frontLand">
				<div class="contentLand">
					<img src="<?php echo RS_THEME_ASSET; ?>/images/intro/fench.png" alt="Fench" class="fench" />
				</div>
			</div>
	  	</div>
	    <!--/bankLand end-->
	</div>
	<!--/intro-wrapper end-->
	
	<?php wp_footer(); ?>
</body>
</html>