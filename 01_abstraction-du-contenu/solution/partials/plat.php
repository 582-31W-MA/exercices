<article>
	<h4>
		<?= $plat['nom']; ?>
		<?php if ($plat['favoris']) : ?>
			<em>favoris!</em>
		<?php endif ?>
	</h4>
	<?php if (isset($plat['choix'])) : ?>
		<p><?= $plat['choix'] ?></p>
	<?php endif ?>
	<?php if (isset($plat['description'])) : ?>
		<p><?= $plat['description'] ?></p>
	<?php endif ?>
	<dl>
		<dt>Prix</dt>
		<dd><?php echo $plat['prix']; ?></dd>
		<?php if (isset($plat['quantité'])) : ?>
			<dt>Quantité</dt>
			<dd><?php echo $plat['quantité']; ?>
			</dd>
		<?php endif ?>
		<?php if (isset($plat['ingrédients'])) : ?>
			<dt>Ingrédients</dt>
			<dd>
				<ul>
					<?php foreach ($plat['ingrédients'] as $ingredient) : ?>
						<li><?php echo $ingredient; ?></li>
					<?php endforeach ?>
				</ul>
			</dd>
		<?php endif ?>
	</dl>
</article>