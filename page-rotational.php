<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package endeavor-theme
 */

get_header();

?>
<section>
    <div class="beer-category-bg rotational-banner-bg">
        <div class="beer-container">
            <h2>Rotational</h2> 
            <p>Endeavour Brewing offers exclusive selection of rotational beers that may not be offered again. These beers may return eventually but are not part of our mainstays. These beers allow us to exist on the wild side and play with the different oppertunities beer has to offer</p>
        </div>
    </div>
    <div class="beers">
    <?php 
        $posts = get_posts(array(
            'post_type' => 'seasonal-beers',
            'posts_per_page' => -1,
        ));
        foreach ($posts as $post) {
            setup_postdata($post);
            
            
            $permalink = get_permalink($post->ID);

            
            $featured_image = get_the_post_thumbnail($post->ID, 'full');

            echo '<a class="featured-image" href="' . esc_url($permalink) . '">';
            if ($featured_image) {
                echo '<div>' . $featured_image . '</div>';
            }
            echo '<h3>' . get_the_title() . '</h3>';
            echo '</a>';
            
            wp_reset_postdata();
        }
    ?>
</div>
</section>



<?php

get_footer();