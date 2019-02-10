<?php
	/*
	* Template name: Order Page
	* Front Page
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

<div class="contact-page-wrapper">
	<div class="order-page-banner"></div>
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-7 contact-form">
				<h2>Start your project with us</h2>
				<p>Tell us about your project in a few words and what are you trying to achieve? And please list your specific needs here too...</p>
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
	</div>
</div>

<?php } ?>

<?php get_footer(); ?>