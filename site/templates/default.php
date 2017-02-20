<?php snippet('header') ?>

<!-- default.php -->
 
 <?php

 	$id=$site->page()->id();
	$tiret=strpos($id,"-");
	$categorie=substr($id, 0,$tiret);
	$prog_page=substr($id, $tiret+1);
	?>

<div id='container'>
	<div class='rubrique <?php
	if($categorie=='programme'){
	echo $categorie;
	}elseif ($id=='programme') {
	echo $id;
	}
	?>' id='<?php
	if($categorie!='programme'){
	echo $id; }else{

	echo $prog_page;} ?>'>

		<!-- <h1><?= $page->title()->html() ?></h1>-->
		
		<?= $page->text()->kirbytext() ?>
	</div>
</div>


<!-- fin default.php -->

<?php snippet('footer') ?>