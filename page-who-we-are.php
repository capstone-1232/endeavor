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
            <div class="neo-inner-container">
                <div class="flex">
                    <!-- This is for mobile -->
                    <div class="who-we-are-bg-img-1"></div>
    
                    <!-- This is for when we hit tablet view -->
                    <img class="who-we-are-img" src="<?php echo get_template_directory_uri(); ?>/img/year-round.webp" alt="Endeavour beer on table">
                    <div class="inner-container">
                        <h3>Endeavour Brewing</h3>
                        <p>
                            We discovered a long time ago that beer is about socialization. It brings people together. We started Endeavour in 2018, with that goal in mind. We wanted a place where people could come enjoy a fresh craft beer and socialize, make connections and be comfortable. 
                            <br><br>
                            Alberta has a long-standing reputation for growing superior quality barely and is sought after by brewers from around the world. This is in part due the province's growing season of long, warm days and cool evenings and medium texture soils. All of our beers are made with barley grown by farmers in Alberta. Sustainability is very important to us in everything we do and we strive to support our community every way we can. 
                            <br><br>
                            As a brewer, Matt holds dear to tradition. You will find many traditional styles on our beer board, including  English ales or German lagers. At Endeavour Brewing, we honor the past while embracing the spirit of community and camaraderie that defines the present and shapes the future.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="neo-inner-container">
                <div class="flex">
                    <!-- This is for mobile -->
                    <div class="who-we-are-bg-img-2"></div>
    
                    <!-- This is for when we hit tablet view -->
                    <img class="who-we-are-img" src="<?php echo get_template_directory_uri(); ?>/img/coffee.webp" alt="Endeavour coffee on table">
                    <div class="inner-container">
                        <h3>Endeavour Coffee roasters</h3>
                        <p>In 2022, we ventured into our second passion: coffee. Our love for coffee runs deep—it's a beverage that brings people together, boasts diverse flavor profiles akin to beer, and kick-starts our day, every day.
                            <br><br>
                            At Endeavour, we made a deliberate choice to offer only single-origin beans. These beans are sourced from specific geographic locations, such as individual farms or estates, capturing the unique terroir of their origin. Each cup tells a story, embodying the distinct flavors, aromas, and characteristics nurtured by the local soil, climate, and altitude.
                            <br><br>
                            After extensive research, we discovered that many of our favorite coffees were roasted using Probat machines. Thus began our quest to acquire one. Finally, we stumbled upon an old Probat roaster in Vancouver, dating back to 1987 and originating from West Germany. While the roaster required some refurbishment, the effort was well worth it. We affectionately named it Brenner—"Made with Fire."
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="last-neo-inner-container">
                <div class="flex last-flex">
                    <!-- This is for mobile -->
                    <div class="who-we-are-bg-img-3"></div>
    
                    <!-- This is for when we hit tablet view -->
                    <img class="who-we-are-img beer-man" src="<?php echo get_template_directory_uri(); ?>/img/employee-holding-endeavour-glass.webp" alt="Employee holding endeavour glass">
                    <div class="mission-statement inner-container">
                        <div class="mission-content">
                            <h3>Mission Statement</h3>
                            <p>At Endeavour, we are more than just makers of great beer and coffee; we are cultivators of community, quality, and connection. Our mission is to create exceptional beer/coffee that not only tantalizes the taste buds but also brings people together in shared moments of joy and camaraderie. We are committed to upholding the highest standards of quality in every pint or cup of coffee we pour, ensuring that each sip is a testament to our dedication to excellence. Through our craft, we strive to create a welcoming space where individuals from all walks of life can gather, forge meaningful connections, and celebrate the simple pleasures of life over a pint of beer or a cup of coffee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
 
 <?php
 get_footer();
 ?>