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
            <h2>Our Coffee</h2> 
            <p>At Endeavour Coffee Roasters, we're fuelled by our passion for exceptional coffee! With carefully sourced beans and a commitment to quality, we create coffees that complement our active lives and passion for discovery. Join us in celebrating the journey of flavour and the joy of a perfect cup!</p>        
        </div>
        
        
    </div>
</section>
<section>
    <div class="inner-container">
        <div class="featured">
            <h2>Available Coffee</h2>
             <?php 
                $posts = get_posts(array(
                    'post_type' => 'coffee',
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
    <section>
        <div class="inner-container">
            <img src="" alt="">
            <h2>Brenner: Our Roaster</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati impedit perferendis aliquam nemo vel non, nihil repellendus, maxime molestiae eveniet, fugit soluta provident adipisci magni tempora quo asperiores aperiam dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem natus voluptate reprehenderit nihil delectus adipisci soluta alias fugit sed temporibus, quasi nesciunt minus qui eligendi distinctio quia earum harum ut.</p>
        </div>  
    </section>
    <section>
        <div class="inner-container">
        <h2>Created With Single Origin Beans</h2>
        <p>Single origin coffee beans are sourced from a specific geographic location, such as a single farm, estate, or region. These beans reflect the unique terroir of their origin. Each cup embodies the distinct flavors, aromas, and characteristics cultivated by the local soil, climate, and altitude. From the lush mountains of Ethiopia to the volcanic soils of Guatemala, single origin coffee beans encapsulate the essence of their place of origin, allowing coffee enthusiasts to savor the nuances of different growing conditions and processing methods. With a focus on transparency and traceability, single origin coffees celebrate the intricate stories behind each bean, fostering a deeper appreciation for the craft and culture of coffee production.</p>
        </div>
    </section>


<?php

get_footer();