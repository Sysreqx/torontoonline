<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<div id="primary" class="content-area">
	<div class="container ">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div>
</div><!-- #primary -->

<?php
get_footer();
