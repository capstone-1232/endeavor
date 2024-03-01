<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package endeavor-theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info flex">
			<div class="logo"> 
				<?php
				the_custom_logo();
				?>
				<h1 class="screen-reader-text">Endeavor Brewing Company</h1>
			</div>

			<h4>Hours:</h4>
			<ul>
				<li>
					<span class="bold">Monday:</span>
				</li>
				<li>
					<span class="bold">Tuesday:</span>
				</li>
				<li>
					<span class="bold">Wednesday:</span>
				</li>
				<li>
					<span class="bold">Thursday:</span>
				</li>
				<li>
					<span class="bold">Friday:</span>
				</li>
				<li>
					<span class="bold">Saturday:</span>
				</li>
				<li>
					<span class="bold">Sunday:</span>
				</li>
			</ul>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
