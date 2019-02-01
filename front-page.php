<?php
/**
 * The template for displaying front page
 */

get_header();
?>

<!-- Content -->
<!-- Slider -->
<div class="slider">
	<ul class="slick-slider container">
		<?php $args = array(
			'posts_per_page'	=> 4,
			'order'						=> 'DESC',
			'orderby'					=> 'date',
			'post_type'				=> 'post'
		); ?>
		<?php $slider = new WP_Query($args); ?>
		<?php while($slider->have_posts() ): $slider->the_post(); ?>

			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('featured'); ?>
				</a>
			</li>

		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>

<div class="icons">
	<div class="container">
		<?php dynamic_sidebar( 'front_page_widgets' ); ?>
	</div>	
</div>

<div id="front-page">
	<div class="container">
		<div class="bottom-front-page">
			<div class="aboutus-section">
				<?php $aboutUs = new WP_Query('pagename=about-us'); ?>
				<?php while($aboutUs->have_posts() ): $aboutUs->the_post(); ?>
					<h2 class="red-color"><?php the_title(); ?></h2>
					<?php the_content('continue reading'); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
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
		</div>
	</div>
</div>
<!-- .Content -->

<?php
get_footer();