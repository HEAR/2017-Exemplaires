<?php snippet('header') ?>

<!-- default.php -->

<main class="main" role="main">

	<header class="wrap">
		<h1><?= $page->title()->html() ?></h1>
	</header>


	<div class="text wrap">
		<?= $page->text()->kirbytext() ?>
	</div>
	

</main>

<!-- fin default.php -->

<?php snippet('footer') ?>