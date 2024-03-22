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
        <!-- Background image here? -->
        <section>
            <div class="grid">
                <div class="inner-container">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
        </section>
        <section>
            <div class="inner-container">
                <div class="flex">
                    <img src="" alt="">
                    <div>
                        <h3>Matt & Georgia Atkins</h3>
                        <p>Aenean imperdiet purus ut purus suscipit porttitor. Etiam nec ipsum sed ante ultricies tincidunt. Sed faucibus sapien ut lorem cursus, eget lobortis justo accumsan. Cras eu ante ipsum. Nulla lacinia velit ut mattis auctor. Duis nec ullamcorper purus, cursus vestibulum metus. Quisque varius vulputate turpis, a feugiat nunc ullamcorper lobortis. Donec viverra mauris sed iaculis tristique. Suspendisse potenti. Cras tincidunt urna sed turpis placerat, id rutrum lacus ornare. Phasellus placerat posuere dui. Nunc molestie sagittis urna non tristique. Sed tempor sagittis justo, a scelerisque orci aliquam at. Vivamus ac bibendum enim, sit amet tincidunt urna. Ut finibus a felis vel condimentum. Ut in velit sollicitudin est bibendum feugiat non at turpis.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="inner-container grid">
                <div>
                    <h3>Our Team</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis purus mauris, nec rutrum tellus tempor non. Nunc varius tristique porta. Pellentesque vitae eros sit amet lectus tempus consectetur.</p>
                </div>
                <div class="staff-flex">
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
                            echo '<div style="width: 16rem;">';
                            echo '<h2>' . get_the_title() . '</h2>';
                            echo '<p>' . get_the_content() . '</p>';
                            echo '<p>' . $job_title . '</p>';
                            if ($description){
                                echo '<p>Description: ' . $description . '</p>';
                            }
                            if($staff_image){
                                echo '<img src="' . $staff_image['url'] . '" alt="' . $staff_image['alt'] . '">';
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