<!-- snippets/coverimage.php -->

<?php if($item->coverimage()->isNotEmpty()): ?>
	<figure>
		<img src="<?= $item->coverimage()->toFile()->url() ?>" alt="" />
	</figure>
<?php endif ?>

<!-- fin snippets/coverimage.php -->