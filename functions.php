<?php 

// Requiring Theme Customizer
require get_template_directory() . '/inc/customizer.php'; 

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
			'my_main_menu' => __( 'Main Menu', 'learnwp' ),
			'footer_menu' => __( 'Footer Menu', 'learnwp' )
		)
	);

	$args = array(
		'height' => 225,
		'width' => 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image') );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height' => 110,
		'width' => 200
	) );

	$textdomain = 'learnwp';
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );


}
add_action( 'after_setup_theme', 'learnwp_config', 0 );

// Registering our sidebars
add_action( 'widgets_init', 'learnwp_sidebars' );
function learnwp_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'learnwp' ),
			'id' => 'sidebar-1',
			'description' => __( 'This is the Home Page Sidebar. You can add your widgets here. ' , 'learnwp' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Blog Sidebar', 'learnwp' ),
			'id' => 'sidebar-2',
			'description' => __( 'This is the Blog Sidebar. You can add your widgets here. ', 'learnwp' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
	register_sidebar(
		array(
			'name' => __( 'Service 1', 'learnwp' ),
			'id' => 'services-1',
			'description' => __( 'First Services Area. ', 'learnwp' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Service 2', 'learnwp' ),
			'id' => 'services-2',
			'description' => __( 'Second Services Area. ', 'learnwp' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Service 3' , 'learnwp' ),
			'id' => 'services-3',
			'description' => __( 'Third Services Area. ', 'learnwp' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Social Media Icons', 'learnwp' ),
			'id' => 'social-media',
			'description' => __( 'Social Media Icons Widget Area. Drag and drop your widgets here. ', 'learnwp' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);								
}