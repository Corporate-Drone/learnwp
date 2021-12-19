<?php 

// Including stylesheet and script files
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', array(), '4.0.0', 'all' );	
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Main configuration function
function learnwp_config(){

	// Registering our menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

	$args = array(
		'height' => 225,
		'width' => 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image') );

}
add_action( 'after_setup_theme', 'learnwp_config', 0 );