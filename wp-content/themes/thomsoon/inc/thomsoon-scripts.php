<?php
/**
 * Enqueue scripts.
 */
function thomsoon_require_scripts() {

	wp_enqueue_script( 'thomsoon-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );

	wp_enqueue_script( 'thomsoon-navigation', get_template_directory_uri() . '/js/navigation.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-modernizr', get_template_directory_uri() . '/js/modernizr.custom.42534.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-waitforimages', get_template_directory_uri() . '/js/jquery.waitforimages.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-typed', get_template_directory_uri() . '/js/typed.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-jkit', get_template_directory_uri() . '/js/jquery.jkit.1.2.16.min.js', array('thomsoon-jquery'), '20151215', true );

	wp_enqueue_script( 'thomsoon-script', get_template_directory_uri() . '/js/script.js', array('thomsoon-jquery'), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thomsoon_require_scripts' );
