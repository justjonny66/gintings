<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ginfoundry
 */

get_header(); ?>

	<div class="slider">
		<div>your content</div>
		<div>your content 2</div>
		<div>your content 3</div>
	</div>
	<div class="content-home">
		<div class="content-left">
			<div class="box">
				<h2>Helvetica Neue Medium - 24</h2>
			</div>
		</div>
		<div class="content-middle">
			<div class="box">
				<h2>Helvetica Neue Medium - 24</h2>
			</div>
		</div>
		<div class="content-right">
		</div>
	</div>

<?php
get_sidebar();
get_footer();
