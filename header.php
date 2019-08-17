<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IT-blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
					</div>

					<div class="nav-logo">
						<?php the_custom_logo(); ?>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form>
								<input class="input" name="search" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->

					<?php wp_nav_menu([
						'theme_location'  => 'top-menu',
						'container'       => null,
						'menu_class'      => 'nav-menu',
						// 'menu_id'         => 'nav'
					]); ?>
					
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<?php wp_nav_menu([
						'theme_location'  => 'top-menu',
						'container'       => 'div',
						'menu_class'      => 'nav-aside-menu',
						'container_id'    => 'nav-aside'
					]); ?>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->