<?php 
	
	/*
	* Version to avoid cache burst
	*/
	define("VERSION", time());


	/* Theme CDN */
	define("RS_THEME_URI", get_template_directory_uri());
	define("RS_THEME_ASSET", RS_THEME_URI . "/assets");


	/*
	* Theme initialization
	*/
	function rightslash_bootstrapping(){
		load_theme_textdomain("rightslash");
		add_theme_support("post-thumbnails");
		add_theme_support("title-tag");
		register_nav_menu("topmenu", __("Top Menu", "rightslash"));
	}
	add_action("after_setup_theme", "rightslash_bootstrapping");


	/*
	* Assets Enqueue
	*/
	function rightslash_assets(){
		
		wp_enqueue_style("animate-css", "//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css", null, VERSION );
		wp_enqueue_style("fontawesome-css", "//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", null, VERSION );

		if(!is_page('intro')){
			wp_enqueue_style("bootstrap-css", "//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css", null, VERSION );
			wp_enqueue_style("owl-carousel-css",  RS_THEME_ASSET . "/css/owl.carousel.min.css", null, VERSION );
			wp_enqueue_style("rightslash-css", RS_THEME_ASSET . "/css/template.css", null, VERSION );


			wp_enqueue_script("bootstrap-js", "//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array("jquery"), VERSION, true);
			wp_enqueue_script("easing-js", "//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js", array("jquery"), VERSION, true);
			
			//wp_enqueue_script("circle-progress-js", "//cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.1.3/circle-progress.min.js", array("jquery"), VERSION, true);	
			wp_enqueue_script("owl-carousel-js", RS_THEME_ASSET . "/js/owl.carousel.min.js", array("jquery"), VERSION, true);
			wp_enqueue_script("wow-js", "//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js", array("jquery"), VERSION, true);
			wp_enqueue_script("typed-js", RS_THEME_ASSET . "/js/typed.min.js", array("jquery"), VERSION, true);	
			wp_enqueue_script("rightslash-theme-js", RS_THEME_ASSET . "/js/theme.js", array("jquery"), VERSION, true);
		}

		if(is_page('intro')){
			wp_enqueue_style("intro-css", RS_THEME_ASSET . "/css/intro.css", null, VERSION );
			wp_enqueue_script("modal-js", RS_THEME_ASSET . "/js/modal-effect.js", array("jquery"), VERSION, true);
			wp_enqueue_script("intro-js", RS_THEME_ASSET . "/js/intro.js", array("jquery"), VERSION, true);
		}		
	}
	add_action("wp_enqueue_scripts", "rightslash_assets");

	/*
	* Email sent function for intro page contact mail
	*/
	function rightslash_send_email(){
		$name = $_REQUEST['name'];
		$sub = $_REQUEST['subject'];
		$msg = $_REQUEST['message'];
		$email = $_REQUEST['email'];
		$body = "Name: $name. <br>".
		"Email: $email. <br>".
		"$msg.";

		$to = "rightslash24@gmail.com";
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: $name <$email> \r\n";
		$headers .= "Reply-To: $email \r\n";
		mail($to, $sub, $body, $headers);
		//if($mail){
	    	//echo "Email Sent Successfully";
        //}
	}
	add_action("wp_ajax_send_email", "rightslash_send_email");
	add_action("wp_ajax_nopriv_send_email", "rightslash_send_email");

	/*
	* Nav menu css clss
	*/
	function rightslash_nav_menu_class($classes, $item){
		$classes[] = "nav-item";
		return $classes;
	}
	add_filter("nav_menu_css_class", "rightslash_nav_menu_class", 10,2);

	/*
	* Widget init
	*/
	// Mail subscription widget
	function rightslash_sidebar(){
		register_sidebar(
			array(
				"name" => __("Email Subscription", "rightslash"),
				"id"   => "sidebar-1",
				"description" => __("Email Subscription section", "rightslash"),
				"before_widget" => '<div id="%1$s" class="widget %2$s">',
				"after_widget" => "</div>",
				"before_title" => "<h4 class='wow zoomIn' data-wow-delay='.3s'>",
				"after_title" => "</h4>"
			)
		);
	}
	add_action("widgets_init", "rightslash_sidebar");

	// contact form 7 auto p tag
	add_filter("wpcf7_autop_or_not", "__return_false");