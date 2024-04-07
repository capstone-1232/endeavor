<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<section>
	<div class="inner-container">
		<div class="single-product">
			<?php while (have_posts()): ?>
				<?php the_post(); ?>

				<?php wc_get_template_part('content', 'single-product'); ?>

			<?php endwhile; ?>

			
		</div>

	</div>
</section>
<?php
			do_action('woocommerce_after_main_content');
			?>
<?php
get_footer();

