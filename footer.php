	
	<?php  
		if(!isset($_COOKIE['intro'])){
			/*
			*	Intro contact part
			*/
			get_template_part("inc/intro", "contact");
		}
		else{
	?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
					
						<div class="col-sm-4">
							<ul class="footer-nav">
								<li><a href="#">Services</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Approach</a></li>
								<li><a href="#">Pricing</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Sitemap</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>

						<div class="col-sm-4">
							<ul class="footer-nav">
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

						<div class="col-sm-4">
							<ul class="footer-nav">
								<li><a href="#">PSD to HTML</a></li>
								<li><a href="#">PSD to Wordpress</a></li>
								<li><a href="#">Responsive Web Design</a></li>
								<li><a href="#">PSD to Email Template</a></li>
								<li><a href="#">Logo Design</a></li>
								<li><a href="#">Graphics Design</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 footer-rights-block">
					<a href="#" class="footer-logo"><img src="<?php echo RS_THEME_ASSET; ?>/images/rs-logo.png" alt="Right Slash"></a>
					<ul class="social-links">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
					<p class="copyright">Copyright &copy; 2018 Right Slash. All Rights Reserved!</p>
				</div>
			</div>
		</div>
	</footer>

	<?php } ?>

	<?php wp_footer(); ?>
</body>
</html>