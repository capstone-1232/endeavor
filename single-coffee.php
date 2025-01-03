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
<main>
    <section class="coffee-background">
        <div class="inner-container">
            <div class="single-beer single-coffee">
                <?php
                $coffee_image = get_field('coffee_image');
                if (!empty ($coffee_image)) {
                    $coffee_image_url = $coffee_image['url'];
                    $coffee_image_alt = get_post_meta($coffee_image['id'], '_wp_attachment_image_alt', true);
                    ?>
                    <img class="can-img" src="<?php echo esc_url($coffee_image_url); ?>"
                        alt="<?php echo esc_attr($coffee_image_alt); ?>" />
                <?php } ?>
                <div class="beer-flex coffee-flex">
                    <h2>
                        <?php echo esc_html(get_the_title()); ?>
                    </h2>
                    <h4><?php echo esc_html(get_field('sub_title')); ?> </h4>
                    <p>Region: <?php echo esc_html(get_field('region')); ?></p>
                    <ul class="beer-info coffee-info">
                        <div>
                            <li> <span> Processing: </span>
                                <?php echo esc_html(get_field('processing')); ?>
                            </li>
                        </div>
                        <div>
                            <li> <span> Cultivar: </span>
                                <?php echo esc_html(get_field('cultivar')); ?>
                            </li>
                        </div>
                        <div>
                            <li> <span>Roast:</span>
                                <?php 
                                if(!get_field('roast')){
                                    echo 'N/A';
                                }else{
                                    echo esc_html(get_field('roast'));
                                }
                                 ?>

                            </li>
                        </div>

                    </ul>
        
                    <p>
                        Tasting Notes: <?php echo esc_html(get_field('tasting_notes')); ?>
                    </p> 
                    
                    
                </div>
                
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
?>