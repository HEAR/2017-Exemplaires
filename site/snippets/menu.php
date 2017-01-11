<nav class="menu" role="navigation">
	<ul class="pages">
		<?php foreach($pages->visible()->filterBy('template', 'default') as $item): ?>
			<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
				<a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
			</li>
		<?php endforeach ?>
	</ul>


	<ul class="selections">
		<?php foreach($pages->visible()->filterBy('template', 'selection') as $item): ?>
			<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" data-selection="<?php echo  $item->diruri() ?>">
				<a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
			</li>
		<?php endforeach ?>
	</ul>
</nav>