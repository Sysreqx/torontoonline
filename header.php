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

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				if ( is_front_page() ) :
					?>
					<?php echo get_template_directory(); ?>/img/intelligente.png
					<img src="<?php echo get_template_directory(); ?>/img/intelligente.png" alt="">
					<?php
				else :
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory(); ?>/img/logo.png" alt="">
					</a>
					<?php
				endif;
				$torontoonline_description = get_bloginfo( 'description', 'display' );
				if ( $torontoonline_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $torontoonline_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'torontoonline' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
