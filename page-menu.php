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
 $title = get_the_title();
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $title; ?></title>
 </head>
 <body>
        <main>
            <section>
             <div>
                 <!-- Hero banner -->
                 <h2><?php echo $title; ?></h2>
             </div>
             <section>
                 <h3>Taproom Menu</h3>
                 <h4>Snacks</h4>
                    <div class="flex">
                        <?php 
                        $posts = get_posts(array(
                            'post_type' => 'snacks', // Replace 'your_post_type' with your actual post type slug
                            'posts_per_page' => -1, // Retrieve all posts
                        ));

                        // Loop through each post
                        foreach ($posts as $post) {
                            // Setup post data
                            setup_postdata($post);

                            // Retrieve ACF fields for each post
                            $price = get_field('price', $post->ID);
                            $description = get_field('description', $post->ID);
                            $options = get_field('options', $post->ID);
                            $option_price = get_field('option_price', $post->ID);

                            // Output your post content or custom fields
                            echo '<h5>' . get_the_title() . '</h5>';
                            // echo '<p>' . get_the_content() . '</p>';
                            echo '<h6>' . $price . '</h6>';
                            echo '<p>' . $description . '</p>';
                            if ($options){
                                echo '<h5>Options:</h5>';
                                echo '<p>' . $options . '</p>';
                                echo '<h6>Option Price:</h6>';
                                echo '<p>' . $option_price . '</p>';
                            }
                
                            echo '</div>';

                            // Reset post data
                            wp_reset_postdata();
                        }
                        ?>
                 </div>
             </section>
            </section>
        </main>

<?php

get_footer();