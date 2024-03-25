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

	<?php action_labs_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		the_category();
		?>
		<div class="date-tags">
			<div class="date"><?php the_date('', '<i class="fa-solid fa-calendar"></i>') ?></div>
			<div class="tags"><?php the_tags('<i class="fa-solid fa-tag"></i>') ?></div>
		</div>
		<?php
		the_title('<h1 class="entry-title">', '</h1>');
		?>
		<div class="author">
			Autor: <?php the_author(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->