<section>
	<hgroup>
		<h3><?= $sous_section["nom"] ?></h3>
		<?php if (isset($sous_section["description"])): ?>
			<p><?= $sous_section["description"] ?></p>
		<?php endif ?>
	</hgroup>
	<?php foreach ($sous_section["plats"] as $plat) {
	    include "plat.php";
	} ?>
</section>