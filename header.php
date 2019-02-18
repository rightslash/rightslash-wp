<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">
    
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="google-site-verification" content="sG9BHmJwSpU-T3RIfHA_ZfxOMAGHQ8GEh8vXcBLcQRM" />

	<link rel="shortcut icon" href="<?php echo RS_THEME_URI; ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo RS_THEME_URI; ?>/favicon.ico" type="image/x-icon" />
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TL8FB6P');</script>
	<!-- End Google Tag Manager -->

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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TL8FB6P"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

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
			</div>
		</div>
	</nav>