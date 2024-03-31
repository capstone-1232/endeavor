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
    <main class="meet-the-team">
        <section>
            <div class="meet-the-team-bg">
                <h2><?php echo $title; ?></h2>
            </div>
        </section>
        <section>
            <div class="inner-container">
                <div class="flex">
                    <img class="meet-the-team-img" src="<?php echo get_template_directory_uri(); ?>/img/matt-and-georgia-on-a-mountain.webp" alt="Endeavour coffee on table">
                    <div>
                        <h3>Matt & Georgia Atkins</h3>
                        <p>
                            Endeavour Brewing stands as a beacon of community in St. Albert, welcoming families and beer and coffee enthusiasts of all ages to share in our craft. Fueled by our passion for exceptional brews and coffee, we meticulously craft our favorite pints or coffee with unwavering dedication to consistent quality and the freshest ingredients. Our mission is to create beers that not only tantalize the taste buds but also complement the vibrant lifestyles we lead alongside our loved ones.

                            <br><br>
                            
                            Rooted in our diverse passions for the outdoors and the pursuit of greatness, Endeavour Brewing is more than just a brewery—it's a celebration of life's adventures and the bold spirits who embrace them. At our core, we believe that beer and coffee brings people together, forging bonds and sparking conversations that linger long after the last sip. Join us as we raise a glass to the moments that unite us and the camaraderie that defines our community. Cheers to new friendships, shared experiences, and the endless possibilities that await at Endeavour Brewing and Coffee Roasters.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="inner-container grid">
                <div class="staff-flex">
                    <div class="staff-flex-text">
                        <h3>Our Team</h3>
                        <p>Check out all of our valued team members! We're dedicated to serving all of our customers to the highest quality. If you ever see our employees around, don't be afraid to say hi!</p>
                    </div>
                    <?php 

                        $posts = get_posts(array(
                            'post_type' => 'staff', // Replace 'your_post_type' with your actual post type slug
                            'posts_per_page' => -1, // Retrieve all posts
                        ));

                        // Loop through each post
                        foreach ($posts as $post) {
                            // Setup post data
                            setup_postdata($post);

                            // Retrieve ACF fields for each post
                            $job_title = get_field('job_title', $post->ID);
                            $description = get_field('description', $post->ID);
                            $staff_image = get_field('staff_image', $post->ID);

                            // Output your post content or custom fields
                            echo '<div class="employee-card">';
                            echo '<h4 class="card-title">' . get_the_title() . '</h4>';
                            echo '<p class="job-title">' . $job_title . '</p>';
                            if($staff_image){
                                echo '<div class="staff-image-container">';
                                echo '<img src="' . $staff_image['url'] . '" alt="' . $staff_image['alt'] . '">';
                                if ($description){
                                    echo '<p class="employee-description">Description: ' . $description . '</p>';
                                }
                                echo '</div>';
                            }
                            echo '</div>';

                            // Reset post data
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

<?php

get_footer();