<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header red-bg">
			<div class="container">
				<div class="site-branding" >
					<?php
					if ( is_front_page() ) :
						?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
						<?php
					else :
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
						</a>
						<?php
					endif;
					?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				</nav>
				
			</div> <!-- .container -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
