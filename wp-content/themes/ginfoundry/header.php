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

<div class="nav-container">
  <ul class="nav">

    <li class="first"><a href="#">Gin</a>
	    <ul>
	        <li>
	          <ul class="subnav">
	            <li><a href="#">Reviews</a></li>
	            <li><a href="#">Cocktails</a></li>
	            <li><a href="#">Distillery</a></li>
	          </ul>
	        </li>
	  	</ul>
	  	<li class="first"><a href="#">Features</a>
	    <ul>
	        <li>
	          <ul class="subnav">
	            <li><a href="#">News</a></li>
	            <li><a href="#">Insight</a></li>
	            <li><a href="#">Interviews</a></li>
	            <li><a href="#">Botanicals</a></li>
	          </ul>
	        </li>
	  	</ul>
	  <li class="logo"><a href="#">LOGO</a></li>
	  <li class="first castings" class="first"><a href="#">Castings</a>
	    <ul>
	        <li>
	          <ul class="subnav">
	            <li><a href="#">Ginvent</a></li>
	            <li><a href="#">Junipalooza</a></li>
	            <li><a href="#">Ginsmith Award</a></li>
	            <li><a href="#">Atlas</a></li>
	            <li><a href="#">Ginfographic</a></li>
	          </ul>
	        </li>
	  	</ul>
	  	<li class="first"><a href="#">Shop</a>
	    <ul>
	        <li>
	          <ul class="subnav">
	            <li><a href="#">Reviews</a></li>
	            <li><a href="#">Cocktails</a></li>
	            <li><a href="#">Distillery</a></li>
	          </ul>

	        </li>
	  	</ul>
	  	
</div>


<!--

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="wrap">
  
		  <ul class="menu">
		    <li>
		      <a href="#">Gin</a>
		      <ul class="drop">
		        <li><a href="#">Bacon</a></li>
		        <li><a href="#">Pancakes</a></li>
		      </ul>
		    </li>
		    <li>
		      <a href="#">Features</a>
		      <ul class="drop">
		        <li><a href="#">Fish</a></li>
		        <li><a href="#">Lasagne</a></li>
		      </ul>
		    </li>
		    <li class="logo">Logo</li>
		    <li>
		      <a href="#">Castings</a>
		      <ul class="drop">
		        <li><a href="#">Fish</a></li>
		        <li><a href="#">Lasagne</a></li>
		      </ul>
		    </li>
		    <li>
		      <a href="#">Shop</a>
		      <ul class="drop">
		        <li><a href="#">Fish</a></li>
		        <li><a href="#">Lasagne</a></li>
		      </ul>
		    </li>
		  </ul>
		  
		</div>

		
		<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav> -->
</header>
<div id="page" class="site">

	<div id="content" class="site-content">
