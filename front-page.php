<?php
/**
 * The template for displaying front page
 */

get_header();
?>

<!-- Content -->
<!-- Slider -->
<?php get_template_part('template-parts/slider'); ?>

<div class="icons">
	<div class="container">
		<?php dynamic_sidebar( 'front_page_widgets' ); ?>
	</div>	
</div>

<div id="front-page">
	<div class="container">
		<div class="bottom-front-page">
			<?php get_template_part('template-parts/aboutus'); ?>
			<?php get_template_part('template-parts/tips'); ?>
		</div>
	</div>
</div>
<!-- .Content -->

<?php
get_footer();