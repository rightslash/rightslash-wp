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
?>

<div class="home-container">
	<div class="main-banner">
		<img src="<?php echo RS_THEME_ASSET ?>/images/rs-banner-1.png" title="Right Slash Banner" class="banner-img" alt="Right Slash Banner">
		<div class="banner-content" id="typed"></div>
	</div>

	<section class="content-section why-rs parallax1">
		<h1 class="wow fadeIn" data-wow-delay=".1s" >Reason to choose Right Slash!</h1>
		<p class="wow fadeIn" data-wow-delay=".2s">We don't find fault, we find a remedy. We always value our clients.</p>

		<div class="container">
			<div class="row">
				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".1s" data-wow-duration=".2s">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<h2>Standard <strong>Work Process</strong></h2>
					<p>We maintain a standard workflow and focuses on the best possible outcome. We know the inside-outs of PSD conversions.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".3s" data-wow-duration=".2s">
					<i class="fa fa-code" aria-hidden="true"></i>
					<h2>Technically <strong>Skilled</strong></h2>
					<p>Our developers have real life work experience to perfectly understand the requirements and specifications of any PSD conversion. </p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".4s" data-wow-duration=".2s">
					<i class="fa fa-handshake-o" aria-hidden="true"></i>
					<h2>Non-Disclosure <strong>Agreement</strong></h2>
					<p>We understand and appreciate confidentiality. We will willingly sign an NDA prior to the PSD conversion.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".1s" data-wow-duration=".2s">
					<i class="fa fa-coffee" aria-hidden="true"></i>
					<h2>Free <strong>Technical Support</strong></h2>
					<p>We offer 20 days of free technical support and assistance for your CMS or Custom projects if you face any difficulty.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".3s" data-wow-duration=".2s">
					<i class="fa fa-gift" aria-hidden="true"></i>
					<h2>Discount for <strong>Returning Clients</strong></h2>
					<p>There's nothing better than having you return with us. We offer a special 10% discount for our existing customers.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".2s" data-wow-duration=".2s">
					<i class="fa fa-space-shuttle" aria-hidden="true"></i>
					<h2>Fast <strong>Turnaround Time</strong></h2>
					<p>We respect your time. Meeting the deadlines is not good enough, beating the deadlines is our expectation.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="content-section about-section" id="about">
		<h2 class="wow fadeIn" data-wow-delay=".1s">Right <span>Slash</span></h2>
		<p class="wow fadeIn" data-wow-delay=".2s">A small group of people with great skills.</p>
		<div class="container">
			<p class="about-desc wow fadeIn" data-wow-delay=".4s">We are very small but one of the world’s prominent and fast growing organizations providing front-end solutions, CMS solution with wordpress, email templates and various graphics services  to boost our client’s productivity and efficiency. Our team have earned years of experience along with expertise by serving different sectors worldwide.</p>

			<h3 class="wow fadeIn" data-wow-delay=".3s">Our Team</h3>
			<div class="row justify-content-md-center">
				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".1s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/gabrial.jpg" title="Gabrial GSM" alt="Gabrial GSM, Founder &amp; CEO of Right Slash">
					<h4>Gabrial GSM</h4>
					<span>Founder &amp; CEO</span>
				</div>

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".3s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/nick.jpg" title="Nick Patrick" alt="Nick Patrick, Project Manager of Right Slash">
					<h4>Nick Patrick</h4>
					<span>Project Manager</span>
				</div>

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".2s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/avatar-1.jpg" title="Krishan Magube" alt="Krishan Magube, Developer of Right Slash">
					<h4>Krishan Magube</h4>
					<span>Developer</span>
				</div>

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".4s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/mahbub.jpg" title="Mahbub Hasan" alt="Mahbub Hasan, Developer of Right Slash">
					<h4>Mahbub Hasan</h4>
					<span>Developer</span>
				</div>

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".1s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/victoria.jpg" title="Victoria Farare" alt="Victoria Farare, Developer of Right Slash">
					<h4>Victoria Farare</h4>
					<span>Developer</span>
				</div>
			</div>

			<div class="row justify-content-md-center">

				<!--<div class="col-md-3 team-block">
					<img src="<?php //echo RS_THEME_ASSET ?>/images/avatar-1.jpg" alt="">
					<h4>Vikenty Malakar</h4>
					<span>Web Research Analyst</span>
				</div>-->

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".1s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/avatar-1.jpg" title="Krish Martin" alt="Krish Martin, Marketing Officer of Right Slash">
					<h4>Krish Martin</h4>
					<span>Marketing Officer</span>
				</div>

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".2s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/ramy.jpg" title="Clement Ramy" alt="Clement Ramy, Head of Design of Right Slash">
					<h4>Clement Ramy</h4>
					<span>Head of Design</span>
				</div>

				<div class="col-md-2 col-sm-4 team-block wow bounceIn" data-wow-delay=".4s">
					<img src="<?php echo RS_THEME_ASSET ?>/images/samuel.jpg" title="Samuel Victor" alt="Samuel Victor, Head of DesignDesigner of Right Slash">
					<h4>Samuel Victor</h4>
					<span>Designer</span>
				</div>

				
			</div>
		</div>
	</section>

	<section class="content-section project-status-block">
		<div class="container">
			<div class="row">
				<div class="col-md-3 wow zoomIn" data-wow-delay=".1s">
					<div class="circle">
						<div class="circle-content">
							<i class="fa fa-user-plus" aria-hidden="true"></i>
							<span>30+</span>
							<strong>Happy Users</strong>
						</div>
					</div>
				</div>

				<div class="col-md-3 wow zoomIn" data-wow-delay=".2s">
					<div class="circle">
						<div class="circle-content">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<span>10+</span>
							<strong>Countries</strong>
						</div>
					</div>
				</div>

				<div class="col-md-3 wow zoomIn" data-wow-delay=".1s">
					<div class="circle">
						<div class="circle-content">
							<i class="fa fa-file-code-o" aria-hidden="true"></i>
							<span>50+</span>
							<strong>Projects Done</strong>
						</div>
					</div>
				</div>

				<div class="col-md-3 wow zoomIn" data-wow-delay=".3s">
					<div class="circle">
						<div class="circle-content">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
							<span>50K+</span>
							<strong>Followers</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content-section skill-meter-block">
		<h2 class="wow zoomIn" data-wow-delay=".1s">Our Proficiency &amp; Skills</h2>
		<p class="wow zoomIn" data-wow-delay=".2s">Checkout before hiring to <strong>Save time, money and avoid stress.</strong></p>
		<div class="container">
			<div class="row align-items-center" id="skills">
				<div class="col-md-6">
					<div class="skillbar clearfix " data-percent="80%">
						<div class="skillbar-title"><span>HTML / CSS / Javascript</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">80%</div></div>
					</div>
					
					<div class="skillbar clearfix " data-percent="85%">
						<div class="skillbar-title"><span>Bootstrap / Foundation / Skeleton</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">85%</div></div>
					</div>

					<div class="skillbar clearfix " data-percent="75%">
						<div class="skillbar-title"><span>Less / Sass</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">75%</div></div>
					</div>

					<div class="skillbar clearfix " data-percent="90%">
						<div class="skillbar-title"><span>Testing / Debugging</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">90%</div></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="skillbar clearfix " data-percent="70%">
						<div class="skillbar-title"><span>jQuery / Angular</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">70%</div></div>
					</div>

					<div class="skillbar clearfix " data-percent="65%">
						<div class="skillbar-title"><span>PHP / WordPress</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">65%</div></div>
					</div>

					<div class="skillbar clearfix " data-percent="90%">
						<div class="skillbar-title"><span>Email Conversion</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">90%</div></div>
					</div>

					<div class="skillbar clearfix " data-percent="70%">
						<div class="skillbar-title"><span>Graphics Design</span></div>
						<div class="skillbar-bar"><div class="skill-bar-percent">70%</div></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content-section portfolio-block" id="portfolio">
		<h2 class="wow zoomIn" data-wow-delay=".1s">Portfolio</h2>
		<p class="wow zoomIn" data-wow-delay=".2s">Explore our world of passion and awesomeness</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<ul class="portfolio-gallery">
						<li class="wow bounceIn" data-wow-delay="0.1s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/ecommerce.jpg" alt="e-commerce Template" title="Template Design + PSD to HTML">
								<figcaption>
									<h5>Template Design + PSD to HTML</h5>
									<p>E-commerce template design including 7 inner pages and also code to responsive HTML for one of our Indonesian client</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.2s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/psd-to-wp.jpg" alt="PSD to WordPress" title="Template Desing + PSD to WP">
								<figcaption>
									<h5>Template Desing + PSD to WP</h5>
									<p>Business template design for one of our Bangladesh client and also converted to functional wordpress theme</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay=".1s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/psd-to-html-medicare.jpg" alt="PSD to HTML" title="PSD to HTML">
								<figcaption>
									<h5>PSD to HTML</h5>
									<p>Converted PSD design to Responsive HTML tempalte for one of our existing client</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.3s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/psd-to-html.jpg" alt="PSD to HTML" title="PSD to HTML">
								<figcaption>
									<h5>PSD to HTML</h5>
									<p>Converted PSD design to Responsive HTML tempalte with several javascript functions for one of our USA client</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.2s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/web-app.jpg" alt="Web App" title="Web App">
								<figcaption>
									<h5>Web App</h5>
									<p>Web app developed for one of our Bangladeshi client Invite Group</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.1s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/nsl-brochure.jpg" alt="Brochure Design" title="Brochure Design">
								<figcaption>
									<h5>Brochure Design</h5>
									<p>Brochure design plus total branding for a shipping line</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.3s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/wp-mudev.jpg" alt="Business Card" title="Business Card">
								<figcaption>
									<h5>Business Card</h5>
									<p>Business Card design for a team member of wpmudev</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.1s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/anchor-creative.jpg" alt="Logo Design" title="Logo Design">
								<figcaption>
									<h5>Logo Design</h5>
									<p>Logo Design for a local organization</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.1s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/sofrware-station.jpg" alt="Logo Design" title="Logo Design">
								<figcaption>
									<h5>Logo Design</h5>
									<p>Logo Design and Web template design for a web base training station</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.3s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/gadget-life.jpg" alt="Logo Design" title="Logo Design">
								<figcaption>
									<h5>Logo Design</h5>
									<p>Logo Design for Gadget Life</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.2s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/go-mobi.jpg" alt="Logo Design" title="Logo Design">
								<figcaption>
									<h5>Logo Design</h5>
									<p>Logo Design for Go Mobi</p>
								</figcaption>
							</figure>
						</li>

						<li class="wow bounceIn" data-wow-delay="0.1s">
							<figure>
								<img src="<?php echo RS_THEME_ASSET ?>/images/portfolio/jm-global.jpg" alt="Logo Design" title="Logo Design">
								<figcaption>
									<h5>Logo Design</h5>
									<p>Logo Design plus total branding for JM Global Study</p>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="flash-order-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-8 col-xs-12 text-sm-left text-center wow fadeIn">
					<p>Impressed with our work?</p>
					<h4>Start building your business with <span>Right Slash</span></h4>
				</div>
				<div class="col text-sm-right text-center wow fadeIn">
					<a href="/start-project/" class="btn btn-rs">Order Now</a>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="service-wrap">
		<section class="content-section service-section psdtohtml" id="psdtohtml">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 text-md-right text-center order-md-12 wow fadeInRight">
						<img src="<?php echo RS_THEME_ASSET ?>/images/psd-to-html.png" alt="PSD to HTML service" title="PSD to HTML service">
					</div>
					<div class="col-md-7 order-md-1 wow fadeInLeft">
						<h3>PSD to <span>HTML</span></h3>
						<p class="service-meta">We deliver top-notch PSD to HTML Conversion to bring life to your designs.</p>
						<p class="service-desc">We deliver hand-coded, Pixel perfect, W3C standard responsive layouts that are high on quality. We develop Bootstrap-based projects, work with Retina-ready designs and a bunch of JavaScript features.<br><br><span>Ready for the best PSD to HTML service?</span></p>
						<p class="service-price">Starts at $89</p>
						
						<div class="service-btn-group">
							<a href="/start-project/?service-type=PSD%20to%20HTML" class="btn btn-rs order-btn">Order Now</a><span class="rs-btn-divider"> or </span><a href="/get-a-quote/?service-type=PSD%20to%20HTML" class="rs-quote-link">Request a quote</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="content-section service-section psdtowp" id="psdtowp">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 text-md-left text-center wow fadeInLeft">
						<img src="<?php echo RS_THEME_ASSET ?>/images/psd-to-wp.png" alt="PSD to Wordpress service" title="PSD to Wordpress service">
					</div>
					<div class="col-md-7 wow fadeInRight">
						<h3>PSD to <span>WordPress</span></h3>
						<p class="service-meta">We develop fast and easy-to-manage WordPress sites for you.</p>
						<p class="service-desc">We offer PSD to CMS based website development with WordPress. We provide you simple, but powerful solutions to get your site up and running.<br><br><span>Ready for an awesome PSD to WordPress service?</span></p>
						<p class="service-price">Starts at $199</p>
						
						<div class="service-btn-group">
							<a href="/start-project/?service-type=PSD%20to%20Wordpress" class="btn btn-rs order-btn">Order Now</a><span class="rs-btn-divider"> or </span><a href="/get-a-quote/?service-type=PSD%20to%20Wordpress" class="rs-quote-link">Request a quote</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="content-section service-section psdtoemail" id="psdtoemail">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 text-md-right text-center order-md-12 wow fadeInRight">
						<img src="<?php echo RS_THEME_ASSET ?>/images/psd-to-email.png" alt="PSD to Email Service" title="PSD to Email Service">
					</div>
					<div class="col-md-7 order-md-1 wow fadeInLeft">
						<h3>PSD to <span>Email</span></h3>
						<p class="service-meta">Get your Designs converted into fast loading, responsive Emails.</p>
						<p class="service-desc">We offer PSD to Email template with quality code and cross-platform compatible feature with just one business day turnaround. Take your email marketing to the next level.<br><br><span>Ready for the responsive PSD to Email service?</span></p>
						<p class="service-price">Starts at $69</p>
						
						<div class="service-btn-group">
							<a href="/start-project/?service-type=PSD%20to%20Email" class="btn btn-rs order-btn">Order Now</a><span class="rs-btn-divider"> or </span><a href="/get-a-quote/?service-type=PSD%20to%20Email" class="rs-quote-link">Request a quote</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="content-section service-section graphicsdesign" id="graphicsdesign">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 text-md-left text-center wow fadeInLeft">
						<img src="<?php echo RS_THEME_ASSET ?>/images/graphic-design.png" alt="Graphics Design services" title="Graphics Design services">
					</div>
					<div class="col-md-7 wow fadeInRight">
						<h3>Graphics <span>Design</span></h3>
						<p class="service-meta">Make your brand standout to other by unique design.</p>
						<p class="service-desc">We offer web template design, email template design, and offcourse the real branding for your business with logo, business card, flyers, brochures, power-point presentations, ads, banners and many more..<br><br><span>Ready to get your Visual identity?</span></p>
						<p class="service-price">Starts at $49</p>
						
						<div class="service-btn-group">
							<a href="/start-project/?service-type=Graphics%20Design" class="btn btn-rs order-btn">Order Now</a><span class="rs-btn-divider"> or </span><a href="/get-a-quote/?service-type=Graphics%20Design" class="rs-quote-link">Request a quote</a>

						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="content-section why-rs our-features">
		<h2 class="wow zoomIn feature-title" data-wow-delay=".1s">What you get working with us?</h2>
		<p class="wow zoomIn" data-wow-delay=".2s">Here’s a quick overview of the advantages you receive.</p>

		<div class="container">
			<div class="row">
				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".2s" data-wow-duration=".2s">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					<h2>100% Hand-coded</h2>
					<p>To avoid technical errors we implement 100% hand coded, semantic coding techniques which also help your site become seo friendly and enhance the performance.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".1s" data-wow-duration=".2s">
					<i class="fa fa-file-code-o" aria-hidden="true"></i>
					<h2>Web Standards</h2>
					<p>Quality is our key! We follow W3C coding standards which helps to remove errors in coding, if any, and guarantee the same naming convention every time.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".3s" data-wow-duration=".2s">
					<i class="fa fa-rocket" aria-hidden="true"></i>
					<h2>Fast Loading Speed</h2>
					<p>Our conversion process has a well-categorized structure that use optimized images and animations so that the web page remains lightweight and increase website speed.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".1s" data-wow-duration=".2s">
					<i class="fa fa-window-maximize" aria-hidden="true"></i>
					<h2>Cross-browser Compatibility</h2>
					<p>Our templates look great on all modern web browsers. We rarely use simulators - we test our projects on real browsers on many platform.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".2s" data-wow-duration=".2s">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<h2>Mobile Device Compatibility</h2>
					<p>You don't need responsive template but you want it to look good on mobile devices? We'll optimize it for mobile devices. Our templates look great on all decices.</p>
				</div>

				<div class="col-md-4 why-rs-content wow zoomIn" data-wow-delay=".1s" data-wow-duration=".2s">
					<i class="fa fa-cog" aria-hidden="true"></i>
					<h2>Easy to Integrate With Any CMS</h2>
					<p>Our code is fully commented and well structured. We follow the best coding practices which makes it easily integratable with any CMS.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="content-section testimonial-block">
		<!--<h2>WORDS FROM <span>Happy clients</span></h2>-->
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="owl-carousel">
						<div class="testimonial-item">
							<div class="testimonial-thumb">
								<img src="<?php echo RS_THEME_ASSET ?>/images/janek.jpg" class="rounded-circle" alt="Janek Laika" title="Janek Laika, Tallinn - Estonia">
							</div>
							<div class="testimonial-content">
								<p>They were excellent to work with! Not only were all my requirements fulfilled but also provided answers and coding to questions/problems I might have not known to ask at first. Really helpful in all matters and the end result is way better than I had initially expected. Will definately use Their services again in the future! Thanks!</p>
								<span class="testimonial-meta">Janek Laika<br><span>Tallinn, Estonia</span></span>
							</div>
						</div>

						<div class="testimonial-item">
							<div class="testimonial-thumb">
								<img src="<?php echo RS_THEME_ASSET ?>/images/irentcanada.jpg" class="rounded-circle" alt="Jacob Rapote" title="Jacob Rapote, iRentCanada - Canada">
							</div>
							<div class="testimonial-content">
								<p>Right Slash did an amazing job! did exactly what I wanted only explaining 1 time! Their communication, skills, and availability were amazing! i will truly rehire them on our next project!</p>
								<span class="testimonial-meta">Jacob Rapote<br><span>iRentCanada, Canada</span></span>
							</div>
						</div>

						<div class="testimonial-item">
							<div class="testimonial-thumb">
								<img src="<?php echo RS_THEME_ASSET ?>/images/darren-russel.jpg" class="rounded-circle" alt="Darren Russell" title="Darren Russell, Lighthouse Point - United States">
							</div>
							<div class="testimonial-content">
								<p>They are the best I have worked with so far. They are extremely efficient, communicates well, gets the job done right the first time. I will continue to work with them for many years.<br>I would recommend to anyone who is also going to use them for their business!</p>
								<span class="testimonial-meta">Darren Russell<br><span>Lighthouse Point, United States</span></span>
							</div>
						</div>	

						<div class="testimonial-item">
							<div class="testimonial-thumb">
								<img src="<?php echo RS_THEME_ASSET ?>/images/super-coffee.jpg" class="rounded-circle" alt="Super Coffee Coy" title="Super Coffee Coy, Brisbane - Australia">
							</div>
							<div class="testimonial-content">
								<p>We had a project with a tight timeframe. They assessed the requirements and then committed when they were sure that they could deliver. A very happy and professional outcome, delivered on time.</p>
								<span class="testimonial-meta">Super Coffee Coy<br><span>Brisbane, Australia</span></span>
							</div>
						</div>	

						<div class="testimonial-item">
							<div class="testimonial-thumb">
								<img src="<?php echo RS_THEME_ASSET ?>/images/adam.jpg" class="rounded-circle" alt="Adam Rosenkoetter" title="Adam Rosenkoetter, Atlanta - United States">
							</div>
							<div class="testimonial-content">
								<p>They did a great job on our site build and was very communicative all along the way. They are very easy to work with and works well under a deadline. All code created was executed in a top-notch manner.</p>
								<span class="testimonial-meta">Adam Rosenkoetter<br><span>Atlanta, United States</span></span>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content-section process-block" id="approach">
		<h2 class="wow zoomIn" data-wow-delay=".1s">Process we follow</h2>
		<p class="wow zoomIn" data-wow-delay=".2s">Working hard and working smart- sometimes can be two different thing.<br>We follow some smart process.</p>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 process-step wow zoomIn" data-wow-delay=".1s">
					<div class="process-icon" data-step="1">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
					</div>
					<h3>Place your order</h3>
					<p>Place your order including your project requirements along with the corresponding files and complete the 10% upfront payment to send it to production.</p>
				</div>

				<div class="col-md-4 process-step wow zoomIn" data-wow-delay=".2s">
					<div class="process-icon" data-step="2">
						<!--<i class="fa fa-list-alt" aria-hidden="true"></i>-->
						<i class="fa fa-eye" aria-hidden="true"></i>
					</div>
					<h3>Review details</h3>
					<p>Once we receive files and details, a manager will review the project and clear every part with you. We need you to mention everything essential so that we can finish on time and of the highest quality.</p>
				</div>

				<div class="col-md-4 process-step wow zoomIn" data-wow-delay=".1s">
					<div class="process-icon" data-step="3">
						<i class="fa fa-cogs" aria-hidden="true"></i>
					</div>
					<h3>Production</h3>
					<p>Once we get everything clear our manager will transfers your project to production according to their experties, keeping you in the loop.</p>
				</div>
			</div>
			
			<div class="row justify-content-md-center wow zoomIn" data-wow-delay=".2s">
				<div class="col-md-4 process-step">
					<div class="process-icon" data-step="4">
						<i class="fa fa-filter" aria-hidden="true"></i>
					</div>
					<h3>Testing</h3>
					<p>After the production part our QA specialist carefully goes through it to make sure it follows our standards and your requirements, double-check all bugs and make any tweaks and adjustments needed.</p>
				</div>

				<div class="col-md-4 process-step wow zoomIn" data-wow-delay=".1s">
					<div class="process-icon" data-step="5">
						<i class="fa fa-smile-o" aria-hidden="true"></i>
					</div>
					<h3>Enjoy the Result</h3>
					<p>Once you are completely satisfied with the outcome and pay the remaining bills, we grant you access to all source files with 20 days of free technical support and assistance.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="flash-order-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-8 col-xs-12 text-sm-left text-center wow fadeIn">
					<p>Impressed with our work?</p>
					<h4>Start building your business with <span>Right Slash</span></h4>
				</div>
				<div class="col text-sm-right text-center wow fadeIn">
					<a href="/start-project/" class="btn btn-rs">Order Now</a>
				</div>
			</div>
		</div>
	</div>

	<section class="content-section blog-section" id="blog">
		<h2>Latest Blog Posts</h2>
		
		<div class="container">
			<div class="row">
				<div class="col"><p class="text-center">Sorry! no blog post to show.</p></div>
				
				<?php /*<div class="col-md-4 blog-section-post">
					<figure>
						<img src="<?php echo RS_THEME_ASSET ?>/images/blog/blog-1.jpg" alt="">
					</figure>
					<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
					<div class="blog-section-meta">
						<ul>
							<li><span>December 11, 2018</span> by </li>
							<li><a href="">Gabrial R.</a></li>
						</ul>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque possimus quod ab, saepe inventore sit sequi architecto minus!</p>
					<a href="#">Read more..</a>
				</div>

				<div class="col-md-4 blog-section-post">
					<figure>
						<img src="<?php echo RS_THEME_ASSET ?>/images/blog/blog-2.jpg" alt="">
					</figure>
					<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
					<div class="blog-section-meta">
						<ul>
							<li><span>December 11, 2018</span> by </li>
							<li><a href="">Gabrial R.</a></li>
						</ul>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque possimus quod ab, saepe inventore sit sequi architecto minus!</p>
					<a href="#">Read more..</a>
				</div>

				<div class="col-md-4 blog-section-post">
					<figure>
						<img src="<?php echo RS_THEME_ASSET ?>/images/blog/blog-3.jpg" alt="">
					</figure>
					<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
					<div class="blog-section-meta">
						<ul>
							<li><span>December 11, 2018</span> by </li>
							<li><a href="">Gabrial R.</a></li>
						</ul>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque possimus quod ab, saepe inventore sit sequi architecto minus!</p>
					<a href="#">Read more..</a>
				</div> */ ?>
			</div>
			
		</div>
	</section>

	<div class="intro-flash">
		<div class="intro-flash-inner">
			<div class="container">
				<div class="row align-items-center  intro-flash-container">
					<div class="col text-md-center">
						<p>Excited to check our Intro page again?</p>
						<a href="#" class="btn btn-rs">Go To Intro Page</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="content-section mail-subscribe-block">
		<div class="container">
			<div class="row justify-content-center">
				<div class="subscribe-form wow zoomIn" data-wow-delay=".1s">
					<?php  
						if(is_active_sidebar("sidebar-1")){
							dynamic_sidebar("sidebar-1");
						}
					?>
				</div>
			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>