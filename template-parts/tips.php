<div class="blog-tips">
	<h2 class="red-color">tips to travel to toronto</h2>

	<?php 
	$args = array(
		'category_name'		=> 'travels-tips',
		'posts_per_page'	=> 2,
		'order'						=> 'DESC',
		'orderby'					=> 'date'
	);

	$query = new WP_Query( $args ); ?>

	<?php if ( $query->have_posts() ) : ?>
		<ul>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium_blog'); ?>
					</a>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="continue-reading">continue reading</a>
				</li>
			<?php endwhile; ?>
		</ul>
		<?php wp_reset_postdata(); else : ?>

		<p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>

	<?php endif; ?>
</div>