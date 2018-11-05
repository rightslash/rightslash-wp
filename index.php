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
	
</body>
</html>