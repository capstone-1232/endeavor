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
		<div class="inner-container">
			<div class="site-info flex">
				<div class="logo"> 
					<?php
					the_custom_logo();
					?>
					<h1 class="screen-reader-text">Endeavor Brewing Company</h1>
				</div>
	
				<h4>Hours:</h4>
				<div class="hours">
					<?php 
						$posts = get_posts(array(
							'post_type' => 'hours', // Replace 'your_post_type' with your actual post type slug
							'posts_per_page' => -1, // Retrieve all posts
						));
	
						// Loop through each post
						foreach ($posts as $post) {
							// Setup post data
							setup_postdata($post);
	
							// Retrieve ACF fields for each post
							$day = get_field('day');
							$open = get_field('open');
							$close = get_field('close');
							$closed = get_field('closed');
	
							if ($closed) {
								echo "<p>$day: Closed</p>";
							} else {
								echo "<p>$day: $open - $close</p>";
							}
	
	
							// Reset post data
							wp_reset_postdata();
						}
					?>
				</div>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<!-- Work on this later!!! -->
