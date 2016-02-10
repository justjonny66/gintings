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

<div class="verification">
	<img src="/wp-content/themes/ginfoundry/assets/img/logo-holding.png" />
	<p>Welcome to the home of Gin</p>
	<p>Are you of a legal drinking age in your county of residence?</p>
	<a href="#" id="yes">Yes</a><a href="http://www.google.co.uk">No</a>
</div>
	<div class="slider">
		<div style="background: url('https://pbs.twimg.com/media/CWMLpuuWEAAXvWo.jpg:large') no-repeat; background-size: cover;"></div>
		<div style="background: url('https://pbs.twimg.com/media/CWMLpuuWEAAXvWo.jpg:large') no-repeat; background-size: cover;"></div>
		<div style="background: url('https://pbs.twimg.com/media/CWMLpuuWEAAXvWo.jpg:large') no-repeat; background-size: cover;"></div>
	</div>
	<div class="content-home">
		<div class="content-left">
			<div class="box larger" style="background-image: url('/wp-content/themes/ginfoundry/assets/img/crop.jpg')">
				<h2>Helvetica Neue Medium - 24</h2>
			</div>
			<div class="box-holder-2">
				<div class="box-outside">
					<div class="box">
					<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
				<div class="box-outside">
					<div class="box">
					<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
			</div>
		</div>
		<div class="content-middle">
			<div class="content-middle-full">
				<div class="box-outside">
					<div class="boxes" style="background-image: url('http://www.ginfoundry.com/wp-content/uploads/2016/01/cu-2-min.jpg')">
						<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
				<div class="box-outside">
					<div class="boxes" style="background-image: url('http://www.ginfoundry.com/wp-content/uploads/2016/01/east-london-dry-gin_src_1-min.jpg')">
						<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
				<div class="box-outside">
					<div class="boxes" style="background-image: url('http://www.ginfoundry.com/wp-content/uploads/2016/01/Double-Dutch-Vodka.jpg')">
						<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
			</div>
			<div class="content-middle-full-one">
				<div class="boxes larger" style="background-image: url('/wp-content/themes/ginfoundry/assets/img/gincrop.jpg')">
					<h2>Helvetica Neue Medium - 24</h2>
				</div>
			<!--<div class="box">
				<h2>Helvetica Neue Medium - 24</h2>
			</div>-->
			</div>
			<div class="content-middle-full">
				<div class="box-outside">
					<div class="boxes">
						<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
				<div class="box-outside">
					<div class="boxes">
						<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
				<div class="box-outside">
					<div class="boxes">
						<h2>Helvetica Neue Medium - 24</h2>
					</div>
					<p>Caslon - Regular - 13 with hyphenation. Caslon - Regular - 13 with hyphenation </p>
				</div>
			</div>
		</div>
		<div class="content-right">
			<input type="text" class="txt" />
			<input type="submit" class="sbt" />
			<ul class="social">
				<li class="sl1"><a href="#">Twitter</a></li>
				<li class="sl2"><a href="#">Facebook</a></li>
				<li class="sl3"><a href="#">Google</a></li>
				<li class="sl4"><a href="#">Email</a></li>
				<li class="sl5"><a href="#">Email</a></li>
				<li class="sl6"><a href="#">Email</a></li>
			</ul>
			<div class="box">
				
			</div>
			<div class="box">
				
			</div>
			<div class="box">
				
			</div>
			<div class="box">
				
			</div>
			
		</div>
	</div>

<?php
get_sidebar();
get_footer();
