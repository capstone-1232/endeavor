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
    <div class="beer-category-bg coffee-banner-bg">
        <div class="inner-container beer-container">
            <h2>Our Coffee</h2> 
            <p>At Endeavour Coffee Roasters, we are fueled by our passion for exceptional coffee. Using single origin beans, we create flavors that inspire your day and complement your love for adventure. Whether you are conquering the trails or enjoying a moment of calm, let our coffee be your companion in every journey. Here's to bold flavors and endless possibilities! </p>        
        </div>
        
        
    </div>
</section>
<section>
    <div class="inner-container">
    <div class="beers">
    <?php 
        $posts = get_posts(array(
            'post_type' => 'coffee',
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
            echo '<p>' . esc_html(get_field('sub_title')) . '</p>';
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