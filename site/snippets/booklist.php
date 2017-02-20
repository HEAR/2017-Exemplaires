<!-- snippets/booklist.php -->

<!--<h2>Les livres</h2>-->

<ul class="teaser cf">
	<?php foreach(page()->children()->visible() as $livre): ?>
      <li class="list_livre">
			<div>
			   <h3><a href="<?php echo $livre->url() ?>"><?php echo $livre->title()->html() ?></a></h3>
         </div>
			<!-- <p><?php echo $livre->text()->excerpt(80) ?> <a href="<?php echo $livre->url() ?>">read&nbsp;more&nbsp;→</a></p> -->
<!--			<?php echo $livre->text()->kirbytext() ?>-->
			<?php if($image = $livre->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $livre->url() ?>">
               <img class="selection_cover" width="<?= $livre->width() ?>px" height="<?= $livre->height() ?>px" src="<?php echo $image->url() ?>" alt="<?php echo $livre->title()->html() ?>" >
				</a>
			<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>

<!-- fin snippets/booklist.php -->