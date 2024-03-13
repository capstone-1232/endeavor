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
            <?php
            function display_menu($post_type, $category_field, $category) {
                $posts = get_posts(array(
                    'post_type' => $post_type,
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array(
                            'key' => $category_field,
                            'value' => $category,
                            'compare' => '='
                        )
                    )
                ));
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
                    
                        echo '</div>';
                        wp_reset_postdata();
                    }
                } else {
                    echo '<p>No menu items found for category: ' . $category . '</p>';
                }
            }

            display_menu('taproom_menu', 'menu_category', 'Snacks');
            display_menu('taproom_menu', 'menu_category', 'Tacos');
            display_menu('taproom_menu', 'menu_category', 'Quesadillas');
            display_menu('taproom_menu', 'menu_category', 'On Tap');
            ?>

        </section>
        <section>
            <h3>Cafe Menu</h3>
            <?php
            display_menu('taproom_menu', 'menu_category', 'Espresso Drinks');
            display_menu('taproom_menu', 'menu_category', 'Fresh Endeavor Coffee');
            display_menu('taproom_menu', 'menu_category', 'Tea');
            display_menu('taproom_menu', 'menu_category', 'Fresh Rotating Pastries');
            ?>

        </section>
    </section>
</main>

<?php
get_footer();
