<?php snippet('header') ?>

<!-- default.php -->

<div id='container'>
	<div class='rubrique programme' id="<?php echo $page->id(); ?>">
		<!-- <h1><?= $page->title()->html() ?></h1>-->
		
		<?= $page->text()->kirbytext() ?>
	</div>
</div>


<!-- fin default.php -->

<?php snippet('footer') ?>