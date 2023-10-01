<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>
	<article>
		<a href="<?= get_permalink() ?>">
			<?php the_title() ?>
		</a>
	</article>
<?php endwhile ?>

<?php get_footer() ?>