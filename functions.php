<?php

/**
 * Load the necessary scripts for this theme.
 *
 * @return void
 */
function wpprofiles_scripts() {

	wp_enqueue_style( 'wpprofilescom-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:900,300', array(), wp_get_theme()->get( 'Version' ) );

}//end wpprofiles_scripts()

add_action( 'wp_enqueue_scripts', 'wpprofiles_scripts' );
