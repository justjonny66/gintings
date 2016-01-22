<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ginfoundry
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
 
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<script src="/wp-content/themes/ginfoundry/js/main.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header" role="banner">

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="nav-holder">
			<ul class="main-nav">
				<li><a href="#" class="link1">Gin</a></li>
				<li><a href="#" class="link2">Features</a></li>
				<li class="logo"><a href="#"></a></li>
				<li><a href="#" class="link3">Castings</a></li>
				<li><a href="#" class="link4">Shop</a></li>
			</ul>
		</div>
		<ul class="gin-nav" id="div1">
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
		</ul>
		<ul class="features-nav" id="div2">
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
		</ul>
		<ul class="castings-nav" id="div3">
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
		</ul>
		<ul class="shop-nav" id="div4">
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
			<li><a href="">Gin1</a></li>
		</ul>
		
		<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
<div id="page" class="site">

	<div id="content" class="site-content">
