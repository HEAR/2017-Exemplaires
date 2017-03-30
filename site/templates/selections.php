<?php snippet('header') ?>

<div id="container">

	<div class="rubrique" id="selections">

	<div class="ecole">
		<ul>
			<?php foreach($page->children()->visible() as $ecoles){ ?>
			
			<li class="<?= $ecoles->ville()->lower() ?>">
				<h4><?= $ecoles->sigle()?></h4>
				<h5><?= $ecoles->ville()?></h5>
			</li>	 	
			
			<?php } ?>

			

		</ul>

	</div>
		<?php snippet('bookmosaic') ?>

	</div>

</div>

<?php snippet('footer') ?>
