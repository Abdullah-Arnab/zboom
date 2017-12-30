<?php 

function  zboom_default_functions(){
	add_theme_support( 'title' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background;' );

	load_theme_textdomain( 'zboom', get_template_directory_uri().'/languages');
	if(function_exists('register_nav_menu')){
		register_nav_menu( 'main-menu', __('Main Menu', 'zboom') );
	}

	register_post_type( 'zboomslider', array(
		'labels' => array(
		 	'name' => 'Sliders'
		),
		'public' => true,
		'supports' => array('title','thumbnail')

	));

	register_post_type( 'zboomservices', array( 
		'labels' => array(
			'name' => 'Blocks'
		),
		'public' => true,
		'supports' => array('title', 'editor') 
	));
	
}

add_action( 'after_setup_theme', 'zboom_default_functions');