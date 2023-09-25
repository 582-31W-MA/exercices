<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/style.css">
	<title><?= $site->title() ?> | <?= $page->title() ?></title>
</head>

<body>
	<header>
		<a href="/"><?= $site->title() ?></a>
	</header>
	<main>
		<?= $slot ?>
	</main>
</body>

</html>