<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package action-labs
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="container">
			<?php the_custom_logo() ?>
			<hr>
			<div class="copyright">
				<?php get_sidebar('footer'); ?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
