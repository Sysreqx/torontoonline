<?php
/**
 * The template for displaying all pages
 */

get_header();
?>



<div id="primary" class="content-area">
	<div class="container">
		<h1>Category: <span class="red-color"><?php single_cat_title(); ?></span></h1>
	</div>
	<div class="container ">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="article">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium_blog') ?>
					</a>
					<div class="article-content">
						<h2 class="red-color">
							<?php the_title(); ?>
						</h2>
						<?php the_excerpt(); ?>
					</div>
				</article>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div>
</div><!-- #primary -->

<?php
get_footer();
