<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?>&nbsp;2017 | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">

	<?= css('assets/css/index.css') ?>

	<?= js('assets/js/jquery-3.1.0.min.js') ?>
	
	<?= js('assets/js/main.js') ?>
	<?php 	


	?>
</head>
<body>

	<div class='infos'>
		<h1><a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>,</h1>
		<h2>formes&nbsp;et&nbsp;pratiques</br>de&nbsp;l'édition</h2>
		<h2>30.03 - 01.04.2017 </h2>
	</div>
 	

	
	<?php snippet('menu') ?>

	<?php if($site->maintenance()->isTrue() and $page->uid() != 'maintenance') { go('maintenance');} ?>



<!-- fin snippets/header.php -->