<nav>
	<?php
	// Crée une nouvelle requête WP contenant seulement les pages.
	$pages = new WP_Query(["post_type" => "page"]);
	// Itère sur les pages. `the_post` incrémente l'index.
	while ($pages->have_posts()) : $pages->the_post();
	?>
		<a href="<?= the_permalink() ?>"><?= the_title() ?></a>
	<?php 
	endwhile;
	// Restaure le contexte à la page sur laquelle 
	// nous sommes présentement.
	wp_reset_postdata();
	?>
</nav>