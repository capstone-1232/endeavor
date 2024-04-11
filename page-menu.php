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
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <main>
        <section>
            <div class="menu-hero">
                <div class="overlay">
                    <!-- Hero banner -->
                    <h2>
                        <?php echo $title; ?>
                    </h2>
                </div>
            </div>
            <section class="container">
                <h3 class="menu-header">Taproom Menu</h3>
                <?php

                function display_menu($posts, $category)
                {
                    if ($posts) {
                        echo '<h4 class="menu-sub-header">' . $category . '</h4>';
                        echo '<div class="wide-flex">';
                        foreach ($posts as $post) {
                            setup_postdata($post);
                            $price = get_field('price', $post->ID);
                            $description = get_field('description', $post->ID);
                            $options = get_field('options', $post->ID);
                            $option_price = get_field('option_price', $post->ID);
                            echo '<div class="menu-posts"><h5 class="food-item">' . $post->post_title . '</h5>';
                            echo '<p class="food-price">' . $price . '</p>';
                            echo '<p class="food-details">' . $description . '</p>';
                            if ($options) {
                                echo '<p>+ ' . $options . '<span class="food-option-price">' . $option_price . '</span</p>';
                            }
                            echo "</div>";
                        }
                        wp_reset_postdata();
                        echo '</div>';
                    } else {
                        echo '<p>No menu items found for category: ' . $category . '</p>';
                    }
                    
                }
                $taproom_menu_posts = new WP_Query(
                    array(
                        'post_type' => 'taproom_menu',
                        'posts_per_page' => -1,
                    )
                );

                $taproom_menu_items = array();

                if ($taproom_menu_posts->have_posts()) {
                    while ($taproom_menu_posts->have_posts()) {
                        $taproom_menu_posts->the_post();
                        $menu_category = get_field('menu_category');
                        $taproom_menu_items[$menu_category][] = $post;
                    }
                }


                $taproom_menu_items = array_reverse($taproom_menu_items);

                foreach ($taproom_menu_items as $category => $posts) {
                    display_menu($posts, $category);
                }
                ?>

            </section>
            <section class="container">
                <h3 class="menu-header">Cafe Menu</h3>
                <?php
                $cafe_menu_posts = new WP_Query(
                    array(
                        'post_type' => 'cafe_menu',
                        'posts_per_page' => -1,
                    )
                );

                $cafe_menu_items = array();

                if ($cafe_menu_posts->have_posts()) {
                    while ($cafe_menu_posts->have_posts()) {
                        $cafe_menu_posts->the_post();
                        $cafe_category = get_field('cafe_category');
                        $cafe_menu_items[$cafe_category][] = $post;
                    }
                }

                $cafe_menu_items = array_reverse($cafe_menu_items);

                foreach ($cafe_menu_items as $category => $posts) {
                    display_menu($posts, $category);
                }
                ?>
            </section>
        </section>
    </main>

    <?php
    get_footer();
    ?>