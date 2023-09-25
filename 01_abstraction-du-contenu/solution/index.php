<?php include "data.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu du Tri Express</title>
</head>

<body>
	<h1>Menu du Tri Express</h1>
		<?php foreach ($sections as $section) : ?>
		<section>
			<hgroup>
				<h2><?= $section["nom"] ?></h2>
				<p>
					<?php
					if (isset($section["description"])) {
						echo $section["description"];
					}
					?>
				</p>
			</hgroup>
			<?php
			if (isset($section["sous-section"])) {
				foreach ($section["sous-section"] as $sous_section) {
					include "partials/sous-section.php";
				}
			} else {
				foreach ($section["plats"] as $plat) {
					include "partials/plat.php";
				}
			}
			?>
		</section>
	<?php endforeach ?>
</body>

</html>