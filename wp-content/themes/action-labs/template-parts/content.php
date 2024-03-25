<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package action-labs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_category() ?>
	
	<?php action_labs_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'action-labs'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<a class="more-link" href=<?= get_permalink(); ?>>
			<?= esc_html('Leia mais »'); ?>
		</a>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->