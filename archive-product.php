<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

?>
<section class="inner-container">
	<div class="shop-header-flex">
		<div class="shop-filter-buttons">
			<a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="shop-button">
				<svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M14.5898 37.1817V31.8263C14.5898 30.158 14.5898 29.3238 14.9845 28.7024C15.243 28.2954 15.6149 27.9573 16.0626 27.7223C16.7461 27.3635 17.6637 27.3635 19.4989 27.3635C21.3341 27.3635 22.2518 27.3635 22.9353 27.7223C23.383 27.9573 23.7549 28.2954 24.0133 28.7024C24.408 29.3238 24.408 30.158 24.408 31.8263V37.1817"
						stroke="#2D487F" stroke-width="3" stroke-linecap="round" />
					<path d="M35.864 38H14.0458M3.13672 38H7.68217" stroke="#2D487F" stroke-width="3"
						stroke-linecap="round" />
					<path d="M31.7734 38V25.7273" stroke="#2D487F" stroke-width="3" stroke-linecap="round" />
					<path d="M7.22656 38V25.7273" stroke="#2D487F" stroke-width="3" stroke-linecap="round" />
					<path
						d="M19.4999 2H11.2499C9.05824 2 7.96241 2 7.08179 2.54309C6.20115 3.08618 5.71108 4.0642 4.73096 6.02025L2.17342 12.4714C1.58254 13.9619 1.06555 15.7186 2.0602 16.9773C2.72749 17.8216 3.76186 18.3636 4.92315 18.3636C6.93578 18.3636 8.56734 16.7356 8.56734 14.7273C8.56734 16.7356 10.1989 18.3636 12.2115 18.3636C14.2242 18.3636 15.8557 16.7356 15.8557 14.7273C15.8557 16.7356 17.4872 18.3636 19.4999 18.3636C21.5126 18.3636 23.1441 16.7356 23.1441 14.7273C23.1441 16.7356 24.7756 18.3636 26.7883 18.3636C28.801 18.3636 30.4325 16.7356 30.4325 14.7273C30.4325 16.7356 32.064 18.3636 34.0767 18.3636C35.2381 18.3636 36.2725 17.8216 36.9398 16.9773C37.9344 15.7186 37.4175 13.9619 36.8266 12.4714L34.2691 6.02025C33.289 4.0642 32.7989 3.08618 31.9182 2.54309C31.0376 2 29.9418 2 27.7502 2H26.7885"
						stroke="#2D487F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

				Shop All</a>
			<a href="<?php echo get_term_link('coffee', 'product_cat'); ?>" class="shop-button">
				<svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M25.0949 5.17985C25.621 5.35043 25.978 5.83879 25.9805 6.39172C25.991 6.63436 25.9919 6.83184 25.9919 6.83184C25.9919 6.83184 25.9835 13.5657 18.0102 19.7645C14.7668 22.2862 11.9537 26.3852 11.219 30.2177C11.1224 30.7302 10.7257 31.134 10.2147 31.2391C9.70372 31.3442 9.18001 31.1301 8.88877 30.6965C6.61648 27.3292 4.03963 21.0364 8.33663 13.5846C12.2113 6.86559 19.3652 3.42963 25.0949 5.17985Z"
						fill="#2D487F" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M13.8645 34.8393C13.3149 34.6635 12.9406 34.1537 12.9384 33.5766C12.9274 33.352 12.9262 33.1748 12.9262 33.1748C12.9262 33.1748 12.9346 26.441 20.9078 20.2422C24.1222 17.7432 26.9136 13.6948 27.6787 9.89276C27.7846 9.36286 28.1996 8.94831 28.7303 8.8447C29.2613 8.74052 29.8023 8.96689 30.1001 9.41802C32.3555 12.8105 34.833 19.049 30.5814 26.4221C26.7157 33.1242 19.5878 36.5599 13.8645 34.8393Z"
						fill="#2D487F" />
				</svg>


				Coffee</a>
			<a href="<?php echo get_term_link('merch', 'product_cat'); ?>" class="shop-button">
				<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M38.3897 11.8C38.4537 12.032 38.3729 12.288 38.2377 12.488L33.9257 18.9039C33.7657 19.1519 33.4297 19.288 33.1489 19.288C33.0689 19.288 32.8449 19.2719 32.7577 19.2479L29.3017 18.4V33.5999C29.3017 34.0639 28.9737 34.4 28.5017 34.4H11.7017C11.2297 34.4 10.9017 34.0639 10.9017 33.5999V18.4L7.79768 19.2559C7.43768 19.368 7.12568 19.224 6.92568 18.912L2.64568 12.512C2.50968 12.304 2.46968 12.072 2.53368 11.84C2.58968 11.6 2.75768 11.44 2.97368 11.328L11.7017 7.19995H15.7017C16.1737 7.19995 16.5017 7.52795 16.5017 7.99995C16.5017 9.64795 18.8137 10.816 20.4617 10.816C22.1097 10.816 24.5017 9.65595 24.5017 7.99995C24.5017 7.53595 24.8297 7.19995 25.3017 7.19995H29.3017L37.9417 11.248C38.1657 11.36 38.3257 11.56 38.3897 11.8Z"
						fill="#2D487F" />
				</svg>


				Merch</a>

		</div>

		<header class="woocommerce-products-header">
			<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
				<h2 class="woocommerce-products-header__title page-title">
					<?php woocommerce_page_title(); ?>
				</h2>
			<?php endif; ?>
		</header>
	</div>

	<div class="shop-main">

		<?php
		if (woocommerce_product_loop()) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */

			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					wc_get_template_part('content', 'product');
				}
			}

			woocommerce_product_loop_end();
		} else {
			do_action('woocommerce_no_products_found');
		}
		?>
	</div>
</section>
<?php

get_footer('shop');
