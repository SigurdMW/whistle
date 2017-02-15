<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Whistle
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<nav class="navbar navbar-toggleable-md navbar-light">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"">
	  	<span class="sr-only"><?php bloginfo( 'name' ); ?></span>
			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/whistle_purple.png" class="navbar__logo" alt="home" />
	  </a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  	<a href="" class="ml-auto">Opprett bruker</a>
	    <button>Logg in</button>
	  </div>
	</nav>
</header>