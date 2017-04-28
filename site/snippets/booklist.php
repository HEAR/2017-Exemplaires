<!-- snippets/booklist.php -->

<?php $pxtorem=16; ?>

<div class="side">


	<!--<h2>Publication d'accompagnement</h2>-->

	<?php foreach(page()->children()->visible()->limit(1)  as $livre){ ?>


	<h2 id="i<?= $livre->images()->first()->name() ?>"><a href="<?= $livre->url() ?>"><?php echo $livre->title()->html()  ?></a></h2>

	<?php }  ?>

	<h2>Ouvrages sélectionnés</h2>
	<ul>
		<?php foreach(page()->children()->visible()->not('catalogue')->sortBy('title', 'asc')  as $livre){ ?>
		<li id="i<?= $livre->images()->first()->name() ?>">
			<h3><a href="<?= $livre->url() ?>"><?php echo $livre->title()->kirbytext()  ?></a></h3>
		</li>
		<?php }  ?>

	</ul>

	<!--<h2>Ouvrages de comparaisons</h2>-->
</div>

<div class="main">
	<h2><?= $page->title()->html() ?></h2>
	<h3><?= $page->theme()->html() ?></h3>
	<p><?= $page->about()->html() ?></p>

	<ul>

		<?php foreach(page()->children()->visible()->limit(1)  as $livre){ ?>
		<li id="i<?= $livre->images()->first()->name() ?>">
			<a href="<?= $livre->url() ?>">
				<img class="gray" src="<?= $livre->images()->first()->resize(800, 800)->url() ?>" height="<?= (($livre->height()->value()/10)*$pxtorem)?>">
			</a>
		</li>
		<?php }  ?>

		<li class="filet"></li>

		<?php foreach($page->children()->visible()->not('catalogue')->sortBy('title', 'asc') as $livre){ ?>
		<li id="i<?= $livre->images()->first()->name() ?>">
			<a href="<?= $livre->url() ?>">
				<img class="gray" src="<?= $livre->images()->first()->resize(800, 800)->url() ?>" height="<?= (($livre->height()->value()/10)*$pxtorem)?>">
			</a>
		</li>

		<?php } ?>
	</ul>

	<!--<h2>Ouvrages de comparaisons</h2>-->
</div>

<!-- fin snippets/booklist.php -->