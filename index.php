<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPProfiles
 * @subpackage WPProfiles-Com
 * @since 0.0.1
 * @version 0.0.1
 */

?>

<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title>wpprofiles.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon-precomposed" href="assets/favicon.png">
	<link rel="icon" href="assets/favicon.png">
	<link rel="mask-icon" href="assets/favicon.svg" color="#5AB8E1">
	<link rel="shortcut icon" href="assets/favicon.png">

	<meta name="theme-color" content="#fafafa">

	<?php wp_head(); ?>
</head>

<body>
	<!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<div class="box heavy centre-hv coming-soon">
		<h1>Coming 2020</h1>
		<p>WP Profiles is a set of plugins and a service which allows you to display beautifully styled profiles of your users. Ideal for universities, colleges, or any organization with large numbers of people.</p>
	</div><!-- .box -->

	<?php wp_footer(); ?>

</body>

</html>
