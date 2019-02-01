<?php
/*
* Template Name: What To Visit
*/

get_header();
?>

<!-- Hero Image -->
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

<!-- Content -->
<div id="primary" class="content-area">
	<main id="main-page" class="site-main container">
		<?php 

		$args = array (
			'posts_per_page'	=> 6,
			'category_name'		=> 'what-to-visit',
			'order'						=> 'DESC',
			'orderby'					=> 'date'
		);
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
			<ul class="blog-visit">

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li>

						<div class="pos-rel">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium_blog'); ?>
							</a>
							<p class="p-category pos-abs">
								<?php 
								$categories = get_the_category();
								if ( ! empty( $categories ) ) {
									echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								}
								?>
							</p>
						</div>

						<div class="content">
							<h2 class="red-color"><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						</div>

						<div class="post-information">
							<p>By: <span class="red-color"><?php the_author(); ?></span></p>
							<p class="date"><?php the_time('d/m/Y'); ?></p>
						</div>

					</li>
				<?php endwhile; ?>
			</ul>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_footer();