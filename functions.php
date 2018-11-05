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
	}
	add_action("wp_enqueue_scripts", "rightslash_assets");