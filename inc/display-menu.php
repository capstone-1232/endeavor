<?php
function display_menu($posts, $category) {
                if ($posts) {
                    echo '<h4>' . $category . '</h4>';
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        $price = get_field('price', $post->ID);
                        $description = get_field('description', $post->ID);
                        $options = get_field('options', $post->ID);
                        $option_price = get_field('option_price', $post->ID);
                        echo '<h5>' . $post->post_title . '</h5>'; 
                        echo '<p>' . $price . '</p>';
                        echo '<p>' . $description . '</p>';
                        if ($options) {
                            echo '<p>' . $options . '</p>';
                            echo '<p>' . $option_price . '</p>';
                        }
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>No menu items found for category: ' . $category . '</p>';
                }
            }
            