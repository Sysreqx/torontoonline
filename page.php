<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

		<?php endwhile; // End of the loop.?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();