<?php
	/*
	*	Front Page
	*/
	get_header();
?>

<?php  
	if(!isset($_COOKIE['intro'])){
		/*
		*	Intro part
		*/
		get_template_part("templates/content", "intro");
	}

?>

<?php get_footer(); ?>