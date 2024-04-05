<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
    return;
}

global $product;

$columns = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes = apply_filters(
    'woocommerce_single_product_image_gallery_classes',
    array(
        'woocommerce-product-gallery',
        'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
        'woocommerce-product-gallery--columns-' . absint($columns),
        'images',
    )
);
?>
<div class="single-product-flex">
<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>"
    data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
    <div class="woocommerce-product-gallery__wrapper">
        <?php
        if ($post_thumbnail_id) {
            $html = wc_get_gallery_image_html($post_thumbnail_id, true);
        } else {
            $html = '<div class="woocommerce-product-gallery__image--placeholder">';
            $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
            $html .= '</div>';
        }

        echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
        
        do_action('woocommerce_product_thumbnails');
        ?>
    </div>
</div>
<?php
echo '<div>';
echo '<h2>' . esc_html($product->get_name()) . '</h2>';
echo '<p class="price">' . $product->get_price_html() . '</p>';
echo '<div class="short-description">' . wc_format_content($product->get_short_description()) . '</div>';

echo '<div class="form-flex">';
do_action('woocommerce_before_add_to_cart_form');
woocommerce_template_single_add_to_cart();
do_action('woocommerce_after_add_to_cart_form');

// Back to Shop Button
echo '<div class="back-to-shop">';
echo '<a href="' . esc_url(wc_get_page_permalink('shop')) . '" class="button">Back to Shop</a>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
// Related Products
$product_categories = wp_get_post_terms($product->get_id(), 'product_cat', array('fields' => 'ids'));

if (!empty($product_categories)) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'post__not_in' => array($product->get_id()),
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'term_id',
                'terms' => $product_categories,
                'operator' => 'IN'
            )
        )
    );

    $related_products = new WP_Query($args);

    if ($related_products->have_posts()) {
        echo '<div class="more-like-this">';
        echo '<h3>MORE OF OUR PRODUCTS</h3>';
        echo '<ul class="products">';
        while ($related_products->have_posts()):
            $related_products->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</ul>';
        echo '</div>';
        wp_reset_postdata();
    }
}



