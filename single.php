<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package endeavor-theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="beer-background">
        <div class="inner-container">
            <?php
            $beer_image = get_field('beer_image');
            if (!empty($beer_image)) {
                $beer_image_url = $beer_image['url'];
                $beer_image_alt = get_post_meta($beer_image['id'], '_wp_attachment_image_alt', true);
                ?>
                <img src="<?php echo esc_url($beer_image_url); ?>" alt="<?php echo esc_attr($beer_image_alt); ?>"/>
            <?php } ?>
            <h2><?php echo esc_html(get_the_title()); ?></h2>
            <ul>
                <li>Beer Type: <?php echo esc_html(get_field('beer_type')); ?></li>
                <li><?php echo "Beer availability" ?></li>
                <li> ABV: <?php echo esc_html(get_field('abv')); ?>%</li>
                <li> IBU: <?php echo esc_html(get_field('ibu')); ?></li>
            </ul>
            <p><?php echo esc_html(get_field('description')); ?></p>
        </div>
    </section>

    <?php
    $story = get_field('story'); 
    $story_image = get_field('story_image');
    if (!empty($story) || !empty($story_image)) : ?>
        <section>
            <div class="inner-container">
                <div>
                    <h2>The Story</h2>
                    <p><?php echo esc_html(get_field('story')); ?></p>
                </div>    
                <?php
                    if (!empty($story_image)) {
                        $story_image_url = $story_image['url'];
                        $story_image_alt = get_post_meta($story_image['id'], '_wp_attachment_image_alt', true);
                        ?>
                        <img src="<?php echo esc_url($story_image_url); ?>" alt="<?php echo esc_attr($story_image_alt); ?>" />
                    <?php } ?>
            </div>
        </section>
    <?php endif; ?>
</main><!-- #main -->


<?php
get_footer();
?>
