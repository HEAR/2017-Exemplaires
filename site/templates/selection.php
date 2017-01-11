<?php snippet('header') ?>

<!-- selection.php -->

<main class="main" role="main">

	<header class="wrap">
		<h1><?= $page->title()->html() ?></h1>
		<div class="intro text">
			<?= $page->text()->kirbytext() ?>
		</div>
		<hr />
	</header>

	<div class="wrap wide">    
		<?php snippet('booklist') ?>
	</div>

</main>

<!-- fin selection.php -->

<?php snippet('footer') ?>