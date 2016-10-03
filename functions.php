<?php
// All theme functions are defined in this file.

// Get theme stylesheets & scripts.
function get_theme_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('masonry');
	wp_enqueue_style('masonry');
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'get_theme_scripts');

// Theme setup function. This implements all functions that are theme pre-requisites on setup.
function jack_setup() {

	// Support navigation menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
	
	// Support featured images, and define the theme image pre-defined sizes.
	add_theme_support('post-thumbnails');
	add_image_size('standard-blog-thumbnail', 200, 124, true);
	add_image_size('masonry-thumbnail', 245, 184, true);
	add_image_size('category-archive-thumbnail', 650, 140, true);
	
}

add_action('after_setup_theme', 'jack_setup');

// Custom appearance options, using WP appearance API.
function jack_customise_register( $wp_customize ) {
	
	// WP appearance settings.
	$wp_customize->add_setting('front-section1', array(
		'default' => 'Hello world!',
		'transport' => 'refresh'
	));
	
	// WP appearance sections.
	$wp_customize->add_section('jack_boxes', array(
		'title' => __('Text Boxes', 'jacktheme'),
		'priority' => 30
	));
	
	// WP appearance controls.
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'front-section1', array (
		'label' => __('front section 1', 'testlab'),
		'section' => 'jack_boxes',
		'settings' => 'front-section1'
	)));	
	
}
	
add_action('customize_register', 'jack_customise_register');