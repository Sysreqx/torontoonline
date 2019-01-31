<?php
/**
 * The template for displaying all pages
 */

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php if( has_post_thumbnail() ) { ?>
		<div class="container featured">
			<?php the_post_thumbnail('featured'); ?>
			<h2><?php the_title(); ?></h2>
		</div>
	<?php } else { ?>
		<div class="container">
			<h2 class="red-color"><?php the_title(); ?></h2>
		</div>
	<?php } ?>
<?php endwhile; // End of the loop.?>


<div id="primary" class="content-area">
	<div class="container ">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div>
</div><!-- #primary -->

<?php
get_footer();
