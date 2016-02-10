<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ginfoundry
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="footer-left">
			<h4>Gin Foundry.com</h4>
			<ul>
				<li class="title">Gins</li>
				<li><a href="#">Botanicals</a></li>
				<li><a href="#">Cocktails</a></li>
				<li><a href="#">Distillery Map</a></li>
			</ul>
			<ul>
				<li class="title">Features</li>
				<li><a href="#">News</a></li>
				<li><a href="#">Insight</a></li>
				<li><a href="#">Interviews</a></li>
				<li><a href="#">Botanicals</a></li>
			</ul>
			<ul>
				<li class="title">Castings</li>
				<li><a href="#">Ginvent</a></li>
				<li><a href="#">Junipalooza</a></li>
				<li><a href="#">Ginsmith Award</a></li>
				<li><a href="#">Atlas</a></li>
				<li><a href="#">Ginfographic</a></li>
				<li><a href="#">Glasshouse</a></li>
			</ul>
			<ul>
				<li class="title">Shop</li>
				<li><a href="#">All Gin</a></li>
				<li><a href="#">Gin Foundry Range</a></li>
				<li><a href="#">Gin Brands</a></li>
				<li><a href="#">Tonics & Spirits</a></li>
			</ul>
			<ul>
				<li class="title">Information</li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Join The Team</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
		<div class="footer-right">
			<div class="box-footer">
				<?php echo do_shortcode("[poll id='3']"); ?>
			</div>
			<div class="box-social">
				<h4>Join Us</h4>
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
			</div>
		</div>
	</footer><!-- #colophon -->
	<p class="copyright">Copyright &copy; Gin Foundry</p>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
