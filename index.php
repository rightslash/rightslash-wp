<?php
	/*
	*	Front Page
	*/
	get_header();
?>

<?php  
	if(!isset($_COOKIE['intro'])){
		/*
		* Intro part
		*/
		get_template_part("templates/content", "intro");
	}
	else{
?>

<div class="container">
	<div class="row">
		<?php  
			if(have_posts()){
				while (have_posts()) {
					the_post();

					the_content();
				}
			}
		?>
	</div>
</div>

<?php } ?>

<?php get_footer(); ?>