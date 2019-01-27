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

		<header id="masthead" class="site-header" style="background-color: rebeccapurple;">
			<div class="site-branding" >
				<?php
				if ( is_front_page() ) :
					?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="a">
					<?php
				else :
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="a">
					</a>
					<?php
				endif;
				?>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
