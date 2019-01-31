<?php
/**
 * The main template file
*/

get_header();
?>


<div id="primary" class="content-area">
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

						<div class="post-information pos-rel">
							<p>By: <span class="red-color"><?php the_author(); ?></span></p>
							<p class="date">Published: <span class="red-color"><?php the_time('d/m/Y'); ?></span></p>
							<p class="blog-cat">Written On: <?php the_category(', '); ?></p>
						</div>

						<?php the_excerpt(); ?>
					</div>

				</article>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->

	</div>
</div><!-- #primary -->

<?php
get_footer();
