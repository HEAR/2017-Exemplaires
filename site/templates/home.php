<?php snippet('header') ?>

<!-- home.php -->

<div id='container'>


	<div class='rubrique' id="<?php echo $page->id(); ?>">
			<?= $page->text()->kirbytext() ?>
		</div>
	<?php /*snippet('bookmosaic')*/ ?>
	</div>


<!-- fin home.php -->

<?php snippet('footer') ?>