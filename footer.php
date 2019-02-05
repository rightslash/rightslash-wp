	
	<?php  
		if(!isset($_COOKIE['intro'])){
			/*
			*	Intro contact part
			*/
			get_template_part("inc/intro", "contact");
		}
	?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8" style="display: none;">
					<div class="row">
					
						<div class="col-sm-4">
							<ul class="footer-nav">
								<li><a href="/#services">Services</a></li>
								<li><a href="/#about">About us</a></li>
								<li><a href="/#portfolio">Portfolio</a></li>
								<li><a href="/#approach">Approach</a></li>
								<!--<li><a href="/#blog"">Blog</a></li>-->
								<!--<li><a href="#">Sitemap</a></li>-->
								<li><a href="/contact-us">Contact us</a></li>
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
								<li><a href="/#psdtohtml">PSD to HTML</a></li>
								<li><a href="/#psdtowp">PSD to Wordpress</a></li>
								<li><a href="/#psdtohtml">Responsive Web Design</a></li>
								<li><a href="/#psdtoemail">PSD to Email Template</a></li>
								<li><a href="/#graphicsdesign">Logo Design</a></li>
								<li><a href="/#graphicsdesign">Graphics Design</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-12 footer-rights-block">
					<a href="<?php echo bloginfo('url'); ?>" class="footer-logo wow zoomIn" data-wow-delay=".5s"><img src="<?php echo RS_THEME_ASSET; ?>/images/rs-logo.png" alt="Right Slash"></a>
					<ul class="social-links">
						<li class="wow zoomIn" data-wow-delay=".2s"><a href="https://www.facebook.com/rightslash" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="wow zoomIn" data-wow-delay=".5s"><a href="https://twitter.com/rightslashbd" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="wow zoomIn" data-wow-delay=".1s"><a href="https://www.linkedin.com/in/rightslash/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="wow zoomIn" data-wow-delay=".6s"><a href="https://dribbble.com/rightslash" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li class="wow zoomIn" data-wow-delay=".3s"><a href="https://www.instagram.com/rightslash/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<!--<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>-->
						<li class="wow zoomIn" data-wow-delay=".7s"><a href="https://www.youtube.com/channel/UCJLBv3UzIdplmSGn4uBKavg" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<!--<li><a href="https://vimeo.com/user94647665" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>-->

					</ul>
					<p class="copyright">Copyright &copy; 2018 Right Slash. All Rights Reserved!</p>
				</div>
			</div>
		</div>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		  attribution=setup_tool
		  page_id="481170958638265">
		</div>

		<span class="backto-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>