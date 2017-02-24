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
<meta name="google-site-verification" content="U0wjnX6QFcnS9ZfI5IJWrF2HB9HawoqIVx2GweUego0" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92278226-1', 'auto');
  ga('send', 'pageview');

</script>
<header class="main-header">
	<nav class="menu group">
		<div class="container menu__container">
		  <a class="menu__home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/whiste_logo_text_inline.svg" class="menu__logo" alt="home" />
				<span class="sr-only"><?php bloginfo( 'name' ); ?></span>
		  </a>
		  <ul class="menu__right">
				<li>
					<a href="https://app.whistle.no/" class="button login">Logg inn</a>
				</li>
		  </ul>
		</div>
	</nav>
</header>
<div class="container hero-container">