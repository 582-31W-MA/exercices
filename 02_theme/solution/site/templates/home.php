<?php snippet("layout", slots: true) ?>

<h1><?= $page->title() ?></h1>
<section>
	<h2>Articles</h2>
	<ul>
		<?php foreach ($articles as $article) : ?>
			<li>
				<a href="<?= $article->url() ?>">
					<?= $article->title() ?>
				</a>
				<p><?= $article->text()->excerpt(100, false) ?></p>
			</li>
		<?php endforeach ?>
	</ul>
</section>

<?php endsnippet() ?>