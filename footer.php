	
	<?php  
		if(!isset($_COOKIE['intro'])){
			/*
			*	Intro contact part
			*/
			get_template_part("inc/intro", "contact");
		}

	?>

	<?php wp_footer(); ?>
</body>
</html>