<!-- snippets/bookmosaic.php -->

<?php $pxtorem=16; ?>



	<div class="mosaic">
 <?php foreach($page->children()->visible() as $ecoles){ ?>

 <?php	 foreach($ecoles->children()->visible()->slice(1,7) as $livre){ 



 	 	if ($livre->images()->first()!= NULL) {?>

 	 	<a href="<?= $ecoles->uri() ?>">
 			<img src="<?= $livre->images()->first()->resize(400, 400)->url() ?>" class="<?= $ecoles->ville()->lower() ?>" width="<?= (($livre->width()->value()/25)*$pxtorem) ?>"/>

 		</a>
<?php  }	

	}

  } ?>

</div>
<!-- fin snippets/bookmosaic.php -->