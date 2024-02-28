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
     <main>
         <section>
             <div class="grid">
                 <div class="inner-container">
                     <h2>Who we are</h2>
                     <p>
                         Endeavour Brewing is a family friendly (all kids are welcome), community orientated craft brewery in St. Albert.  Our love for great quality beers drove us to develop and brew our favourite pints.  Consistent quality and the freshest ingredients are paramount as we strive to create beers that cater to not only our thirsty palate but to the active lifestyles we enjoy with our friends, family and colleagues.  At Endeavour Brewing, we are inspired by our other passions in life including the outdoors, sports and those who are taking risks and making great things happen.
                     </p>
                 </div>
                 <div>
                     <img src="" alt="">
                 </div>
             </div>
         </section>
         <section>
             <div class="grid">
                 <div>
                     <img src="" alt="">
                 </div>
                 <div class="inner-container">
                     <h2>Mission Statement</h2>
                     <p>
                     At Endeavour,, we are more than just makers of great beer and coffee; we are cultivators of community, quality, and connection. Our mission is to create exceptional beer/coffee that not only tantalizes the taste buds but also brings people together in shared moments of joy and camaraderie. We are committed to upholding the highest standards of quality in every pint or cup of coffee we pour, ensuring that each sip is a testament to our dedication to excellence. Through our craft, we strive to create a welcoming space where individuals from all walks of life can gather, forge meaningful connections, and celebrate the simple pleasures of life over a pint of beer or a cup of coffee.
                     </p>
                 </div>
             </div>
         </section>
         <section>
             <div class="inner-container">
                 <h2>Our Commitments</h2>
                 <div>
                     <p>
                         Follow all government health and food safety guidelines to ensure a safe and seamless experience for our guests
                     </p>
                 </div>
                 <div>
                     <p>
                         Our menus are available on the main board and website.
                     </p>
                 </div>
                 <div>
                     <p>
                         Tables, high contact touch points and washrooms are sanitized frequently, and diligently, throughout the day.
                     </p>
                 </div>
                 <div>
                     <p>
                         Low contact sections and contactless payment options are available.
                     </p>
                 </div>
                 <div>
                     <p>
                         Frequently washing our hands between all contact and providing hand sanitizer throughout the restaurant.
                     </p>
                 </div>
             </div>
         </section>
         <section>
             <h2>Our values</h2>
             <div class="d-flex">
                 <div>
                     <img src="" alt="">
                     <p>Community</p>
                 </div>
                 <div>
                     <img src="" alt="">
                     <p>Quality</p>
                 </div>
                 <div>
                     <img src="" alt="">
                     <p>Connection</p>
                 </div>
                 <div>
                     <img src="" alt="">
                     <p>Collaboration</p>
                 </div>
             </div>
         </section>
     </main>
 </body>
 </html>
 
 <?php
 get_footer();
 ?>