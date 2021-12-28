<?php 

function learnwp_customizer( $wp_customize ){

	// Copyright
	$wp_customize-> add_section( 'sec_copyright', array(
		'title' => __( 'Copyright', 'learnwp' ) ,
		'description' => __( 'Please, type here your copyright', 'learnwp' )
	) );

	$wp_customize-> add_setting( 'set_copyright', array(
		'type' => 'theme_mod',
		'default' => __( 'Copyright X - All Rights Reserved', 'learnwp' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_copyright', array(
		'label' => __( 'Copyright Information', 'learnwp' ),
		'description' => __( 'Please, type your copyright here.', 'learnwp' ),
		'section' => 'sec_copyright',
		'settings' => 'set_copyright',
		'type' => 'text'
	) );

}

add_action( 'customize_register', 'learnwp_customizer' );