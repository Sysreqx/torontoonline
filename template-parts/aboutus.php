<div class="aboutus-section">
	<?php $aboutUs = new WP_Query('pagename=about-us'); ?>
	<?php while($aboutUs->have_posts() ): $aboutUs->the_post(); ?>
		<h2 class="red-color"><?php the_title(); ?></h2>
		<?php the_content('continue reading'); ?>
	<?php endwhile; wp_reset_postdata(); ?>
</div>