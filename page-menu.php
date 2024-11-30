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

                function display_menu($posts, $category, $order)
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
                            echo '<div class="menu-posts"><div class="food-item-flex"><h5 class="food-item">' . $post->post_title . '</h5>';
                            echo '<div class="menu-line"></div>';
                            echo '<p class="food-price">' . $price . '</p></div>';
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

                $taproom_menu_posts = new WP_Query(array(
                    'post_type'      => 'taproom_menu',
                    'posts_per_page' => -1,
                ));
                
                $menu_items_by_category = [];
                $category_order = [];
                
                if ($taproom_menu_posts->have_posts()) {
                    while ($taproom_menu_posts->have_posts()) {
                        $taproom_menu_posts->the_post();
                
                        $menu_category = get_field('menu_category'); 
                        $menu_order = get_field('order'); 
                
                        if (!isset($menu_items_by_category[$menu_category])) {
                            $menu_items_by_category[$menu_category] = [];
                            $category_order[$menu_category] = PHP_INT_MAX; 
                        }
                
                        $menu_items_by_category[$menu_category][] = $post;
                
                     
                        $category_order[$menu_category] = min($category_order[$menu_category], $menu_order);
                    }
                
                    wp_reset_postdata();
                }
                
                
                uasort($category_order, function($a, $b) {
                    return $a - $b; 
                });
                
                
                $sorted_menu_items = [];
                foreach (array_keys($category_order) as $category) {
                    $sorted_menu_items[$category] = $menu_items_by_category[$category];
                }
                
                
                foreach ($sorted_menu_items as $category => $posts) {
                    display_menu($posts, $category, $order);
                }
                ?>

            </section>
            <section class="container">
                <h3 class="menu-header">Cafe Menu</h3>
                <?php
                $cafe_menu_posts = new WP_Query(array(
                    'post_type'      => 'cafe_menu',
                    'posts_per_page' => -1,
                ));
                
                $cafe_menu_items = [];
                $category_order = []; 
                
                if ($cafe_menu_posts->have_posts()) {
                    while ($cafe_menu_posts->have_posts()) {
                        $cafe_menu_posts->the_post();
                
                        $cafe_category = get_field('cafe_category'); 
                        $menu_order = get_field('order'); 
                
                        if (!isset($cafe_menu_items[$cafe_category])) {
                            $cafe_menu_items[$cafe_category] = [];
                            $category_order[$cafe_category] = PHP_INT_MAX; 
                        }
                
                        $cafe_menu_items[$cafe_category][] = $post;
                
                        $category_order[$cafe_category] = min($category_order[$cafe_category], $menu_order);
                    }
                
                    wp_reset_postdata();
                }
                
             
                uasort($category_order, function($a, $b) {
                    return $a - $b; 
                });
                
                
                $sorted_cafe_menu_items = [];
                foreach (array_keys($category_order) as $category) {
                    $sorted_cafe_menu_items[$category] = $cafe_menu_items[$category];
                }
                
                
                foreach ($sorted_cafe_menu_items as $category => $posts) {
                    display_menu($posts, $category, $order);
                }
                ?>
            </section>
        </section>
    </main>

    <?php
    get_footer();
    ?>