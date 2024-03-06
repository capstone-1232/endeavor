<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package endeavor-theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="beer-background">
			<div class="inner-container">
			<?php
				$beer_image = get_field('beer_image');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($beer_image['url']); ?>" alt="<?php echo esc_attr($beer_image['alt']); ?>" />
					<?php endif; ?>
				<h2><?php echo get_the_title(); ?></h2>
				<ul>
					<li>Beer Type: <?php echo get_field('beer-type');?></li>
					<li><?php echo "Beer availability" ?></li>
					<li> ABV: <?php echo get_field('abv'); ?>%</li>
					<li> IBU: <?php echo get_field('ibu'); ?></li>
				</ul>
				<p><?php echo get_field('description'); ?></p>
			</div>
		</section>
		<section>
			<div class="inner-container">
				<div>
					<h2>The Story</h2>
					<p><?php echo get_field('story'); ?></p>
				</div>	
				<?php
				$story_image = get_field('story_image');
					if( !empty( $story_image ) ): ?>
						<img src="<?php echo esc_url($story_image['url']); ?>" alt="<?php echo esc_attr($story_image['alt']); ?>" />
					<?php endif; ?>
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
