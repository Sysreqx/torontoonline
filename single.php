<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Цикл WordPress -->
			<h2><?php the_title() ?></h2> 
			<?php the_content() ?>
		<?php endwhile; else : ?>
		<p>Записей нет.</p>
	<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
