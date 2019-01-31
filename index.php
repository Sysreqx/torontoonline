<?php
/**
 * The main template file
*/

get_header();
?>

<!-- Content -->
<div id="primary" class="content-area container">
	<main id="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="posts">
				<h2 class="red-color"><?php the_title() ?></h2> 
				<?php the_content() ?>
			</div>
		<?php endwhile; else : ?>
		<p>Записей нет.</p>
	<?php endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();