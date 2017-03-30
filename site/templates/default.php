<?php snippet("header") ?>

<!-- default.php -->
 

<div id="container">
	<div class="rubrique <?php if ($page->isChildOf("programme")) { echo "programme";}?>"

	 id="<?php echo $page->uid(); ?>">
		
		<?= $page->text()->kirbytext() ?>
	</div>
</div>


<!-- fin default.php -->

<?php snippet("footer") ?>