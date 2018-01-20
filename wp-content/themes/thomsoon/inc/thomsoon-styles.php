<?php 
/**
 * Enqueue styles.
 */
function thomsoon_require_styles() {
	
	wp_enqueue_style( 'thomsoon-style-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'thomsoon-style-reset', get_template_directory_uri() . '/css/reset.css' );

	wp_enqueue_style( 'thomsoon-style-custom', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_style( 'thomsoon-style-responsive', get_template_directory_uri() . '/css/style-responsive.css' );
	
	wp_enqueue_style( 'thomsoon-style', get_stylesheet_uri(), array('thomsoon-style-reset', 'thomsoon-style-responsive', 'thomsoon-style-awesome',  'thomsoon-style-custom') );
}
add_action( 'wp_enqueue_scripts', 'thomsoon_require_styles' );