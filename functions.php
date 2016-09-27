<?php
// All theme functions are defined in this file.

// Get theme stylesheets & scripts.
function get_theme_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'get_theme_scripts');

// Theme setup function. This implements all functions that are theme pre-requisites on setup.
function testlab_setup() {

	// Support navigation menus
		register_nav_menus(array(
			'primary' => __( 'Primary Menu')
		));
	
	// Support featured images, and define the theme image pre-defined sizes.
	add_theme_support('post-thumbnails');
	add_image_size('standard-thumbnail', 200, 124, true);
	
}

add_action('after_setup_theme', 'testlab_setup');