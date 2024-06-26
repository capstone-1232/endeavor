<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package endeavor-theme
 */

 $title = get_the_title();
 ?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- <style>
		.home-hero {
    	background-image: url(./img/home-hero-mobile.webp);
		background-size: cover;	
		background-position: center;
		background-repeat: no-repeat;
		display: flex;
		justify-content: center;
		align-items: center;		
		}

		@media screen and (min-width: 700px) {
    		.home-hero {
        	background-image: url(./img/home-hero-tablet.webp);
    	}
}

		@media screen and (min-width: 1000px) {
			.home-hero {
			background-image: url(./img/home-hero.webp);
		}
	}
	</style> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="nav-overlay"></div>


	<header class="main-header nav-flex">
		<div class="inner-container">
			<div class="xoo-wsc-cart-trigger">
				<button class="shop-btn" aria-label="Button to View Shopping Cart">
					<svg fill="none" stroke="#f2f2f2" stroke-width="1.5" width="30px" height="28.13px" class="w-6 h-6"
						viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
					</svg>
				</button>
			</div>

			<div class="wide-nav-flex">
				<div class="logo">
					<?php
					the_custom_logo();
					?>
					<h1 class="screen-reader-text">Endeavor Brewing Company and Coffee Roasters</h1>
				</div>



				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Main Menu">


					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>

				</nav>
			</div>

			<button id="menu-toggle" class="menu-toggle shop-btn" aria-controls="primary-menu" aria-expanded="false" aria-label="Button to Toggle Menu" tabindex="0">
				<svg xmlns="http://www.w3.org/2000/svg" width="30px" height="28.13px" fill="none" viewBox="0 0 24 24"
					stroke-width="1.5" stroke="#f2f2f2" class="w-6 h-6 site-navigation">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
			</button>

		</div>

	</header>
