<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bi
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="row">
			<div class="col-md-7">
				<h2>I'm flattered! You made it all the way to the bottom. How can I help you?</h2>
				<a class="btn" href="#">hello@brodbeckinteractive.com</a>
				<?php wp_nav_menu( array( 'menu_id' => 'primary-menu',) );?>
				<small>&copy; <?php the_time('Y'); ?> Brodbeck Interactive, LLC</small>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
