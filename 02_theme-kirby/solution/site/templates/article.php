<?php snippet("layout", slots: true) ?>

<hgroup>
	<h1><?= $page->title() ?></h1>
	<?php if ($page->author() != "") : ?>
		<p><?= $page->author() ?></p>
	<?php endif ?>
	<?php if ($page->date() != "") : ?>
		<time><?= $page->date() ?></time>
	<?php endif ?>
</hgroup>

<?= $page->text()->markdown() ?>

<?php if ($images = $page->images()) : ?>
	<?php foreach ($images as $image) : ?>
		<figure>
			<img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
			<?php if ($image->title() != "") : ?>
				<figcaption><?= $image->title() ?></figcaption>
			<?php endif ?>
		</figure>
	<?php endforeach ?>
<?php endif ?>

<cite><?= $page->source() ?></cite>

<?php endsnippet() ?>