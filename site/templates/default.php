<?php snippet('header') ?>

<!-- default.php -->
 

<div id='container'>
	<div class='rubrique' id='<?php

 	$id=$site->page()->id();
	$tiret=strpos($id,"-");
	$categorie=substr($id, 0,$tiret); 
	
	if ($categorie=='programme'){
	echo $categorie;
	}else{

	echo $id;		
	}
	?>'>
		<!-- <h1><?= $page->title()->html() ?></h1>-->
		
		<?= $page->text()->kirbytext() ?>
	</div>
</div>


<!-- fin default.php -->

<?php snippet('footer') ?>