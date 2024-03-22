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
    <div class="beer-category-bg">
        <div class="inner-container">
            <h2>Seasonal</h2> 
            <p>Endeavour Brewing offers exclusive selection of seasonal beers That may not be offered again. These beers may return eventually but are not part of our main rotation. These beers allow us to exist on the wild side and play with the different oppertunities beer has to offer</p>
        </div>
        
        <div class="beers">
        <?php 
            $posts = get_posts(array(
                'post_type' => 'seasonal-beers',
                'posts_per_page' => -1,
            ));
            foreach ($posts as $post) {
                setup_postdata($post);
                
                // Get the permalink of the post
                $permalink = get_permalink($post->ID);

                // Get the featured image
                $featured_image = get_the_post_thumbnail($post->ID, 'full');

                // Display the featured image and the post title with a link to the post
                echo '<a href="' . esc_url($permalink) . '">';
                if ($featured_image) {
                    echo '<div class="featured-image">' . $featured_image . '</div>';
                }
                echo '<h2>' . get_the_title() . '</h2>';
                echo '</a>';
                
                // Reset post data
                wp_reset_postdata();
            }
        ?>
        </div>
    </div>
</section>



<?php

get_footer();