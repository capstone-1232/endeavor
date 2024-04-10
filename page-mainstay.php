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
    <div class="beer-category-bg mainstay-banner-bg">
        <div class="beer-container">
            <h2>Mainstays</h2> 
            <p>Endeavour Brewing offers a diverse selection of mainstay beers crafted to suit every palate and occasion. From crisp and refreshing lagers to bold and flavorful ales, our lineup promises something for everyone.</p>
        </div>
    </div>
    <div class="beers">
    <?php 
        $posts = get_posts(array(
            'post_type' => 'year-round-beers',
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
            
            // Reset post data
            wp_reset_postdata();
        }
    ?>
</div>
    </div>
</section>



<?php

get_footer();