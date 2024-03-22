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
     <title><?php echo $title ?></title>
 </head>
 <body>
     <main class="who-we-are">
        <section>
            <div class="who-we-are-bg">
                <h2><?php echo $title; ?></h2>
                <p>
                   Endeavour Brewing is a family friendly (all kids are welcome), community orientated craft brewery in St. Albert.  Our love for great quality beers drove us to develop and brew our favourite pints.  Consistent quality and the freshest ingredients are paramount as we strive to create beers that cater to not only our thirsty palate but to the active lifestyles we enjoy with our friends, family and colleagues.  At Endeavour Brewing, we are inspired by our other passions in life including the outdoors, sports and those who are taking risks and making great things happen.
                </p>
            </div>
        </section>
        <section>
            <div class="flex">
                <!-- This is for mobile -->
                <div class="who-we-are-bg-img-1"></div>

                <!-- This is for when we hit tablet view -->
                <img class="who-we-are-img" src="<?php echo get_template_directory_uri(); ?>/img/year-round.webp" alt="Endeavour beer on table">
                <div class="inner-container">
                    <h3>Endeavour Brewing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus elit mauris, eget condimentum magna malesuada a. Sed non posuere velit, ac lobortis felis. Donec ipsum mi, gravida sit amet turpis vel, tincidunt finibus eros. Aenean at tempor purus, vitae lacinia neque. Sed non erat urna. Donec vestibulum urna eget dapibus dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras lobortis luctus justo at dapibus. Vivamus vestibulum augue vel dui interdum, vitae consectetur arcu tincidunt. Donec aliquet velit velit, non vestibulum felis interdum id.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="flex">
                <!-- This is for mobile -->
                <div class="who-we-are-bg-img-2"></div>

                <!-- This is for when we hit tablet view -->
                <img class="who-we-are-img" src="<?php echo get_template_directory_uri(); ?>/img/coffee.webp" alt="Endeavour coffee on table">
                <div class="inner-container">
                    <h3>Endeavour Coffee roasters</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus elit mauris, eget condimentum magna malesuada a. Sed non posuere velit, ac lobortis felis. Donec ipsum mi, gravida sit amet turpis vel, tincidunt finibus eros. Aenean at tempor purus, vitae lacinia neque. Sed non erat urna. Donec vestibulum urna eget dapibus dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras lobortis luctus justo at dapibus. Vivamus vestibulum augue vel dui interdum, vitae consectetur arcu tincidunt. Donec aliquet velit velit, non vestibulum felis interdum id.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="flex">
                <!-- This is for mobile -->
                <div class="who-we-are-bg-img-3"></div>

                <!-- This is for when we hit tablet view -->
                <img class="who-we-are-img" src="<?php echo get_template_directory_uri(); ?>/img/employee-holding-endeavour-glass.webp" alt="Employee holding endeavour glass">
                <div class="mission-statement inner-container">
                    <h3>Mission Statement</h3>
                    <p>At Endeavour, we are more than just makers of great beer and coffee; we are cultivators of community, quality, and connection. Our mission is to create exceptional beer/coffee that not only tantalizes the taste buds but also brings people together in shared moments of joy and camaraderie. We are committed to upholding the highest standards of quality in every pint or cup of coffee we pour, ensuring that each sip is a testament to our dedication to excellence. Through our craft, we strive to create a welcoming space where individuals from all walks of life can gather, forge meaningful connections, and celebrate the simple pleasures of life over a pint of beer or a cup of coffee.</p>
                </div>
            </div>
        </section>
     </main>
 
 <?php
 get_footer();
 ?>