<?php
$accent_color = get_post_meta(
	get_the_ID(),
	'accentcolor_color_main',
	true
);
?>

<main style="color: <?= $accent_color ?>" ?>
	test
</main>