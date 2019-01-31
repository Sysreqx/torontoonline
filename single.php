<?php
/**
 * The template for displaying all single posts
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

				<article>
					<div class="written-info">
						<div class="column">
							<?php the_tags( 'Tags: ', ' , '); ?>
						</div>
						<div class="column">
							Category : <?php the_category(' , '); ?>
						</div>
						<div class="column">
							Written By: <span class="red-color"><?php the_author(); ?></span>
						</div>
					</div>
				</article>

				<?php the_content(); ?>

				<?php comments_template(); ?>

				<?php edit_post_link(); ?>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div>
</div><!-- #primary -->

<?php
get_footer();
