<?php
/* The template for displaying the footer */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<nav id="footer-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
	</nav>

	<div class="copyright">
		<p>torontoOnline <?php echo date('Y'); ?></p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
