<?php
	/*
	* Template name: Contact us
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
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="page-banner contact-banner"></div>
			</div>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-md-7 contact-form">
				<h2>Drop us a line</h2>
				<p>Just choose the best way to contact us. We are here to address your mails round the clock.</p>
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