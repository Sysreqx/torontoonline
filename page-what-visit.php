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
	<main id="main" class="site-main container">
		<?php 

		$args = array (
			'posts_per_page'	=> 5,
			'category_name'		=> 'what-to-visit',
			'order'						=> 'DESC',
			'orderby'					=> 'date'
		);
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_footer();