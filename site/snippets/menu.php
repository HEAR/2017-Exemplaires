<!-- snippets/menu.php -->

<nav>
	
	<ul class="menu <?php
	$id=$site->page()->id();
	$tiret=strpos($id,"-");
	$categorie=substr($id, 0,$tiret);
	echo $categorie; 
	if ($categorie==NULL){
	echo $id;
	}
	?>">
	
	
<!-- 		<li class="menu-item" id="liste-selection">
		<a href="<?= url() ?>" rel="home">Sélections</a>
		</li>
		
		<ul class="sous-menu invisible" id="selection">

			<?php foreach($pages->visible()->filterBy('url', '*=', 'selection-') as $item):?>
				<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
						<a href="<?= $item->url() ?>">
							<table><tr>
								<td><span class='puce'>&#149;&thinsp;</span></td>
								<td><?= $item->title()->html() ?></td>
							</tr></table></a>
				</li>
			<?php endforeach ?>

		</ul>  -->


		<li class="menu-item" id="liste-programme">	
			<a href="<?= url()."/programme" ?>">Programme</a>
		</li>

	
		<ul class="sous-menu invisible" id="programme">
		<?php foreach($pages->visible()->filterBy('url', '*=', 'programme-') as $item):?>
			<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
						<a href="<?= $item->url() ?>">
							<table><tr>
								<td><span class='puce'>&#149;&thinsp;</span></td>
								<td><?= $item->title()->html() ?></td>
							</tr></table></a>
				</li>
		<?php endforeach ?>
	
	</ul>
			<?php 
		$excluded=$pages->visible()->filterBy('url', '*=', 'programme');

		foreach($pages->visible()->filterBy('template','default')->not($excluded) as $item):?>
			<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" id="<?php echo  $item->id() ?>">
				<a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
			</li>
		<?php endforeach ?>
	</ul>
</nav>



<!-- fin snippets/menu.php -->