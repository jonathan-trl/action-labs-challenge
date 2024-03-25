<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package action-labs
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="hero">
		<div class="overlay"></div>
		<?= the_post_thumbnail('full'); ?>
	</div>

	<div class="container content">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part('template-parts/content', 'single-post');
		endwhile;
		?>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
