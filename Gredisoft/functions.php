<?php
/*This file is part of Gredisoft, jetblack child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function Gredisoft_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'Gredisoft_enqueue_child_styles' );

/*Write here your own functions */

// Load overiding scripts 
function load_scripts() {

    // Script for overiding dom contents with js
    wp_register_script('overrides', get_stylesheet_directory_uri() . '/assets/js/overrides.js', array(), 1, 1, 1);
    wp_enqueue_script('overrides');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add font awesome
function enqueue_load_fa() {
	wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
