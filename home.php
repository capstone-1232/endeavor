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

    <main>
        <section>
            <div class="inner-container">
                <div class="home-beers">
                    <h2>Our Beer</h2>
                    <p>At Endeavour Brewing, we're driven by our love for quality beers! With fresh ingredients and
                        consistent quality, we craft brews that match our active lifestyles and passions for the
                        outdoors and sports. Join us in raising a glass to daring adventures and great taste!</p>
                </div>

                <div class="beer-categories">
                    <a href="mainstay" class="mainstay-bg beer-card">
                        <h3>Mainstays</h3>
                    </a>
                    <a href="barrel-aged" class="barrel-bg beer-card">
                        <h3>Barrel-Aged</h3>
                    </a>
                    <a href="rotational" class="rotational-bg beer-card">
                        <h3>Rotational</h3>
                    </a>
                </div>

            </div>


        </section>
    </main>
<?php
get_footer();
?>