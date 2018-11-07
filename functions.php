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
	}
	add_action("after_setup_theme", "rightslash_bootstrapping");


	/*
	* Assets Enqueue
	*/
	function rightslash_assets(){
		wp_enqueue_style("rightslash-css", RS_THEME_ASSET . "/css/template.css", null, VERSION );

		if(is_front_page()){
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