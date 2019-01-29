<?php
/**
 * The template for displaying all pages
 */

get_header();
?>
<div class="container featured">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_post_thumbnail('featured'); ?>
		<h2><?php the_title(); ?></h2>
	<?php endwhile; // End of the loop.?>
</div>

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
