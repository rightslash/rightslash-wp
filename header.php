<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">
    
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

	<?php 
		if(isset($_COOKIE['intro'])){
		?>
		<style>
			.home-container,
			.navbar,
			footer{
				display: block;
			}
		</style>
		<?php	
		}
	?>
</head>
<body <?php body_class(); ?>>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      xfbml            : true,
	      version          : 'v3.2'
	    });
	  };

	  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<nav class="navbar navbar-expand-lg fixed-top" id="main-nav">
		<div class="container">
			<a class="navbar-brand" href="<?php echo bloginfo('url'); ?>"><img src="<?php echo RS_THEME_ASSET; ?>/images/rs-logo.png" class="rs-logo" alt="Right Slash"><img src="<?php echo RS_THEME_ASSET; ?>/images/rs-logo-reverse.png" class="rs-logo-reverse" alt="Right Slash"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fa fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav">
			    	<li class="nav-item"><a href="/#about">About</a></li>
			    	<li class="nav-item"><a href="/#services">Services</a></li>
					<li class="nav-item"><a href="/#portfolio">Portfolio</a></li>
					<li class="nav-item"><a href="/#approach">Approach</a></li>
					<li class="nav-item"><a href="/#blog">Blog</a></li>
					<li class="nav-item"><a href="/contact-us">Contact us</a></li>
					<li class="nav-item start-project-btn"><a href="#">Start A Project</a></li>
			    </ul>
			</div>
		</div>
	</nav>