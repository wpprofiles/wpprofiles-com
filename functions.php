<?php
/**
 * Theme-specific functions.
 *
 * @package WPProfiles
 * @subpackage WPProfiles-Com
 * @since 0.0.1
 * @version 0.0.1
 */

function wpprofilescom_setup() {

	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'wpprofilescom' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'wpprofilescom-featured-image', 2000, 1200, true );

	add_image_size( 'wpprofilescom-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'wpprofilescom' ),
			'social' => __( 'Social Links Menu', 'wpprofilescom' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

}

add_action( 'after_setup_theme', 'wpprofilescom_setup' );
