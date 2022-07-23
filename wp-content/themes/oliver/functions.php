<?php
/**
 * Ohio Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Oliver Theme
 * @since Oliver Theme 1.0
 */
// require files


// define
define('OLIVER_DIR_ASSETS', get_stylesheet_directory_uri() . '/assets');

add_action( 'wp_enqueue_scripts', 'oliver_child_enqueue_styles' );

function oliver_child_enqueue_styles() {

    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );

	 // style guide
	 wp_enqueue_style(
        'style-guide',
        OLIVER_DIR_ASSETS . '/css/style-guide.min.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );

	
    //home
	if(is_front_page()){
		wp_enqueue_style(
			'homepage',
			OLIVER_DIR_ASSETS . '/css/homepage.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
        // Css Slick
        wp_enqueue_style(
            'oliver-slick',
            OLIVER_DIR_ASSETS . '/css/slick.min.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
	}


    // Include JS
    wp_enqueue_script('jquery', OLIVER_DIR_ASSETS .'/js/jquery.min.js');
    if(is_front_page() || is_single() || is_page()) {
		wp_enqueue_script('slick', OLIVER_DIR_ASSETS .'/js/slick.min.js');
	}
    wp_enqueue_script('magesolution-js', OLIVER_DIR_ASSETS .'/js/theme-function.min.js');
    wp_enqueue_script('counter-up-js', OLIVER_DIR_ASSETS .'/js/counter-up.min.js');

}
