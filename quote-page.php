<?php
	/*
	* Template name: Quote Page
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
	<div class="order-page-banner quote-page-banner"></div>
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-7 contact-form">
				<h2>Get a quick Quote</h2>
				<p>Please provide us as much details possible and all your specific needs.</p>
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