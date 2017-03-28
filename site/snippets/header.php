<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'fr' ?>">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php echo $site->description()->html() ?>">
 	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
 	<meta name="author" content="<?php echo $site->author()->html() ?>">

	<title><?= $site->title()->html() ?>&nbsp;2017 | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">

	<meta property="og:site_name" content="<?php echo $site->title()->html() ?>">
	<meta property="og:title" content="<?php echo $page->title()->html() ?>">
	<meta property="og:description" content="<?php echo $site->description()->html() ?>">
	<meta property="og:url" content="<?php echo $site->url() ?>">
	<meta property="og:image" content="<?php echo $site->ogimage()->html() ?>">
	<meta property="og:type" content="website">

	<meta name="twitter:title" content="<?php echo $page->title()->html() ?>">
	<meta name="twitter:description" content="<?php echo $site->description()->html() ?>">
	<meta name="twitter:url" content="<?php echo $site->url() ?>">
	<meta name="twitter:image" content="<?php echo $site->ogimage()->html() ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="<?php echo $site->title()->html() ?>">
	<meta name="twitter:creator" content="<?php echo $site->author()->html() ?>">

	<meta name="apple-mobile-web-app-capable" content="yes">

	<?= css('assets/css/index.css') ?>
	<?= css('assets/css/font-awesome.css') ?>

	<?= js('assets/js/jquery-3.1.0.min.js') ?>
	
	<?= js('assets/js/main.js') ?>
	<?php 	


	?>
</head>

<body>
	

	<div class='infos'>
		<h1><a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>,</h1>
		<h2>formes&nbsp;et&nbsp;pratiques</br>de&nbsp;lʼédition</h2>
		<h2>30.03 - 30.04.2017 </h2>
	</div>
 	

	
	<?php snippet('menu') ?>

	<?php if($site->maintenance()->isTrue() and $page->uid() != 'maintenance') { go('maintenance');} ?>



<!-- fin snippets/header.php -->