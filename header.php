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

<<<<<<< HEAD
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TL8FB6P');</script>
	<!-- End Google Tag Manager -->

=======
>>>>>>> 5d7fd091d3beedd01c67ac9ed5da1dd152d84c5e

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
<<<<<<< HEAD
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TL8FB6P"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

=======
>>>>>>> 5d7fd091d3beedd01c67ac9ed5da1dd152d84c5e
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
<<<<<<< HEAD
			

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <?php  
					wp_nav_menu(
						array(
							"theme_location" => "topmenu",
							"menu_id" => "navmenu",
							"container" => "",
							"items_wrap" => '<ul class="navbar-nav">%3$s</ul>'
						)
					);
				?>
=======

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
>>>>>>> 5d7fd091d3beedd01c67ac9ed5da1dd152d84c5e
			</div>
		</div>
	</nav>