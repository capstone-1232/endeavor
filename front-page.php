<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
  <title><?php echo $title ?></title>
 </head>
 <body>
  <main>
    <section>
      <!-- Hero Banner -->
      <div>
        <div class="inner-container">
          <h2> <?php echo $title; ?> </h2>
          <p>The taproom and cafe are open! Come and join us for refreshments, off-sales, and a wonderful time with friends and family!</p>
          <a href="page-our-beer-coffee.php" class="">Expore our Beers</a>
        </div>
      </div>
    </section>
    <section>
      <div class="inner-container">
        <h3>Featured Beers</h3>
        <?php
          $beer_cpts = array('year-round-beers', 'seasonal-beers', 'barrel-aged-beers'); 

          foreach ($beer_cpts as $cpt) {
              $args = array(
                  'post_type' => $cpt,
                  'posts_per_page' => -1, 
              );
              $beer_posts = get_posts($args);

              foreach ($beer_posts as $beer_post) {
                  // Get the value of the featured label using ACF
                  $is_featured = get_field('featured', $beer_post->ID);
                  $beer_image = get_field('beer_image', $beer_post->ID);
                  $beer_image_url = $beer_image['url'];
                  $beer_image_alt = get_post_meta($beer_image['id'], '_wp_attachment_image_alt', true);
                  // Check if the beer is featured
                  if ($is_featured) {
                      $beer_name = $beer_post->post_title; ?>
                      
                      <img src="<?php echo esc_url($beer_image_url); ?>" alt="<?php echo esc_attr($beer_image_alt); ?>"/>
                      <?php
                      // Output the beer name
                      echo "<h2>$beer_name</h2>";
                  }
              }
          }
          ?>


      </div>
    </section>
    <section>
      <div>
        <h3><a href="">Shop our Coffee</a></h3>
      </div>
      <div>
        <h3><a href="">Shop our Merch</a></h3>
      </div>
    </section>
    <section>
      <h3>Events at Endeavour</h3>
      <div>
        <!-- Load image -->
        <h4>
          <!-- Load Event name -->
        </h4>
      </div>
      <div>
        <!-- Load image -->
        <h4>
          <!-- Load Event name -->
        </h4>
      </div>
      <div>
        <!-- Load image -->
        <h4>
          <!-- Load Event name -->
        </h4>
      </div>
      <div>
        <!-- Load image -->
        <h4>
          <!-- Load Event name -->
        </h4>
      </div>
    </section>
    <section>
      <div class="inner-container">
        <div>
          <img src="" alt="">
          <div>
            <h3>About Us</h3>
            <p>At our core, we are committed to serving our community with unwavering dedication and uncompromising quality. Our mission is to provide families with products and services that enrich their lives while fostering strong connections within our community. We believe in upholding the highest standards of quality in everything we do, from the products we offer to the relationships we build. Through this dedication to excellence, we aim to become a trusted partner in every family's journey, ensuring their well-being and happiness for generations to come.</p>
            <a href="page-who-we-are.php">More About Us</a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <h3>Donations</h3>
        <p>Seeking sponsorship or a charitable donation from Endeavour Brewing? Fantastic! We're passionate about collaborating with local charities and volunteer organizations that contribute to the vibrancy of our community. Let's work together to make a positive impact and spread the spirit of giving.</p>
        <p>Feel free to reach out with your specific request, we'll do our best to find a way to support your cause and contribute to the community.</p>
        <p>Click the button below to access the form and express your interest in collaborating with Endeavour.</p>
        <a href="#">Register For Support</a>
      </div>
    </section>
  </main>
 </body>
 </html>

  <main>


  </main>
 
 <?php

 get_footer();
 